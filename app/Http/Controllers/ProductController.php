<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $produits = Product::orderBy("id","desc")->paginate(10);

        return view('product.index')->with('produits', $produits);
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){

        $data = array();

        $data['name'] = $request->name;
        $data['quantity'] = $request->quantity;
        $data['price'] = $request->price;
        $data['description'] = $request->description;

        $newProduct = Product::create($data);

        return redirect('/product')->with('success', 'le produit'.$request->name.' a été ajouté avec succès');

    }
}
