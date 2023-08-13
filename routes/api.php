<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::apiResource('/paslon_putras', 'PaslonPutrasController');
Route::apiResource('/paslon_putras', PaslonPutraController::class);
Route::apiResource('/paslon_putris', PaslonPutriController::class);
Route::apiResource('/vote_counts', VoteCountController::class);
Route::apiResource('/vouchers', VoucherController::class);