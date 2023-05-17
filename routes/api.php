<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckToken;
use App\Models\Customer;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test/{id}', function($id){
    return response()->json(Customer::with('food')->findOrFail($id));
});

// ->middleware([CheckToken::class,'auth:sanctum'])
Route::get('/tenant', [TenantController::class, 'getTenant']);
Route::put('/tenant/{id}', [TenantController::class, 'updateTenant'])->middleware([CheckToken::class,'auth:sanctum']);
Route::get('/tenant/{id}', [TenantController::class, 'getFood']);
Route::post('/transaction', [TransactionController::class, 'store'])->middleware('auth:sanctum');
Route::post('/login', [LoginController::class, 'login']);
Route::put('/user/{id}', [UserController::class, 'update']);
