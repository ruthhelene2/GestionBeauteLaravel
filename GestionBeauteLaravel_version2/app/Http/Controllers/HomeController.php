<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        //$service= Service::all()-> count() > 4 ? Service::all()-> random(4):Service::all();
        //$product= Products::all()-> count() > 4 ? Products::all()-> random(4):Products::all();

        $service= Service::all()-> count() > 4 ? Service::all()->sortByDesc('vue')->take(4):Service::all();
        $product= Products::all()-> count() > 4 ? Products::all()->sortByDesc('vue')->take(4):Products::all();

        return view('welcome', [
            'services'=> $service,
            'products'=> $product
    ]);
    }

    
}
