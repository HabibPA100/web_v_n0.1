<?php

namespace App\Http\Controllers\frontend\pay;

use App\Models\ExamFee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamFeeController extends Controller
{
    public function index(){
        return view('frontend.pay.examFee');
    }

    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'amount' => 'required|integer|min:200',
        'exam_name' => 'required|string',
        'transaction_number' => 'required|alpha_num|unique:exam_fees,transaction_number',
        'student_name' => 'required|string|min:3|max:15',
        'class_name' => 'required|string',
    ]);

    try {
        // Store data in the database
        ExamFee::create([
            'amount' => $request->amount,
            'exam_name' => $request->exam_name,
            'transaction_number' => $request->transaction_number,
            'student_name' => $request->student_name,
            'class_name' => $request->class_name,
        ]);

        return redirect()->back()->with('success', 'ধন্যবাদ আপনার অনুরোধটি গ্রহণ করা হয়েছে!');
    } catch (\Illuminate\Database\QueryException $e) {
        // Check if the error is due to a duplicate entry
        if ($e->getCode() == '23000') { // Integrity constraint violation code
            return redirect()->back()->withErrors(['transaction_number' => 'This transaction number has already been used.']);
        }

        // Re-throw the exception if it's not a duplicate entry issue
        throw $e;
    }
}


    // public function store(Request $request)
    // {
    //     // Validate the incoming request
    //     $request->validate([
    //         'amount' => 'required|numeric|min:100',
    //         'exam_name' => 'required|string',
    //         'transaction_number' => 'required|alpha_num|unique:student_salaries,transaction_number',
    //         'student_name' => 'required|string|min:3|max:15',
    //         'class_name' => 'required|string',
    //     ]);

    //     // Create a new ExamFee entry
    //     ExamFee::create($request->all());

    //     // Redirect or return a response
    //     return redirect()->route('exam.fee')->with('success', 'ধন্যবাদ আপনার অনুরোধটি গ্রহণ করা হয়েছে!');
    // }
}
