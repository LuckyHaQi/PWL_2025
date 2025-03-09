<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/category/foodbeverage', [ProductController::class, 'foodBeverage']);
Route::get('/category/beautyhealth', [ProductController::class, 'beautyHealth']);
Route::get('/category/homecare', [ProductController::class, 'homeCare']);
Route::get('/category/babykid', [ProductController::class, 'babyKid']);

Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

Route::get('/sales', [SalesController::class, 'index']);
