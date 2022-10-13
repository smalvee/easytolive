<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountDetailsController;
use App\Http\Controllers\CreatelistingController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyDetails;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
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





Route::get('admin_profile/{id}', [AccountDetailsController::class, 'admin_index'])->middleware(['auth']);
Route::get('owner_profile/{id}', [AccountDetailsController::class, 'owner_index'])->middleware(['auth']);
Route::get('userprofile/{id}', [AccountDetailsController::class, 'user_index'])->middleware(['auth']);

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

Route::get('owner_history', [OperationController::class, 'owner_history'])->middleware(['auth']);
Route::get('renter_history', [OperationController::class, 'renter_history'])->middleware(['auth']);
Route::get('user_profile/{id}', [OperationController::class, 'user_profile'])->middleware(['auth']);
Route::get('review/{id}', [OperationController::class, 'review'])->middleware(['auth']);
Route::get('all_propertis', [OperationController::class, 'all_properties'])->middleware(['auth']);
Route::get('pending_properties', [OperationController::class, 'pending_properties'])->middleware(['auth']);
Route::get('rejected_properties', [OperationController::class, 'rejected_properties'])->middleware(['auth']);
Route::post('status_update', [OperationController::class, 'status_update'])->middleware(['auth']);

Route::post('add_wish', [WishlistController::class, 'store'])->middleware(['auth']);

Route::get('view_details/{id}', [UserController::class, 'view'])->middleware(['auth']);


require __DIR__.'/auth.php';
