<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\loteController;
use App\Models\lote;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;


    // Lote Routes
    Route::get('/lotes', [LoteController::class, 'showapi']);
    Route::get('/lotes/{id}', [LoteController::class, 'show']);
    // Define other CRUD routes for Lote

    // Produto Routes
    Route::get('/produtos', [ProdutoController::class, 'show2']);
    Route::get('/produtos/{id}', [ProdutoController::class, 'show']);
    // Define other CRUD routes for Produto

    // Movimento Routes
    Route::get('/movimentos', [MovimentoController::class, 'index']);
   // Route::get('/movimentos/{id}', [MovimentoController::class, 'show']);
    Route::post('/movimento/sell', [MovimentoController::class, 'handleSellData']);

    // Define other CRUD routes for Movimento

    Route::get('/example', function () {
        $data = [
            'message' => 'Hello, this is a basic JSON response.',
            'timestamp' => now(),
        ];

        return response()->json($data);
    });


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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
