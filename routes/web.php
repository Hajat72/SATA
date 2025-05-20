<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AcademicSessionController;


// Frontend Route
Route::get('/', function () {
    return view('frontend.layouts.website');
})->name('web');




//Backend Route

Route::middleware(['auth'])->prefix('dashboard')->group(function(){

    //Resource Controller
Route::resources([
    'slider' => SliderController::class,
    'about' =>  AboutController::class,
    'service' => ServiceController::class,
    'admission' =>AdmissionController::class,
    'academicsession' =>AcademicSessionController::class,
    'course' =>CourseController::class,

]);

//Slider
Route::get('delete/slider/{id}', [SliderController::class, 'delete'])->name('slider.delete');
//About
Route::get('delete/about/{id}', [AboutController::class, 'delete'])->name('about.delete');
//Service
Route::get('delete/service/{id}', [ServiceController::class, 'delete'])->name('service.delete');
//Admission
Route::get('delete/admission/{id}', [AdmissionController::class, 'delete'])->name('admission.delete');



});



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
