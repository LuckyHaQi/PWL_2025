<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage() {
        return view('products.foodbeverage');
    }
    
    public function beautyHealth() {
        return view('products.beautyhealth');
    }
    
    public function homeCare() {
        return view('products.homecare');
    }
    
    public function babyKid() {
        return view('products.babykid');
    }   
}

