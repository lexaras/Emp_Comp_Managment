<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Mail\Mailable;



Route::middleware(['auth'])->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('companies', CompanyController::class);
    Route::resource('employees', EmployeeController::class);
    Route::get('/changelanguage/{locale}', function ($locale) {
        if (!in_array($locale, ['en', 'lt'])) abort(400);
        session(['locale' => $locale]);
        app()->setLocale($locale);
        return redirect()->back();
    });
});

Auth::routes(['register' => true]);
