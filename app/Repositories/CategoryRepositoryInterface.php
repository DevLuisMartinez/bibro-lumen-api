<?php

namespace App\Repositories;

interface CategoryRepositoryInterface {

    public function getCategories();
    public function getCategoryByID(int $id);
    public function createCategory(array $attr);
    public function updateCategory(array $attr, int $id);
    public function deleteCategory(int $id);
}