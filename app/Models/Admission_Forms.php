<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admission_Forms extends Model
{
    use HasFactory;

    protected $table = 'admission_forms';
    protected $fillable = [
        'studentName', 'studentDoB', 'birthCertificate', 'father', 'fNidNumber',
        'fatherDoB', 'fatherOccupation', 'mother', 'mNidNumber', 'motherDoB', 
        'motherOccupation', 'nationality', 'phone', 'permanentAddress', 
        'currentAddress', 'class_name', 'referName', 'connectionWithRefer', 'referAddress'
    ];
    
}
