<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\api\DoctorsListController;
use App\Http\Controllers\api\FeedbackController;
use App\Http\Controllers\api\MessageController;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//guests
Route::post('/auth/register', [AuthController:: class, 'create']);
Route::post('/auth/login', [AuthController:: class, 'login']);

Route::post('guest/message/add', [MessageController::class, 'store']);
Route::post('guest/feedback/add', [FeedbackController::class, 'store']);

Route::get('/guest/doctorslist', [DoctorsListController::class, 'index']);
Route::get('/guest/doctor', [DoctorsListController::class, 'show']);


//auth
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/auth/logout', [AuthController:: class, 'logout']);
    
    //messages route
    Route::get('/auth/messages', [MessageController::class, 'index']);
    Route::get('/auth/message/{id}', [MessageController::class, 'show']);
    Route::put('/auth/message/edit/{id}', [MessageController::class, 'update']);
    Route::delete('/auth/message/delete/{id}', [MessageController::class, 'destroy']);

    //feedback routes
    Route::get('/auth/feedback', [FeedbackController::class, 'index']);
    Route::get('/auth/feedback/{id}', [FeedbackController::class, 'show']);
});