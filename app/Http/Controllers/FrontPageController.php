<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Business;

class FrontPageController extends Controller {

    public function index() {

        $categories = Category::all();

        $businesses = Business::latest()->take(8)->get();


        return view('home', compact('categories', 'businesses'));
    }

    public function admin() {
        return view('admin');
    }

}
