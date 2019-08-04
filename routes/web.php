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

// Rutas de front
Route::get('/navbar', function () {
  return view('front.navbar');
});

Route::get('/index', function () {
  return view('front.index');
});

Route::get('/preguntas', function () {
  return view('front.preguntas');
});

Route::get('/products', function () {
  return view('front.products');
});

Route::get('/admin', function () {
  return view('front.admin');
});

Route::get('/perfil', function () {
  return view('front.perfil');
});

Route::get('/footer', function () {
  return view('front.footer');
});

// ruta a productos
Route::get('/products', 'ProductosController@index');
// Hay que hacerla nueva con la nueva lista de productos.

// ruta a registración
Route::get('/registrarme', function () {
  return view('front.register');
});
// ahora funcionan el register de laravel directamente

// ruta a perfil de usuario
// Cambiar a post

Auth::routes();

Route::get('/home', 'HomeController@index')/*->name('home')*/;

// Route::get('/profile', function () {
// 	if (Auth::user()) {
// 		echo "Hola " . Auth::user()->name . "<br>";
// 		echo "<img src='/storage/avatars/" . Auth::user()->avatar . "' width='100' /><br>";
// 	} else {
// 		return redirect('/register');
// 	}
// })->name('profile');
