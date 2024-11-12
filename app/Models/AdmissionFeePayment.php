<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdmissionFeePayment extends Model
{
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
        'amount',
        'transaction_number',
        'donor_name',
        'donor_contact',
    ];
}
