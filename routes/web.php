<?php

use App\Http\Controllers\Admin\HouseController;
use Illuminate\Support\Facades\Route;
use App\Models\House;
use App\Http\Controllers\Admin\HomeController;
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

    $houses = House::all();

    return view('welcome', compact('houses'));
})->name('home');


Route::get('/houses/{house}', function ($id) {
    $house = House::findOrFail($id);
    return view('guests.houses.show', compact('house'));
})->name('guests.houses.show');



Route::get('/company', function () {
    return view('company');
})->name('company');


/* CRUD OPERATIONS */
Route::get('/admin', [HomeController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/houses', [HouseController::class, 'index'])->name('admin.houses.index');
Route::get('/admin/houses/create', [HouseController::class, 'create'])->name('admin.houses.create');
Route::post('/admin/houses', [HouseController::class, 'store'])->name('admin.houses.store');
Route::get('/admin/houses/{house}', [HouseController::class, 'show'])->name('admin.houses.show');
Route::get('/admin/houses/{house}/edit', [HouseController::class, 'edit'])->name('admin.houses.edit');
Route::put('/admin/houses/{house}', [HouseController::class, 'update'])->name('admin.houses.update');
Route::delete('/admin/houses/{house}', [HouseController::class, 'destroy'])->name('admin.houses.destroy');
//Route::resource('houses', HouseController::class);
