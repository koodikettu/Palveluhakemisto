<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Business;

class BusinessesController extends Controller {

    public function index() {
        $businesses = Business::all();



        return view('businessList', compact('businesses'));
    }

    public function create() {

        $categories = \App\Category::lists('name', 'id');

        return view('createBusiness', compact('categories'));
    }

    public function store(Requests\CreateBusinessRequest $request) {

        $input = $request->all();

        Business::create($input);

        return redirect('kohteet');
    }

    public function show($id) {

        $business = Business::findOrFail($id);



        return view('business', compact('business'));
    }

}
