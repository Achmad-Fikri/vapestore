<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

route::get('/',[HomeController::class,'my_home']);

route::get('/home', [HomeController::class, 'index']);

route::get('/add_food', [AdminController::class, 'add_food']);

route::post('/upload_food', [AdminController::class, 'upload_food']);

route::get('/view_food', [AdminController::class, 'view_food']);

route::get('/delete_food/{id}', [AdminController::class, 'delete_food']);

route::get('/update_food/{id}', [AdminController::class, 'update_food']);

route::post('/edit_food/{id}', [AdminController::class, 'edit_food']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
