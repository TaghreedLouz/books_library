<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'book_img', 'description', 'book_file', 'author',
        'date_publication', 'price', 'Num_sold', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'user_books',
            'book_id',
            'user_id',
            'id',
            'id'
        );
    }
}
