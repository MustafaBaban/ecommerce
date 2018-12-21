<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;
use App\User;
use App\Product;


class AdminController extends Controller
{
    
    public function index() {
        $users = User::all();
        if(Gate::allows('admin', Auth::user())){
        return view('admin',compact('users'));
        }
    }

    public function add_item() {
        if(Gate::allows('admin', Auth::user())){
            return view('add_item');
            }
    }

    public function showProducts(){
        $products = Product::all();
        if(Gate::allows('admin', Auth::user())){
            return view('items')->with('products',$products);
            }
        
    }

    public function showUsers(){
        $users = User::all();
        if(Gate::allows('admin', Auth::user())){
            return view('users')->with('users',$users);  
            }
   }

   public function store(Request $request){

    $slug = $request->name;
    $slug = str_replace(' ', '', $slug);

    if(Gate::allows('admin', Auth::user())){
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
            'color'  => $request->color,
            'category_id'  => $request->category_id,
            'brand_id'  => $request->brand_id,
            'image1'  => $request->file[0],
            'image2'  => $request->file[1],
            'image3'  => $request->file[2],
            'image4'  => $request->file[3],
        ]);
        }


}

public function delete($id){

     $product = Product::find($id);
     if(Gate::allows('admin', Auth::user())){
        $product->delete();

        return back();
        }

}

}
