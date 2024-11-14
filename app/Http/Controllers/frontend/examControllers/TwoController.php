<?php

namespace App\Http\Controllers\frontend\examControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TwoController extends Controller
{
    public function index(){
        return view('frontend.exam_result.two');
    }
}
