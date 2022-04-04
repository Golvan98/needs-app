<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('originlayout');
});

Route::get('/home', function(){
    return view('/homepage');
});

Route::get('/survey/{surveys}', [SurveyController::class, 'showsurvey']);

Route::get('/surveylist', [SurveyController::class, 'listsurvey']);

Route::get('/surveyresults', [SurveyController::class, 'surveyresults']);