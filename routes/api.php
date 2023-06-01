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

// Fetch Tenant
Route::get('/tenant', [TenantController::class, 'getTenant']);
//fetch food each tenant
Route::get('/tenant/{id}', [TenantController::class, 'getFood']);
//update status food
Route::put('/tenant/{id}/food/{idfood}', [TenantController::class, 'updateTenant']);
// create transaction
Route::post('/transaction', [TransactionController::class, 'store']);
// login
Route::post('/login', [LoginController::class, 'login']);
// login
Route::post('/logout', [LoginController::class, 'logout']);
// Update password user
Route::put('/user/{id}', [UserController::class, 'update']);
// login error
Route::get('/login-error', [LoginController::class, 'errorLogin'])->named('errorLogin');
