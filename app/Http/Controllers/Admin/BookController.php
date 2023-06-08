<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use App\Models\User_Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function customersBooks()
    {

        $user = User::all()->where('type', '=', '1');

        return view('admin.customers-books', [
            'user' => $user,
        ]);
    }

    // public function lastBooks()
    // {
    //     $books = Book::simplePaginate(20);
    //     return view('admin.last_books', [
    //         'books' => $books
    //     ]);
    // }

    public function indexCustomer()
    {
        $books = Book::simplePaginate(20);
        return view('admin.index', [
            'books' => $books
        ]);
    }

    public function allUserBooks()
    {

        $name = request()->query('name', '');

        $books = Book::when($name, function ($query, $name) {
            return $query->where('name', 'LIKE', '%' . $name . '%');
        })->orderBy('id', 'desc')->simplePaginate(20);

        return view('admin.all_user_books', [
            'name' => $name,
            'books' => $books
        ]);
    }


    public function buyBook(Request $request)
    {
        $user_id = Auth::id();
        $user = User::findOrFail($user_id);

        $book = Book::find($request->input('book_id'));


        $price = $book->price;

        // Check if the user has enough budget
        if ($user->budget < $price) {
            return redirect('/');
        }

        $lastPrice = $user->budget - $price;


        // Update the user's budget
        $user->budget = $lastPrice;
        $user->save();


        $user->budget = $lastPrice;
        $user->save();

        $filePath = public_path('storage/' . $book->book_file);

        $new = new User_Book();
        $new->user_id = $user->id;
        $new->book_id = $request->input('book_id');
        $new->save();

        $book->increment('Num_sold');


        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            return response()->json(['message' => 'الملف غير موجود.']);
        }
    }

    public function bookDetails(Book $book)
    {
        return view('admin.book-details', [
            'book' => $book,
        ]);
    }



    // public function search(Request $request)
    // {

    //     if ($request->search) {

    //         $searchBook = Book::where('name', 'LIKE', '%' . $request->search . '%')->latest()->paginate(3);

    //         return view('visitor.search', [
    //             'books' => $searchBook,
    //         ]);
    //     } else {
    //         redirect()->back()->with('success', 'No Result.');
    //     }
    // }


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
