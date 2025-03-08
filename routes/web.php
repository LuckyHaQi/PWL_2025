<?php

use Illuminate\Support\Facades\Route;
// Praktikum 2 Langkah 4
use App\Http\Controllers\WelcomeController;
// Praktikum 2 Langkah 6
// use App\Http\Controllers\PageController;
// Praktikum 2 Langkah 7
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
// Praktikum 2 Langkah 8
use App\Http\Controllers\PhotoController;

// Route::get('/hello', function () {
//     return 'Hello World!';
// });

Route::get('/world', function () {
    return 'World';
});

Route::get('/welcome', function () {
    return 'Selamat Datang!';
});

// Route::get('/about', function () {
//     return 'NIM: 2341720077';
// });

Route::get('/posts/{satu}/comments/{lima}',
function ($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/articles/{Kerusuhan98}', function ($id) {
// return 'Halaman Artikel dengan ID: '.$id;
// });

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });


// PRAKTIKUM 2

// Langkah 4
Route::get('/hello', [WelcomeController::class,'hello']);

// Langkah 6
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Langkah 7
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Langkah 8
Route::resource('photos', PhotoController::class);

// Praktikum 3

// Langkah 2
Route::get('/greeting', function () {
    return view('hello', ['name' => 'Luqman']);
});
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
