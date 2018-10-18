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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Se crean las rutas del sistema
//MUY IMPORTANTE AGREGAR EL MIDDLAWERE AL ARCHIVO kERNEL.PHP

Route::middleware(['auth'])->group(function(){

    //rutas roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
    ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create' , 'RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');


    //rutas productos
    Route::post('products/store', 'ProductController@store')->name('products.store')
    ->middleware('permission:products.create');

    Route::get('products', 'ProductController@index')->name('products.index')
    ->middleware('permission:products.index');

    Route::get('products/create' , 'ProductController@create')->name('products.create')
    ->middleware('permission:products.create');

    Route::put('products/{product}', 'ProductController@update')->name('products.update')
    ->middleware('permission:products.edit');

    Route::get('products/{product}', 'ProductController@show')->name('products.show')
    ->middleware('permission:products.show');

    Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
    ->middleware('permission:products.destroy');

    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
    ->middleware('permission:products.edit');

    //rutas Alumnos
    Route::post('alumnos/store', 'AlumnoController@store')->name('alumnos.store')
    ->middleware('permission:alumnos.create');

    Route::get('alumnos', 'AlumnoController@index')->name('alumnos.index')
    ->middleware('permission:alumnos.index');

    Route::get('alumnos/create' , 'AlumnoController@create')->name('alumnos.create')
    ->middleware('permission:alumnos.create');

    Route::put('alumnos/{alumno}', 'AlumnoController@update')->name('alumnos.update')
    ->middleware('permission:alumnos.edit');

    Route::get('alumnos/{alumno}', 'AlumnoController@show')->name('alumnos.show')
    ->middleware('permission:alumnos.show');

    Route::delete('alumnos/{alumno}', 'AlumnoController@destroy')->name('alumnos.destroy')
    ->middleware('permission:alumnos.destroy');

    Route::get('alumnos/{alumno}/edit', 'AlumnoController@edit')->name('alumnos.edit')
    ->middleware('permission:alumnos.edit');

    //rutas Alumnos

    //rutas Categorias
    Route::post('categories/store', 'CategoryController@store')->name('categories.store')
    ->middleware('permission:categories.create');

    Route::get('categories', 'CategoryController@index')->name('categories.index')
    ->middleware('permission:categories.index');

    Route::get('categories/create' , 'CategoryController@create')->name('categories.create')
    ->middleware('permission:categories.create');

    Route::put('categories/{category}', 'CategoryController@update')->name('categories.update')
    ->middleware('permission:categories.edit');

    Route::get('categories/{category}', 'CategoryController@show')->name('categories.show')
    ->middleware('permission:categories.show');

    Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy')
    ->middleware('permission:categories.destroy');

    Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit')
    ->middleware('permission:categories.edit');

    //rutas Categorias

    //rutas Cursos
    Route::post('cursos/store', 'CursoController@store')->name('cursos.store')
    ->middleware('permission:cursos.create');

    Route::get('cursos', 'CursoController@index')->name('cursos.index')
    ->middleware('permission:cursos.index');

    Route::get('cursos/create' , 'CursoController@create')->name('cursos.create')
    ->middleware('permission:cursos.create');

    Route::put('cursos/{curso}', 'CursoController@update')->name('cursos.update')
    ->middleware('permission:cursos.edit');

    Route::get('cursos/{curso}', 'CursoController@show')->name('cursos.show')
    ->middleware('permission:cursos.show');

    Route::delete('cursos/{curso}', 'CursoController@destroy')->name('cursos.destroy')
    ->middleware('permission:cursos.destroy');

    Route::get('cursos/{curso}/edit', 'CursoController@edit')->name('cursos.edit')
    ->middleware('permission:cursos.edit');

    //rutas Cursos



    //rutas usuarios    

    Route::get('users', 'UserController@index')->name('users.index')
    ->middleware('permission:users.index');   

    Route::put('users/{user}', 'UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
    ->middleware('permission:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
    ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');

});