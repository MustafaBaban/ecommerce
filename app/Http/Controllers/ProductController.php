<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::inRandomOrder()->take(8)->get();
        return view('products')->with('products',$products);
    }
    public function show($slug){
        $product = Product::where('slug',$slug)->firstOrFail();
        
        return view('product')->with('product',$product);
    }

}
