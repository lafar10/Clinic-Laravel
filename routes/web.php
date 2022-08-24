<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;

Route::get('Php-Artisan-DB-SEED', function () {

    Artisan::Call('db:seed');

});

Route::middleware(['auth', 'auth_role'])->group(function () {

    /* ---- Dashboard  -----  */

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('Dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /* ---- Doctors  -----  */

    Route::get('Doctors', [DoctorController::class, 'index'])->name('doctors');
    Route::get('Add-Doctor', [DoctorController::class, 'create'])->name('create.doctor');
    Route::post('Store-Doctor', [DoctorController::class, 'store'])->name('store.doctor');
    Route::post('Delete-Doctor', [DoctorController::class, 'delete'])->name('delete.doctor');
    Route::get('Edit-Doctor/{id}', [DoctorController::class, 'edit'])->name('edit.doctor');
    Route::post('Update-Doctor', [DoctorController::class, 'update'])->name('update.doctor');
    Route::get('Search-Doctor', [DoctorController::class, 'search'])->name('search.doctor');

    /* ---- Patients  -----  */

    Route::get('Patients', [PatientController::class, 'index'])->name('patients');
    Route::get('Add-Patient', [PatientController::class, 'create'])->name('create.patient');
    Route::post('Store-Patient', [PatientController::class, 'store'])->name('store.patient');
    Route::post('Delete-Patient', [PatientController::class, 'delete'])->name('delete.patient');
    Route::get('Edit-Patient/{id}', [PatientController::class, 'edit'])->name('edit.patient');
    Route::post('Update-Patient', [PatientController::class, 'update'])->name('update.patient');
    Route::get('Search-Patient', [PatientController::class, 'search'])->name('search.patients');

    /* ---- Appointments  -----  */

    Route::get('Appointments', [AppointmentController::class, 'index'])->name('appointments');
    Route::get('Add-Appointment', [AppointmentController::class, 'create'])->name('create.appointment');
    Route::post('Store-Appointment', [AppointmentController::class, 'store'])->name('store.appointment');
    Route::post('Delete-Appointment', [AppointmentController::class, 'delete'])->name('delete.appointment');
    Route::get('Edit-Appointment/{id}', [AppointmentController::class, 'edit'])->name('edit.appointment');
    Route::post('Update-Appointment', [AppointmentController::class, 'update'])->name('update.appointment');
    Route::get('Search-Appointment', [AppointmentController::class, 'search'])->name('search.appointments');
    Route::get('PDF-Appointment/{id}', [AppointmentController::class, 'pdf'])->name('pdf.appointment');
    Route::get('Appointments-En-Attente', [AppointmentController::class, 'index_status'])->name('appointment.status');

    /* ---- Payments  -----  */

    Route::get('Payments', [PaymentController::class, 'index'])->name('payments');
    Route::get('Add-Payment', [PaymentController::class, 'create'])->name('create.payment');
    Route::post('Store-Payment', [PaymentController::class, 'store'])->name('store.payment');
    Route::post('Delete-Payment', [PaymentController::class, 'delete'])->name('delete.payment');
    Route::get('Edit-Payment/{id}', [PaymentController::class, 'edit'])->name('edit.payment');
    Route::post('Update-Payment', [PaymentController::class, 'update'])->name('update.payment');
    Route::get('Search-Payment', [PaymentController::class, 'search'])->name('search.payments');
    Route::get('PDF-Payment/{id}', [PaymentController::class, 'pdf'])->name('pdf.payment');
    Route::get('Today-Payments', [PaymentController::class, 'total_today'])->name('payment.status');


    /* ---- Reports  -----  */

    Route::get('Reports', [ReportController::class, 'index'])->name('reports');
    Route::get('Add-Report', [ReportController::class, 'create'])->name('create.report');
    Route::post('Store-Report', [ReportController::class, 'store'])->name('store.report');
    Route::post('Delete-Report', [ReportController::class, 'delete'])->name('delete.report');
    Route::get('Edit-Report/{id}', [ReportController::class, 'edit'])->name('edit.report');
    Route::post('Update-Report', [ReportController::class, 'update'])->name('update.report');
    Route::get('Search-Report', [ReportController::class, 'search'])->name('search.reports');
    Route::get('PDF-Report/{id}', [ReportController::class, 'pdf'])->name('pdf.report');
});

Route::middleware(['auth', 'super_admin'])->group(function () {

    /* ---- Users  -----  */

    Route::get('Users', [UserController::class, 'index'])->name('users');
    Route::get('Add-User', [UserController::class, 'create'])->name('add.user');
    Route::post('Store-User', [UserController::class, 'store'])->name('store.user');
    Route::post('Delete-User', [UserController::class, 'delete'])->name('delete.user');
    Route::get('Edit-User/{id}', [UserController::class, 'edit'])->name('edit.user');
    Route::post('Update-User', [UserController::class, 'update'])->name('update.user');
    Route::get('Search-User', [UserController::class, 'search'])->name('search.user');

    /* ---- PHP Artisan Config ---- */

    Route::get('Php-Artisan-Config-Cache', function () {

        Artisan::Call('config:cache');

        alert()->success('success', 'Config Cached Success ^-^');
    });

    Route::get('Php-Artisan-Config-Clear', function () {

        Artisan::Call('config:clear');

        alert()->success('success', 'Config Cleared Success ^-^');
    });
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
