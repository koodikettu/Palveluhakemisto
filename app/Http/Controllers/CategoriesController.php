<?php

namespace App\Http\Controllers;

use Request;
//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller {

    public function index() {
        $categories = Category::all();



        return view('categoryList', compact('categories'));
    }

    public function create() {
        return view('createCategory');
    }

    public function store(Requests\CreateCategoryRequest $request) {

        $input = $request->all();

        Category::create(Request::all());

        return redirect('kategoriat');
    }

    public function show($id) {
        $category = Category::findOrFail($id);
        $businessList = $category->businesses()->get();



        return view('category', compact('category', 'businessList'));
    }

    public function edit($id) {

        $category = Category::findOrFail($id);


        return view('editCategory', compact('category'));
    }

    public function update($id, Requests\CreateCategoryRequest $request) {

        $category = Category::findOrFail($id);

        $category->update($request->all());

        return redirect('kategoriat');
    }
    
    public function delete($id) {
        $category=Category::findOrFail($id);
        $category->delete();
        return redirect('kategoriat');
    }

}
