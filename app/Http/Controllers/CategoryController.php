<?php 

namespace App\Http\Controllers;

use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller {

    private $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }

    public function index(){

        $categories = $this->categoryRepository->getCategories();
        return response()->json($categories, 200);
    }

    public function show(int $id){

        $category = $this->categoryRepository->getCategoryByID($id); 
        return response()->json($category, 200);
    }

    public function create(Request $request){

        $category = $this->categoryRepository->createCategory($request->all());
        return response()->json($category, 201);
    }

    public function update(Request $request, int $id){
        $updated = $this->categoryRepository->updateCategory($request->all(), $id);
        return response()->json($updated, 204);
    }

    public function delete(int $id){
        $deleted = $this->categoryRepository->deleteCategory($id);
        return response()->json($deleted, 204);
    }
}