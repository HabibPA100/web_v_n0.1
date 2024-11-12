<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSalary extends Model
{
    use HasFactory;

    protected $table = 'student_salaries';
    protected $fillable = ['amount', 'month_name', 'transaction_number', 'student_name', 'class_name'];
}



// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class StudentSalary extends Model
// {
//     //
// }
