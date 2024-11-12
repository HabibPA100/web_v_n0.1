<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
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

