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

    public function store(Request $request){

        $slug = $request->name;
        $slug = str_replace(' ', '', $slug);

      
        Product::create([
            'name' => $request->name, 
            'slug'  => $slug,
            'cpu' => $request->cpu, 
            'ram' => $request->ram,
            'hard_drive'  => $request->hard_drive,
            'screen_size' => $request->screen_size,
            'gpu' => $request->gpu,
            'price' => $request->price, 
            'inventory' => $request->inventory,
            'description'  => $request->description,
            'vote_count'  => 0,
            'type'  => $request->type,
            'category_id'  => $request->category_id,
            'image1'  => $request->file[0],
            'image2'  => $request->file[1],
            'image3'  => $request->file[2],
            'image4'  => $request->file[3],
        ]);

    }

    public function delete($id){

         $product = Product::find($id);

         $product->delete();

        return back();
    }

    public function showAll(){
        $products = Product::all();
       
        return view('items')->with('products',$products);
    }

}
