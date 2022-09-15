@extends('layouts.app')

@section('content')
    
    <div class="">
        <img src="{{asset('images/index.jpg')}}" alt="djemar" class="w-full  h-96">       
    </div>
    <div>
        <div>
            <div class=" flex justify-end mt-3">
                <button type="submit" class="border-spacing-4 border-2 text-black bg-primary font-bold text-3xl p-2 rounded-md text-cyan hover:text-indigo-600" href="{{route('services.index')}}">See More</button>
            </div>
            <div class="py-4 grid md:grid-cols-2 xl:grid-cols-4 gap-8">
                <!-- Nos card --> 
             @forelse ($services as $service )
                @include('partials.carteService')
                @empty
                <span>Aucun service</span> 
                @endforelse
        </div>  
        </div>
            <div>
                
            </div>
    </div><!-- fin Contenu principale -->

    <div>
        <div>
            <div class=" flex justify-end mt-3">
                <button type="submit" class="border-spacing-4 border-2 text-black bg-primary font-bold text-3xl p-2 rounded-md text-cyan hover:text-indigo-600" href="{{route('services.index')}}">See More</button>
            </div>
            <div class="py-4 grid md:grid-cols-2 xl:grid-cols-4 gap-8">
                <!-- Nos card --> 
             @forelse ($products as $product )
             <!--['product'=>product]: 'product'represente le nom de la variable et product sa valeur --> 
                @include('partials.carteProduct');
                @empty
                <span>Aucun produit</span> 
                @endforelse
        </div>  
        </div>
            <div>
                
            </div>
    </div>

@endsection
