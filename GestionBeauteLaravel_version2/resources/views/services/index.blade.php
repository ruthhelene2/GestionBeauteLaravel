@extends('layouts.app')

@section('content')
    
    <header class="mt-3">
            <h2 class="mb-4 text-primary text-5xl font-semibold  font-mono text-center ">MICROPIGMENTATION & MEDICAL ESTHETICS</h2>
            <!--h3 class="text-4xl mb-8 font-semibold text-black mt-4 font-mono md:text-end sm:text-center">Take care of your Face & Body</h3-->
        </header>
    <div>
        
        <div>
        <div class=" flex justify-end mt-3">
                <button type="submit" class="border-spacing-4 border-2 text-black bg-primary font-bold text-3xl p-2 rounded-md text-cyan hover:text-indigo-600" href="{{route('services.index')}}">See More</button>
            </div>
        
            <div class="py-8 grid md:grid-cols-2 xl:grid-cols-4 gap-8">
                <!-- Nos card --> 
             @forelse ($services as $service )
             <div class="card -z-20">
                    <img src="{{Storage::url($service->service_image)}}" alt="{{$service->service_name}}" class="w-full sm:h-48 md:45 lg:50 xl:40"><!--object-cover gere l'elargisement-->
                    <div class="m-4">
                        <span class="font-bold text-3xl sm:text-xl text-black" >{{$service->service_name}}</span><br>
                        <span class="font-bold text-3xl sm:text-xl text-black" >{{$service->service_price}}</span><br>
                        <!-- <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Show</a><br> -->
                        <!-- <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a> -->
                    </div>
                    <div class="badge">
                        <span class="mx-2"><span class="font-bold text-3xl sm:text-xl text-black" >{{$service->time}}</span><br></span>
                    </div>
                </div>
                @empty
                <span>Aucun service</span> 

                @endforelse

        </div>  
        </div>
            <div>
                
            </div>
    </div><!-- fin Contenu principale -->
@endsection
