<?php

namespace App\Http\Controllers\backend\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    function view_category(){
        return view('backend.category.view_category');
    }

    function add_category(){
        return view('backend.category.add_category');
    }



}
