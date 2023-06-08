<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Book extends Model
{
    use HasFactory;

        protected $table = 'user_books';

        protected $fillable = [
                'book_id', 'user_id'
            ];

            public function book()
            {
                return $this->belongsTo(Book::class);
            }

            public function user()
            {
                return $this->belongsTo(User::class);
            }

}
