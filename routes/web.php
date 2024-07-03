<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/start_assessment', [App\Http\Controllers\AssessmentController::class, 'start_assessment']);

Route::post('/start_assessment/save', [App\Http\Controllers\AssessmentController::class, 'save']);

Route::get('/start_assessment/view_results', [App\Http\Controllers\AssessmentController::class, 'view_results']);