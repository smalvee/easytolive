<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountDetailsController;
use App\Http\Controllers\CreatelistingController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyDetails;
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





Route::get('profile/{id}', [AccountDetailsController::class, 'index'])->middleware(['auth']);
Route::get('editprofile/{id}', [AccountDetailsController::class, 'edit'])->middleware(['auth']);
Route::post('account', [AccountDetailsController::class, 'store'])->middleware(['auth']);
Route::post('account_update', [AccountDetailsController::class, 'update'])->middleware(['auth']);
Route::post('account_photo_update', [AccountDetailsController::class, 'profile_photo_update'])->middleware(['auth']);


Route::get('addproperty/{id}', [PropertyController::class, 'index'])->middleware(['auth']);
Route::get('properties/{id}', [PropertyController::class, 'show'])->middleware(['auth']);

Route::get('propertydetails/{id}', [PropertyDetails::class, 'index'])->middleware(['auth']);
Route::get('editproperty/{id}', [PropertyDetails::class, 'edit'])->middleware(['auth']);
Route::post('property_photo_update', [PropertyDetails::class, 'photo_update'])->middleware(['auth']);
Route::post('property_info_update', [PropertyDetails::class, 'info_update'])->middleware(['auth']);


Route::get('createlisting/{id}', [CreatelistingController::class, 'index'])->middleware(['auth']);
Route::post('createlist', [CreatelistingController::class, 'store'])->Middleware(['auth']);


require __DIR__.'/auth.php';
