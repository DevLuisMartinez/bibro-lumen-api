<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface{

    public function __construct(Category $model){
        parent::__construct($model);
    }

    public function getCategories(){
        return $this->all();
    }

    public function getCategoryByID(int $id){
        return $this->find($id);
    }
    
    public function createCategory(array $attr){
        return $this->create($attr);
    }

    public function updateCategory(array $attr, int $id){
        return $this->update($attr, $id);
    }

    public function deleteCategory(int $id){
        return $this->delete($id);
    }
}