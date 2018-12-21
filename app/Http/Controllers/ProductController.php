<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){

        $products = Product::take(0)->paginate(2);
        // $products = Product::get();
        $categories = Category::get();
        
        $brands = Brand::get();
        
        return view('products',compact('products','categories','brands'));
    }

    public function filter(Request $request){
        $products = Product::get();
        // dd($request->category_id);
        $price = 10000;
        if(isset($request->category_id)){
        $products = $products->where('category_id',$request->category_id);
        }

        if(isset($request->brand_id)){
        $products = $products->where('brand_id',$request->brand_id);
        }

        if(isset($request->search)){
        $products = $products->where ( 'name', 'LIKE',  '%'. $request->search . '%');
        }

        if(isset($request->price) && $request->price != 10000){
        $products = $products->where('price','<',$request->price);
        $price =$request->price;
        }
        
        $categories = Category::get();
        $brands = Brand::get();
        
        return view('products',compact('products','categories','brands','price'));
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

    public function like($id){
        $product = Product::where('id',$id)->update(['vote_count' => 1]);
        return true;
    }

}
