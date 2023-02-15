<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // HOME
    public function home() {
        $products = Product::all();
        return view('pages.home', compact('products'));
    }

    // SHOW
    public function productShow(Product $product) {
        return view('pages.productShow', compact('product'));
    }
    
    // DELETE
    public function delete() {
    }

    // CREATE
    public function create() {
    }

    // EDIT
    public function edit() {
    }
}
