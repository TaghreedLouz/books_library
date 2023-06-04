<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\User;

class Books_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++){
            Book::create([
                'name' => 'bppk '.$i,
                'book_img' => 'book_img '.$i,
                'author' => 'author ' ,
                'date_publication' => 'date_publication ',
                'description' => 'description ',
                'price' => 'price ',
                'Num_sold' => 'Num_sold ',
                'description' => 'description ',
            'category_id' => null,
            ]);
          } 

    }
}
