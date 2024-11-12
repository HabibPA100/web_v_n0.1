<?php

namespace App\Http\Controllers\frontend\pay;

use App\Http\Controllers\Controller;
use App\Models\AdmissionFeePayment;
use Illuminate\Http\Request;

class admissionFeesPayment extends Controller
{
    public function index(){
        return view('frontend.pay.admissionFeesPayment');
    }

    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'amount' => 'required|numeric|min:10',
            'transaction_number' => 'required|unique:admission_fee_payments,transaction_number|regex:/^[A-Za-z0-9]+$/',
            'donor_name' => 'required|string|min:3|max:15',
            'donor_contact' => 'required|string|min:10|max:30',
        ]);

        // Store data in the database
        AdmissionFeePayment::create([
            'amount' => $request->input('amount'),
            'transaction_number' => $request->input('transaction_number'),
            'donor_name' => $request->input('donor_name'),
            'donor_contact' => $request->input('donor_contact'),
        ]);

        // Redirect or return success message
        return redirect()->back()->with('success', 'Admission Free Successfully Recorded.');
    }
    
}
