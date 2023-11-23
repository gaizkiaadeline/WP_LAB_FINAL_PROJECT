<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\FoodController;
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
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});


Route::post('/loginUser', [LoginController::class, 'loginUser'])->name('login');

Route::post('/registerUser', [RegisterController::class, 'registerUser'])->name('register');

Route::get('/home', [FoodController::class, 'index'])->name('viewMenu');
Route::post('/home/filter', [FoodController::class, 'filter'])->name('filterCategory');

Route::get('/view/search', [FoodController::class, 'search'])->name('searchFood');

Route::get('/profile', function () {
    return view('profile');
});
Route::put('/updateProfile', 'ProfileController@update')->name('updateProfile');
// Route::get('/profile', 'ProfileController@index')->name('profile');

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/update-food/{id}', 'FoodController@edit');
//     Route::put('/update-food/{id}', 'FoodController@update');
// });

// Route::get('/updateFood', function () {
//     return view('updateFood');
// });

Route::get('/updateFoodview', function () {
    return view('updateFood');
});
Route::put('/updateFood', 'FoodController@update')->name('updateFood');

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/add-new-food', 'FoodController@create');
//     Route::post('/add-new-food', 'FoodController@store');
// });

Route::get('/addNewFood', function () {
    return view('addNewFood');
});
Route::post('/addFood', 'FoodController@store')->name('addFood');
