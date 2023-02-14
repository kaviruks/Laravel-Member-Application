<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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


//Home view load
Route::get('/', [MemberController::class, 'index']);

//Add member view load
Route::get('/add-member', function () {
    return view('AddMember');
});

//Store post url
Route::post('/add-member-data', [MemberController::class, 'store']);
