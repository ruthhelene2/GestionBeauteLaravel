<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service= Service::all()-> count() > 4 ? Service::all()-> random(4):Service::all();

        return view('services.index', ['services'=> $service]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
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
            'image'=> ['required', 'unique:services,service_name'],
            'name'=> ['required']
        ]);

        //cette ligne va commencer par service puis un chiffre aléatoire puis user puis l'id du user et son extentension
        //pour aller garder dans image qui est dans service et qui est dans public
        $filename = 'service'.time() .'user' .$request->user()->id . '.' .$request->image->extension();
        $path = $request->image->storeAs(
            'images/services',
            $filename,
            'public'

        );

        //ce Service c'est le nom du model de la BD et on utilise entre cote
        //les nom de mes colones dans la BD
        Service:: create([
        'service_image'=> $path,
        'service_name'=>$request->name,
        'service_description'=>$request->description,
        'service_price'=>$request->price,
        'time'=>$request->time,
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
    public function show(Service $service)
    {
        $service->vue +=1;
        $service->save();
        return view('services.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('services.edit');
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

    //Partie utilisateur

    public function indexUser()
    {
        $service= Service::all()-> count() > 8 ? Service::all()-> random(8):Service::all();

        return view('userService.indexUser', ['services'=> $service]);
    }

    public function showUser($id)
    {
        return view('services.showUser');
    }
}
