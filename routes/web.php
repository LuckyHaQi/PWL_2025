<?php

use Illuminate\Support\Facades\Route;
// Praktikum 2 Langkah 4
use App\Http\Controllers\WelcomeController;
// Praktikum 2 Langkah 6
use App\Http\Controllers\PageController;

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

//Langkah 6
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);
    
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
