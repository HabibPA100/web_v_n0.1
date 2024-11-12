<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\aboutController;
use App\Http\Controllers\frontend\admissionController;
use App\Http\Controllers\frontend\pay\admissionFeesPayment;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\error404Controller;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\pay\DonationController;
use App\Http\Controllers\frontend\pay\ExamFeeController;
use App\Http\Controllers\frontend\pay\StudentSalaryOfMonthController;
use App\Http\Controllers\frontend\pay\ZakatController;
use App\Http\Controllers\frontend\payController;
use App\Http\Controllers\frontend\privacyController;
use App\Http\Controllers\frontend\RoutineController;
use App\Http\Controllers\frontend\termsController;

Route::get('/',[homeController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/error',[error404Controller::class,'index']);
Route::get('/exam/fee',[ExamFeeController::class,'index'])->name('exam.fee');
Route::get('/donation', [DonationController::class, 'index'])->name('donation.index');
Route::get('/contact',[contactController::class,'index'])->name('contact');
Route::get('/about',[aboutController::class,'index']);
Route::get('/admission',[admissionController::class,'index'])->name('admission');
Route::get('/pay', [payController::class, 'index'])->name('pay');
Route::get('/privacy',[privacyController::class,'index']);
Route::get('/admission/fee',[admissionFeesPayment::class,'index'])->name('admission.fee');
Route::get('/routine',[RoutineController::class,'index'])->name('routine');
Route::get('/salary',[StudentSalaryOfMonthController::class,'index'])->name('salary_of_students');
Route::get('/terms',[termsController::class,'index']);
Route::get('/zakat',[ZakatController::class,'index'])->name('zakat');
// Payment option Route is here start 
Route::post('/admission',[admissionController::class,'store'])->name('admission.store');
Route::post('/admission/fees/store',[admissionFeesPayment::class,'store'])->name('admission_fee.store');
Route::post('/donation/store', [DonationController::class, 'store'])->name('donation.store');
Route::post('/exam/store', [ExamFeeController::class, 'store'])->name('exam_fee.store');
Route::post('/salary/store', [StudentSalaryOfMonthController::class, 'store'])->name('salary.store');
Route::post('/zakat/store',[ZakatController::class,'store'])->name('zakat.store');
