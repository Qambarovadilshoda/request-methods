<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//get orqali formadan ma'lumot qabul qilish

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users/store', [UserController::class, 'store'])->name('users.store');

//post orqali formadan malumot qabul qilish

Route::get('/users-post-create', [UserController::class, 'userPostCreate'])->name('users.post.create');
Route::post('/users-post-store', [UserController::class, 'userPostStore'])->name('users.post.store');

//put update

Route::get('/users-edit', [UserController::class, 'edit'])->name('users.put.edit');
Route::put('/users/update/all/{id}', [UserController::class, 'putUpdate'])->name('users.put.update');

//patch update

Route::get('/users-patch-edit', [UserController::class, 'patchEdit'])->name('users.patch.edit');
Route::patch('/users-patch-update/{id}', [UserController::class, 'patchUpdate'])->name('users.patch.update');

//delete 

Route::get('/users-delete', [UserController::class , 'delete'])->name('users.delete');
Route::delete('/users/destroy{id}', [UserController::class, 'destroy'])->name('users.destroy');
