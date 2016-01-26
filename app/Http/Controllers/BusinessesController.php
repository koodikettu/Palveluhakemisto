<?php

namespace App\Http\Controllers;

use Request;
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
        return view('createBusiness');
    }

    public function store() {

        $input = Request::all();
        
        $input['category_id']=1;
//        return $input;

        Business::create($input);

        return redirect('kohteet');
    }

}
