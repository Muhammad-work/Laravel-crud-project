<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;


Route::post('/adduser',[studentController::class,'addUser'])->name('addUser');
Route::post('/update/{id}',[studentController::class,'updateUser'])->name('update');
Route::get('/delete/{id}',[studentController::class,'deleteUser'])->name('delete');
Route::get('/',[studentController::class,'getUser'])->name('home');
Route::get('/singleUser/{id}',[studentController::class,'singleUser'])->name('singleUser.page');
Route::get('/update_page/{id}',[studentController::class,'updatePage'])->name('update.page');

Route::get('/add',function(){
   return view('add');
})->name('add.page');

// Route::get('/Update',function(){
//    return view('update');
// })->name('update.page');