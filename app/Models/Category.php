<?php

namespace App\Models;

class Category extends Model {

    protected $table = 'category';

    public function books(){
        return belognsToMany(Book::class, 'book_category', 'category_id', 'libro_id');
    }
}