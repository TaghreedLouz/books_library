<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     * Num_sold حقل عدد مرات الشراء
     * most sold  تعني الاكثر شراء
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('book_img');
            $table->string('author');
            $table->string('date_publication');
            $table->string('description');
            $table->string('price');
            $table->integer('Num_sold')->default(0);
            $table->foreignId('category_id')
                ->constrained('categories');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
