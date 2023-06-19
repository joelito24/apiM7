<?php


use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CocheController;
use App\Http\Controllers\Api\ProviderController;

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


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) { return $request->user(); });


// Log in Api
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function(){

    //Coches
    Route::post('coches', [CocheController::class, 'store']);
    Route::get('coches', [CocheController::class, 'index']);
    Route::get('coches/{id}', [CocheController::class, 'show']);
    Route::put('coches/{id}', [CocheController::class, 'update']);
    Route::delete('coches/{id}', [CocheController::class, 'destroy']);

    //Proveedores
    Route::post('providers', [ProviderController::class, 'store']);
    Route::get('providers', [ProviderController::class, 'index']);
    Route::get('providers/{id}', [ProviderController::class, 'show']);
    Route::put('providers/{id}', [ProviderController::class, 'update']);
    Route::delete('providers/{id}', [ProviderController::class, 'destroy']);
});









