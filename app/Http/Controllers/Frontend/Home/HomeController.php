<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //*(:: HOME PAGE ::)
    public function index(){
        return view('frontend.layout');
    }
}
