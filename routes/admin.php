<?php

use App\Http\Controllers\Admin\Admit\AdmitController;
use App\Http\Controllers\Admin\ApproveController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Doctors\DoctorsController;
use App\Http\Controllers\Admin\Report\ReportController;
use Illuminate\Support\Facades\Route;


 Route::prefix('/admin/')->middleware('admin')->name('admin.')->group( function(){
    Route::get('dashboard',[DashboardController::class, 'index'])->name('index');
    Route::get('profile',[DashboardController::class, 'profile'])->name('profile');
    Route::put('profile-update/{id}',[DashboardController::class, 'profileUpdate'])->name('profile.update');
    Route::get('logout',[DashboardController::class, 'logout'])->name('profile.logout');

    //** NOTIFICATIONAS 
    Route::get('notification',[DashboardController::class, 'notification'])->name('notification');


    //*APPROVE PEOPLES SECTION */
    Route::get('approve',[ApproveController::class, 'getApprove'])->name('get.approve');
    Route::get('approve/{id}',[ApproveController::class, 'approvedUser'])->name('approved.user');
    Route::get('declie/{id}',[ApproveController::class, 'declinedUser'])->name('declined.user');
    
    
    // *:: ADMIT ::
    Route::get('admit-patient',[AdmitController::class, 'admitIndex'])->name('admit.patient');
    Route::post('admit-patient-store',[AdmitController::class, 'storePatient'])->name('admit.patient.store');
    Route::get('admit-patient-list',[AdmitController::class, 'storePatientList'])->name('admit.patient.list');
    Route::get('admit-patient-delete/{id}',[AdmitController::class, 'PatientDelete'])->name('admit.patient.delete');
    Route::get('admit-patient-edit/{patient_number}',[AdmitController::class, 'PatientEdit'])->name('admit.patient.edit');
    Route::put('admit-patient-update/{id}',[AdmitController::class, 'PatientUpdate'])->name('admit.patient.update');
    Route::get('patient-pdf/{id}',[AdmitController::class, 'patientPdf'])->name('patient.pdf');
    Route::get('patient-search',[AdmitController::class, 'patientSearch'])->name('patient.search');
    
   
   // * (:: ADD DOCTOR'S ::)
   Route::get('add-doctor',[DoctorsController::class, 'addDoctor'])->name('doctor.add');
   Route::post('store-doctor',[DoctorsController::class, 'storeDoctor'])->name('doctor.store');
   Route::get('doctors-list',[DoctorsController::class, 'doctorsList'])->name('doctor.list');
   Route::get('doctors-edit/{id}',[DoctorsController::class, 'doctorsEdit'])->name('doctor.edit');
   Route::put('doctors-edit/{id}',[DoctorsController::class, 'doctorsUpdate'])->name('doctor.update');
   Route::get('doctors-delete/{id}',[DoctorsController::class, 'doctorsDelete'])->name('doctor.delete');
  });
  
  
  // *(:: -MEDICAL REPORT- ::)
  Route::get('medical-report/{id?}',[ReportController::class, 'reportIndex'])->name('medical.report');
  Route::post('medical-report-store',[ReportController::class, 'reportStore'])->name('medical.report.store');
  Route::get('medical-report-edit/{id}',[ReportController::class, 'reportEdit'])->name('medical.report.edit');
  Route::put('medical-report-update/{id}',[ReportController::class, 'reportUpdate'])->name('medical.report.update');
  Route::get('medical-report-delete/{id}',[ReportController::class, 'reportDelete'])->name('medical.report.delete');
  Route::get('medical-report-create',[ReportController::class, 'reportCreate'])->name('medical.report.create');
  Route::put('medical-report-update',[ReportController::class, 'patientReportUpdate'])->name('patient.report.update');
  Route::get('patient-report-list',[ReportController::class, 'patientReportList'])->name('patient.report.list');
  Route::get('patient-report-pdf/{id}',[ReportController::class, 'patientReportPdf'])->name('patient.report.pdf');

?>