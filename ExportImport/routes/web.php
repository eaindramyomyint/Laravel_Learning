<?php

use Illuminate\Support\Facades\Route;

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
    return view('excel');
});



Route::controller(App\Http\Controllers\StudentController::class)->group(function () {
    #view
    Route::get('/students', 'index');//view
    //Route::get('/students', 'details');
    Route::get('/students/{student_id}/details','details');
    #create
    Route::get('/students/create', 'create');
    Route::post('/students', 'store');
    #update
    Route::get('/students/{student}/edit', 'edit');
    Route::put('/students/{student}','update');
    #delete
    Route::put('/students/{student}','destory');
    #Export Import
    Route::get('/file-import','importView');
    Route::post('/import','import');
    Route::get('/export-users','exportUsers');    

    
    
});
