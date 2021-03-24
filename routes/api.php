<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
Route::group(['middleware' => 'cors', ], function () {

    //Search for auser using the name
Route::get('/tests/search', [TestController::class, 'search']);

// Send email to all registered addresses
Route::get('/send/mail', [TestController::class,'sendMail']);

Route::resource('tests', TestController::class, ['except' => ['create', 'edit']]);
});

