<?php

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::apiResource('/employees', [EmployeeController::class, 'index']);

//auth()->user();

Auth::routes(['register' => true]);
Route::apiResource('employees',  'App\Http\Controllers\Api\EmployeeController');
Route::apiResource('companies',  'App\Http\Controllers\Api\CompanyController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




