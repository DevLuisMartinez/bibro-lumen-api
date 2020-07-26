<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'categories';
    protected $fillable = ['name','description','icon'];

    public function books(){
        return belognsToMany(Book::class, 'book_category', 'category_id', 'libro_id');
    }
}