<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Book extends Model
{
    //
    public static function getRelatedBooks($categoryId)
    {
        $relatedBooks = self::where('category_id', $categoryId)
            ->limit(6)
            ->get();
        return $relatedBooks;
    }
    protected $fillable = ['title', 'description', 'image','auther','lease_fees','total_copies_no','category_id'];
}

// $table->bigIncrements('id');
// $table->string('title');
// $table->text('description');
// $table->integer('rate');
// $table->string('image');
// $table->string('auther');
// $table->float('lease_fees');
// $table->integer('total_copies_no');
// $table->integer('available_copies_no');
// $table->unsignedBigInteger('category_id');
// $table->softDeletes();
// $table->timestamps();
// DB_CONNECTION=mysql
// DB_HOST=localhost
// DB_PORT=3306
// DB_DATABASE=library
// DB_USERNAME=root
// DB_PASSWORD=
