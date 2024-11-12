<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class error404Controller extends Controller
{
    public function index(){
        return view('frontend.404');
    }
}
