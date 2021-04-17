<?php

use Illuminate\Support\Facades\Route;

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
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@adminDashboard')->name('dashboard');

// Medicine routes
Route::get('/add-medicine', 'MedicineController@index')->name('add_medicine');
Route::post('/insert-medicine', 'MedicineController@store')->name('insert_medicine');
Route::get('/all-medicine', 'MedicineController@allMedicine')->name('all_medicine');
Route::get('/edit-medicine/{id}', 'MedicineController@editMedicine')->name('edit_medicine');
Route::post('/update-medicine/{id}', 'MedicineController@updateMedicine')->name('update_medicine');
Route::get('/toggle-medicine-status/{id}', 'MedicineController@toggleMedicineStatus')->name('toggle_medicine_status');
Route::get('/delete-medicine/{id}', 'MedicineController@deleteMedicine')->name('delete_medicine');

Route::get('/show-medicine', 'MedicineController@showMedicine')->name('show_medicine');
Route::get('/buy-medicine/{id}', 'MedicineController@buyMedicine')->name('buy_medicine');
Route::post('/order-medicine/{id}', 'OrderMedicineController@orderMedicine')->name('order_medicine');
