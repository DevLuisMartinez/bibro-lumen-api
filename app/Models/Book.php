<?php

namespace App\Models;

class Book extends Model {

    protected $table = 'books';

    public function categories(){
        return belongsToMany(Category::class, 'book_category', 'book_id', 'category_id');
    }
}