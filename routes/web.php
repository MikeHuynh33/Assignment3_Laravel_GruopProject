<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'List')->name('admin');
    Route::get('/admin/AddNewProduct', 'NewProduct')->name('new_product.info');
    Route::post('/admin/AddToDatabase', 'AddToDatabase')->name('store.info');
    Route::get('/admin/EditProduct/{id}', 'EditProduct')->name(
        'edit_product.info'
    );
    Route::post('/admin/UpdateToDatabase', 'UpdateDatabase')->name(
        'update.info'
    );
    Route::post('/admin/Delete', 'DeleteProduct')->name('delete.info');
});
require __DIR__ . '/auth.php';
