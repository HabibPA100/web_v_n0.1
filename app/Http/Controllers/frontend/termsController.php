<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class termsController extends Controller
{
    public function index(){
        return view('frontend.term_of_serves');
    }
}
