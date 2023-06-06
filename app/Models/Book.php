<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

       public function category()
        {
            $this->belongsTo(Category::class, 'category_id', 'id');
        }

            public function user()
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
