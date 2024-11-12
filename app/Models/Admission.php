<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'studentName',
        'studentDoB',
        'birthCertificate',
        'father',
        'fNidNumber',
        'fatherDoB',
        'fatherOccupation',
        'mother',
        'mNidNumber',
        'motherDoB',
        'motherOccupation',
        'nationality',
        'phone',
        'permanentAddress',
        'currentAddress',
        'desiredClass',
        'referName',
        'connectionWithRefer',
        'referAddress',
    ];

    // Disable timestamps if the table does not contain created_at/updated_at fields
    public $timestamps = true;

    // Cast date fields to Carbon instances
    protected $casts = [
        'studentDoB' => 'date',
        'fatherDoB' => 'date',
        'motherDoB' => 'date',
    ];
}
