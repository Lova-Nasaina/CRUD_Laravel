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

    public function edit($id){
         $produit = Product::find($id);

        return view('product.edit')->with('produit', $produit);
    }

    public function saveEdit(Request $request, $id){

        $produit = Product::find($id);

        $produit->name = $request->name;
        $produit->quantity = $request->quantity;
        $produit->price = $request->price;
        $produit->description = $request->description;

        $produit->save();

        return redirect('/product')->with('success', 'Les Modifications sur '.$request->name.' a été achevé avec succès');
    }

    public function delete($id){
        $element = Product::find($id);
        $element->delete();

        return redirect('/product')->with('success','Element supprimer avec succès');
    }
}
