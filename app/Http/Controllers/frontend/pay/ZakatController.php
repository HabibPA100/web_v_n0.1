<?php

namespace App\Http\Controllers\frontend\pay;

use App\Http\Controllers\Controller;
use App\Models\Zakat;
use Illuminate\Http\Request;

class ZakatController extends Controller
{
    public function index(){
        return view('frontend.pay.zakat');
    }

    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'amount' => 'required|numeric|min:10',
            'transaction_number' => 'required|unique:zakats,transaction_number|regex:/^[A-Za-z0-9]+$/',
            'donor_name' => 'required|string|min:3|max:15',
            'donor_contact' => 'required|string|min:10|max:30',
        ]);

        // Store data in the database
        Zakat::create([
            'amount' => $request->input('amount'),
            'transaction_number' => $request->input('transaction_number'),
            'donor_name' => $request->input('donor_name'),
            'donor_contact' => $request->input('donor_contact'),
        ]);

        // Redirect or return success message
        return redirect()->back()->with('success', 'Donation successfully submitted.');
    }
}