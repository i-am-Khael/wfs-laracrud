<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;

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

Route::get('/', [CustomersController::class, 'index'] );

Route::get('/add-customers', function(){
    return view('pages.add-customers');
});

Route::post('/add', [CustomersController::class, 'store']);

Route::get('/edit-customers/{id}', [CustomersController::class, 'edit'] );
Route::post('/update-customer/{id}', [CustomersController::class, 'update'] );

Route::get('/delete-customers/{id}', [CustomersController::class, 'destroy'] );
