<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

//Route::group(['middleware' => ['session']], function () {
//    Route::group(['middleware' => ['admin']], function () {
        Route::get('/employeeList', 'EmployeeController@list');
        Route::post('/createEmployee', 'EmployeeController@create');
        Route::get('/editEmployee/{id}', 'EmployeeController@edit');
        Route::post('/editEmployee/{id}', 'EmployeeController@editEmployee');
        Route::get('/deleteEmployee/{id}', 'EmployeeController@delete');
//    });

//    Route::group(['middleware' => ['emp']], function () {
        Route::get('/jobList', 'JobController@list');
        Route::post('/createJob', 'JobController@create');
        Route::get('/editJob/{id}', 'JobController@edit');
        Route::post('/editJob/{id}', 'JobController@editJob');
        Route::get('/deleteJob/{id}', 'JobController@delete');
//    });
//});


// Route::get('/user', 'ApiController@user');
// Route::post('/user/create', 'ApiController@create');
// Route::get('/user/edit/{id}', 'ApiController@edit')->name('user.edit');
// Route::post('/user/edit/{id}', 'ApiController@editUser');
// Route::get('/user/delete/{id}', 'ApiController@delete')->name('user.delete');