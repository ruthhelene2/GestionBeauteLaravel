<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product= Products::all()-> count() > 4 ? Products::all()-> random(4):Products::all();

        return view('products.index', ['services'=> $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //Nous mettons la categorie dans la vue
        $categories= Categorie::all();
        return view('products.create',[
            'categories'=>$categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Stockage des données dans la BD
        $this->validate($request, [
            'image'=> ['required', 'unique:products,product_name'],
            'name'=> ['required'],
            'categorie_id'=> ['required']
        ]);

        //cette ligne va commencer par service puis un chiffre aléatoire puis user puis l'id du user et son extentension
        //pour aller garder dans image qui est dans service et qui est dans public
        $filename = 'product'.time() .'user' .$request->user()->id . '.' .$request->image->extension();
        $path = $request->image->storeAs(
            'images/products',
            $filename,
            'public'

        );

        //ce Service c'est le nom du model de la BD et on utilise entre cote
        //les nom de mes colones dans la BD
        Products:: create([
        'product_image'=> $path,
        'product_name'=>$request->name,
        'product_description'=>$request->description,
        'product_price'=>$request->price,
        'product_categorie'=>$request->price,
        'user_id'=>$request->user()->id,

        ]);

        return redirect()->route('services.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Products $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
