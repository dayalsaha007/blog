<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{

        function index(){
            return view('frontend.index');
        }

        function logout(){
            Auth::logout();
            return redirect()->route('index')->with('lo', 'Logout Successfully');
        }


}
