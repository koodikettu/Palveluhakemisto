<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Business;

class HomeController extends Controller
{
    public function index() {
        
       $categories = Category::all();
       
       $businesses = Business::all();
       
       
       return view('home', compact('categories', 'businesses'));
        
    }
}
