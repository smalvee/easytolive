<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountDetailsController;
use App\Http\Controllers\CreatelistingController;
use App\Models\Createlisting;
use GuzzleHttp\Middleware;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//auth rout for all
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});





Route::get('editprofile/{id}', [AccountDetailsController::class, 'index'])->middleware(['auth']);
Route::post('account', [AccountDetailsController::class, 'store'])->middleware(['auth']);
Route::post('account_update', [AccountDetailsController::class, 'update'])->middleware(['auth']);
Route::post('account_photo_update', [AccountDetailsController::class, 'profile_photo_update'])->middleware(['auth']);


Route::get('createlisting/{id}', [CreatelistingController::class, 'index'])->middleware(['auth']);
Route::get('createlist', [CreatelistingController::class, 'store'])->Middleware(['auth']);


require __DIR__.'/auth.php';
