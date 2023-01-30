<?php

use Illuminate\Http\Request;
use App\Http\Controllers\productcontroller;

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

// Route::get(uri:'zoho_inbound/frondend',[productcontroller::class,'frondend']);

// Route::get('alldata', 'productcontroller@frondend');

// Route::get('users',[productcontroller::class,'frondend']);
// Route::get('users',[productcontroller::class,'backend']);

// Route::get('users/frontend', [ProductController::class, 'frondend']);
Route::get('users/backend', [ProductController::class, 'backend']);