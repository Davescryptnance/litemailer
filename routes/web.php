<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;


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

Route::view('/', 'welcome');
Route::get('/email/add', [EmailController::class, 'showAddEmailForm']);
Route::post('/email/add', [EmailController::class, 'saveEmail']);
Route::get('/email/send', [EmailController::class, 'showSendEmailForm']);
Route::post('/email/send', [EmailController::class, 'sendEmail']);
// Route::get('/email/add', 'EmailController@showAddEmailForm');
// Route::post('/email/add', 'EmailController@saveEmail');
// Route::get('/email/send', 'EmailController@showSendEmailForm');
// Route::post('/email/send', 'EmailController@sendEmail');
