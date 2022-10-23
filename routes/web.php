<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

/*Route::get('/', function (){
   return  '<h1>Hello world</h1>';
});*/
/* Route::get('/',  function (){
     $res = 2 + 3; // Можно передать в представление
     $name = 'John'; // Можно передать в представление
 //    return view('Home', ['res' => $res, 'name' => $name]);
       return view('home', compact('res', 'name'));
 });
 Route::get('/about', function (){
     return '<h1>About Page</h1>'; // Возвращаем строку без представления(view) поэтому не надо создавать страничку
 });
 Route::get('/contact', function (){
    return view('contact');
 });*/

/* Route::post('/send-email', function (){
     if (!empty($_POST)){
         dump($_POST);
     }
     return 'send-email';
 });*/

/*Route::match(['post', 'get'], '/contact',  function (){ //
    if (!empty($_POST)){
        dump($_POST);
    }
    return view('/contact');
})->name('contact');*/


/**
  Иногда необходимо зарегистрировать маршрут, который отвечает на HTTP-запросы нескольких типов. Это можно сделать методом match(). Или вы можете зарегистрировать маршрут, отвечающий на HTTP-запросы всех типов, с помощью метода any():

Route::match(['get', 'post'], '/', function () {
    //
});

Route::any('foo', function () {
    //
});*/
/*    Route::prefix('admin')->group(function (){
        Route::get('/posts', function (){
            return 'Posts List';
        });

        Route::get('/posts/create', function (){
            return 'Post Create';
        });

        Route::get('/posts/{id}/edit', function ($id){
            return "Edit Post $id";
        });
    });

    Route::get('/test', function (){
       return view('test');
    });


Route::get('/post/{id}/{slug}', function ($id, $slug) {
    return "Post $id | $slug";
})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z0-9-]+']);*/
Route::get('test', [HomeController::class, 'test']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/page/{slug}', [PageController::class, 'show']);

Route::fallback(static function () {
//    return redirect()->route('home');
    abort(404, 'Oops! Page not found...');
});

Route::view('php', 'phpversion');




