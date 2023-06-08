<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /* return all data about books*/
    public function index()
    {
        $books = Book::simplePaginate(20);
        return view('admin.allbooks', [
            'books' => $books
        ]);
    }
    public function customersBooks()  {

        $user = User::all()->where('type','=','1');

        return view('admin.customers-books',[
            'user' => $user,
        ]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ارسال بيانات لصفحة الفورم لعرضها للاختيار منها
        $category = Category::all();
        return view('admin.create-book', [
            'category' => $category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'category_id' => 'required|int|exists:categories,id',
            'book_file' => 'nullable',
            'book_img' => 'nullable|image',
            'author' => 'required|string',
            'date_publication' => 'required',
            'price' => 'required|numeric',
        ]);
        $data = $request->all();
        $data['user_id'] = 1;
        if ($request->hasFile('book_img')) {
            $file = $request->file('book_img');
            $data['book_img'] =  $file->store('images', 'public');
        }

        if ($request->hasFile('book_file')) {
            $file = $request->file('book_file');
            $data['book_file'] =  $file->store('bookfile', 'public');
        }

        $book = Book::create($data);
        //تخزين في جدول العلاقات
        $book->users()->attach($request->user_id);

        return redirect()->back()->with([
            'message_flash' => 'تم إضافة الكتاب بنجاح ..',
            'alter' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('admin.book-edit', [
            'book' => $book,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'category_id' => 'required|int|exists:categories,id',
            'book_file' => 'nullable',
            'book_img' => 'nullable|image',
            'author' => 'required|string',
            'date_publication' => 'required',
            'price' => 'required|numeric',
        ]);
        $data = $request->all();

        if ($request->hasFile('book_img')) {
            $file = $request->file('book_img');
            $data['book_img'] =  $file->store('images', 'public');
        }

        if ($request->hasFile('book_file')) {
            $file = $request->file('book_file');
            $data['book_file'] =  $file->store('bookfile', 'public');
        }

        $book->update($data);
        //تخزين في جدول العلاقات
        $book->users()->attach($request->user_id);

        return redirect()->back()->with([
            'message_flash' => 'تم تعديل المنشور بنجاح ..',
            'alter' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back()->with([
            'message_flash' => 'تم حذف الكتاب بنجاح ..',
            'alter' => 'success'
        ]);
    }
}
