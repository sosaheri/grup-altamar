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
//ruta home
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//ruta dashboard
Route::get('dashboard', function () {
    return view('admin.dashboard');
});
Auth::routes();

//ruta usuarios
Route::get('usuarios','UsersController@home');
Route::get('/deleteUsr/{id}','UsersController@delete');

// Route::get('usuarios', function () {
//    return view('usuarios');
// });
// Auth::routes();

//ruta reportes
Route::get('reportes', function () {
    return view('reportes');
});
Auth::routes();


//ruta encomiendas
Route::get('encomiendas', function () {
    return view('encomiendas');
});
Auth::routes();


Route::get('transaccionesEncomiendas','EncomiendasController@home');
Route::post('addEnc','EncomiendasController@add');
Route::get('/updateEnc/{id}','EncomiendasController@update');
Route::post('/editEnc/{id}','EncomiendasController@edit');
Route::get('/readEnc/{id}','EncomiendasController@read');
Route::get('/deleteEnc/{id}','EncomiendasController@delete');
Route::get('/readEnc/downloadPDF/{id}','EncomiendasController@downloadPDF');



//ruta remesas
Route::get('remesas', function () {
    return view('remesas');
});
Auth::routes();


Route::get('transaccionesRemesas','RemesasController@home');
Route::post('addRem','RemesasController@add');
Route::get('/updateRem/{id}','RemesasController@update');
Route::post('/editRem/{id}','RemesasController@edit');
Route::get('/readRem/{id}','RemesasController@read');
Route::get('/deleteRem/{id}','RemesasController@delete');
Route::get('/readRem/downloadPDF/{id}','RemesasController@downloadPDF');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
