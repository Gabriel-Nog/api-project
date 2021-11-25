<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('students', 'ApiController@getAllStudents');
// Route::get('students/{id}', 'ApiController@getStudent');
// Route::post('students', 'ApiController@createStudent');
// Route::put('students/{id}', 'ApiController@updateStudent');
// Route::delete('students/{id}','ApiController@deleteStudent');


// Route::post('students', 'ApiController@createStudent');
Route::get('students', [ApiController::class, 'getAllStudents']);
Route::get('students{id}', [ApiController::class, 'getStudent']);

// Route::apiResource('students', ApiController::class);


