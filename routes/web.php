<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [IndexController::class, 'index'])->name('brambily.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/register', [AuthController::class, 'register']);


Route::resource('menu', MenuController::class)->middleware('auth');

Route::get('menu/create', [MenuController::class, 'createCategory'])->middleware('auth')->name('menu.createCategory');

Route::post('menu/create', [MenuController::class, 'save'])->middleware('auth')->name('menu.category.save');

Route::get('menu/category/{id}', [MenuController::class, 'seeCategory'])->middleware('auth')->name('menu.category.see');

Route::get('menu/category/delete/{id}', [MenuController::class, 'deleteCategory'])->middleware('auth')->name('menu.category.delete');

Route::get('menu/category/deleteConfirm/{id}', [MenuController::class, 'deleteCategoryConfirm'])->middleware('auth')->name('menu.category.deleteConfirm');

Route::get('menu/category/edit/{id}', [MenuController::class, 'editCategory'])->middleware('auth')->name('menu.category.edit');

Route::post('menu/category/save', [MenuController::class, 'saveEdit'])->middleware('auth')->name('menu.category.saveEdit');

Route::get('menu/plate/see/{id}', [MenuController::class, 'seePlate'])->middleware('auth')->name('menu.plate.see');

Route::get('menu/plate/delete/{id}', [MenuController::class, 'deletePlate'])->middleware('auth')->name('menu.plate.delete');

Route::get('menu/plate/edit/{id}', [MenuController::class, 'editPlate'])->middleware('auth')->name('menu.plate.edit');

Route::get('menu/plate/deleteConfirm/{id}', [MenuController::class, 'deletePlateConfirm'])->middleware('auth')->name('menu.plate.delete.confirm');

Route::get('menu/plate/new', [MenuController::class, 'newPlate'])->middleware('auth')->name('menu.plate.new');

Route::post('menu/plate/save', [MenuController::class, 'savePlate'])->middleware('auth')->name('menu.plate.save');

Route::post('menu/plate/saveEdit', [MenuController::class, 'savePlateEdit'])->middleware('auth')->name('menu.plate.saveEdit');



//COMMANDES

Route::resource('orders', OrderController::class);

Route::get('orders/see/{id}', [OrderController::class, 'see'])->name('orders.see');

Route::get('orders/archive/{id}', [OrderController::class, 'archive'])->name('orders.archive');

Route::get('orders/archiveConfirm/{id}', [OrderController::class, 'archiveConfirm'])->name('orders.archive.confirm');

Route::get('orders/old/{id}', [OrderController::class, 'old'])->name('orders.old');

Route::get('orders/unarchive/{id}', [OrderController::class, 'unarchive'])->name('orders.unarchive');

Route::post('order', [OrderController::class, 'order'])->name('index.order');