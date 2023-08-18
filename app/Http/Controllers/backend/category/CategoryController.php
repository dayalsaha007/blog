<?php

namespace App\Http\Controllers\backend\category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Ctaegory;
use Carbon\Carbon;
use Illuminate\Support\Str;

class CategoryController extends Controller
{


    function view_category(){
        $category = Category::latest()->get();
        return view('backend.category.view_category', [
            'category'=>$category,
        ]);
    }

    function add_category(){
        return view('backend.category.add_category');
    }

    function store_category(Request $request){

        $c_slug = Str::lower(str_replace(' ', '-', $request->c_name));

            Category::insert([
                'c_name'=>$request->c_name,
                'c_slug'=>$c_slug,
                'order_by'=>$request->order_by,
                'status'=>$request->status,
                'created_at'=> Carbon::now(),
            ]);
            return redirect()->route('view_category');
    }



}
