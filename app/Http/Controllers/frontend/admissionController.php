<?php
namespace App\Http\Controllers\frontend;

use App\Models\Admission_Forms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class AdmissionController extends Controller
{
    public function index()
    {
        return view('frontend.admission');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'studentName' => 'required|string|min:5|max:30',
            'studentDoB' => 'required|date',
            'birthCertificate' => 'required|digits:17',
            'father' => 'required|string|min:5|max:30',
            'fNidNumber' => 'required|digits_between:10,17',
            'fatherDoB' => 'required|date',
            'fatherOccupation' => 'required|string|min:4|max:15',
            'mother' => 'required|string|min:5|max:30',
            'mNidNumber' => 'required|digits_between:10,17',
            'motherDoB' => 'required|date',
            'motherOccupation' => 'required|string|min:4|max:15',
            'nationality' => 'required|string',
            'phone' => 'required|max:14',
            'permanentAddress' => 'required|string|min:15|max:255',
            'currentAddress' => 'required|string|max:255',
            'class_name' => 'required|string',
            'referName' => 'nullable|string|min:5|max:30',
            'connectionWithRefer' => 'nullable|string',
            'referAddress' => 'nullable|string|min:15|max:255',
        ]);
    
        Admission_Forms::create($request->all());
    
        return redirect()->back()->with('success', 'Admission form submitted successfully.');
    }
    

}
