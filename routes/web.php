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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'Controller@home');
Route::get('blog', 'Controller@blog');
Route::get('blog_single', 'Controller@blog-single');
Route::get('about', 'controller@about');
Route::get('contact', 'Controller@contact');
Route::get('element', 'Controller@element');
Route::get('portfolio', 'Controller@portfolio');
Route::get('services', 'Controller@services');
Route::get('price', 'Controller@price');


