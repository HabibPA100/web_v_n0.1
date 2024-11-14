<?php

namespace App\Http\Controllers\frontend\examControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HifjoController extends Controller
{
    public function index(){
        return view('frontend.exam_result.hifjo_bivag');
    }
}
