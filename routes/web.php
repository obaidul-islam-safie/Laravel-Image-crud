<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageCrudController;

Route::get('/', [ImageCrudController::class, 'all_products'])->name('all.product');
Route::get('/add_new_product', [ImageCrudController::class, 'add_new_product'])->name('add.product');
Route::post('/store_product', [ImageCrudController::class, 'store_product'])->name('store.product');
Route::get('/edit_product/{id}', [ImageCrudController::class, 'edit_product'])->name('edit.product');
Route::post('/update_product/{id}', [ImageCrudController::class, 'update_product'])->name('update.product');
Route::get('/delete_product/{id}', [ImageCrudController::class, 'delete_product'])->name('delete.product');