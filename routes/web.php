<?php

use App\Http\Controllers\BankController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\PetShopController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WalletController;

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

Route::get('/', function () {
    return redirect(route('pets.index'));
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function() {
    Route::resource('pets', PetController::class);
    Route::resource('inventory', InventoryController::class);
    Route::resource('bank', BankController::class);
    Route::post('/bank/exchange', [BankController::class, 'exchange'])->name('bank.exchange');
    Route::resource('market', MarketController::class);
    Route::resource('wallet', WalletController::class);
    Route::resource('tasks', TaskController::class);
    Route::resource('learn', LearnController::class);
    Route::resource('petshop', PetShopController::class);
    Route::get('/petshop/adpot/{id}', [PetShopController::class, 'adopt'])->name('petshop.adopt');
    Route::get('/petshop/buy/{id}', function() {
        return back();
    })->name('petshop.buy');
});

require __DIR__.'/auth.php';
