<?php

namespace App\Http\Controllers;


use Request;
//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller {
    
    public function index() {
        $categories=Category::all();
        

        
        return view('categoryList', compact('categories'));
    }

    public function create() {
        return view('createCategory');
    }

    public function store() {
        
        $input = Request::all();
        
        Category::create(Request::all());
        
        return redirect('kategoriat');
        
    }

}
