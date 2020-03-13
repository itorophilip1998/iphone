
<?php

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

// use App\Http\Controllers\CarController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/cars','CarController@index');          //route to view all cars
Route::get('/create','CarController@create');       //route to view cars form
Route::Post('/create','CarController@store');       //route to create new records
Route::get('/cars/{car}','CarController@show');    //route to view selected cars
Route::get('/cars/{car}/edit','CarController@edit');    //route to View/Edit selected cars
Route::put('/cars/{car}/update','CarController@update');    //route to View/Edit selected cars
Route::get('/cars/{car}/delete','CarController@destroy');    //route to View/Edit selected cars
// Route::resource('cars','CarController');    