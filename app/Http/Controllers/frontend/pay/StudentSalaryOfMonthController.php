<?php

namespace App\Http\Controllers\frontend\pay;

use App\Http\Controllers\Controller;
use App\Models\StudentSalary;
use Illuminate\Http\Request;

class StudentSalaryOfMonthController extends Controller
{
    public function index(){
        return view('frontend.pay.studentSalary');
    }
    
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'amount' => 'required|integer|min:750',
            'month_name' => 'required|string',
            'transaction_number' => 'required|alpha_num|unique:student_salaries,transaction_number',
            'student_name' => 'required|string|min:3|max:15',
            'class_name' => 'required|string',
        ]);

        // Store data in the database
        StudentSalary::create([
            'amount' => $request->amount,
            'month_name' => $request->month_name,
            'transaction_number' => $request->transaction_number,
            'student_name' => $request->student_name,
            'class_name' => $request->class_name,
        ]);

        return redirect()->back()->with('success', 'ধন্যবাদ - আপনার বেতন সঠিকভাবে পরিশোধ হয়েছে!');
    }


}
