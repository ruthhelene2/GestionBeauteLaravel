@extends('layouts.app')
@section('content')
<main class="p-4 md:p-16 bg-gray-100 md:col-span-4">
    <div class="my-2 text-secondary-200 flex justify-center md:justify-end">
        <a href="" class="btn border border-6 border-secondary-200 hover:bg-primary hover:text-black">Connexion</a>
        <a  class="ml-3 btn border border-6 border-secondary-200 hover:bg-primary hover:text-black" href="">Register</a>
    </div>
    <header class="mt-4">
            <h2 class="mb-4 text-primary text-5xl font-semibold  font-mono text-center ">DJEMAR LEADER IN MICROPIGMENTATION & MEDICAL ESTHETICS IN AFRIKA</h2>
            <!--h3 class="text-4xl mb-8 font-semibold text-black mt-4 font-mono md:text-end sm:text-center">Take care of your Face & Body</h3-->
        </header>
    <div>
        
        <div>
            <h4 class="text-cyan-500 font-bold text-3xl my-4 border-b pb-2 border-gray-300 md:text-start sm:text-center">Stay the most beautiful with the <span class="text-primary">CRYSTAL </span>Range with only 80.000 FCFA</h4>
            <div class="py-16 grid md:grid-cols-2 xl:grid-cols-4 gap-8">
                <!-- Nos card -->
                <div class="card">
                    <img src="{{asset('images/img2.jpg')}}" alt="poisson" class="w-full sm:h-48 md:45 lg:50 xl:40"><!--object-cover gere l'elargisement-->

                    <div class="m-4">
                        <span class="font-bold text-3xl sm:text-xl text-black" >Microneedling...30.000FCFA</span><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Show</a><br>
                        <a href="" class="text-green-500 font-mono font-semibold text-2xl">Edit</a><br>
                        <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a>
                    </div>
                    <div class="badge">
                        <span class="mx-2">2H:00</span>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('images/img4.jpg')}}" alt="poisson" class="w-full sm:h-48 md:45 lg:50 xl:55 object-cover"><!--object-cover gere l'elargisement-->

                    <div class="m-4">
                        <span class="font-bold sm:text-xl text-3xl text-black" >Find your Baby skin with Crystal</span><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Show</a><br>
                        <a href="" class="text-green-500 font-mono font-semibold text-2xl">Edit</a><br>
                        <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('images/img5.jpg')}}" alt="poisson" class="w-full sm:h-48 md:45 lg:50 xl:55 object-cover"><!--object-cover gere l'elargisement-->

                    <div class="m-4">
                        <span class="font-bold text-3xl text-black sm:text-xl" > Candylips...70.000FCFA Microshading...50.000FCFA</span><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Show</a><br>
                        <a href="" class="text-green-500 font-mono font-semibold text-2xl">Edit</a><br>
                        <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a>
                    </div>
                    <div class="badge">
                        <span class="mx-2">2H:00</span>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('images/img7.jpg')}}" alt="poisson" class="w-full sm:h-48 md:45 lg:50 xl:55 object-cover"><!--object-cover gere l'elargisement-->

                    <div class="m-4">
                        <span class="font-bold text-3xl text-black sm:text-xl" >Microblading...50.000FCFA</span><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Show</a><br>
                        <a href="" class="text-green-500 font-mono font-semibold text-2xl">Edit</a><br>
                        <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a>
                    </div>
                    <div class="badge">
                        <span class="mx-2">2H:00</span>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('images/img38.jpg')}}" alt="poisson" class="w-full sm:h-48 md:45 lg:50 xl:40"><!--object-cover gere l'elargisement-->

                    <div class="m-4">
                        <span class="font-bold text-3xl text-black sm:text-xl" >Teeth Whitening...20.000 FCFA</span><br>
                        <a href="" class=" text-blue-500 font-mono font-semibold text-2xl">Show</a><br>
                        <a href="" class="text-green-500 font-mono font-semibold text-2xl">Edit</a><br>
                        <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a>
                    </div>
                    <div class="badge">
                        <span class="mx-2">2H:00</span>
                    </div>
                </div>
                
                <div class="card">
                    <img src="{{asset('images/img3.jpg')}}" alt="poisson" class="w-full sm:h-48 md:40 lg:35 xl:32 object-cover">

                    <div class="m-4">
                        <span class="font-bold text-2xl text-black" >Keep your lips Pink 20.000FCFA</span><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Show</a><br>
                        <a href="" class="text-green-500 font-mono font-semibold text-2xl">Edit</a><br>
                        <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a>
                    </div>
                    <div class="badge">
                        <span class="mx-2">2H:00</span>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('images/img17.jpg')}}" alt="poisson" class="w-full sm:h-48 md:40 lg:35 xl:32 object-cover">

                    <div class="m-4">
                        <span class="font-bold text-2xl text-black" >End Baldness. Price on estimate</span><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Show</a><br>
                        <a href="" class="text-green-500 font-mono font-semibold text-2xl">Edit</a><br>
                        <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a>
                    </div>
                    <div class="badge">
                        <span class="mx-2">2H:00</span>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('images/img18.jpg')}}" alt="poisson" class="w-full sm:h-48 md:40 lg:35 xl:32 object-cover">

                    <div class="m-4">
                        <span class="font-bold text-2xl text-black" >The benefits of Crystal</span><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Show</a><br>
                        <a href="" class="text-green-500 font-mono font-semibold text-2xl">Edit</a><br>
                        <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a>
                    </div>
                    <div class="badge">
                        <span class="mx-2">2H:00</span>
                    </div>
                </div>
            </div>

        </div>
        <div>

        <!--Section des produits--->
            <h4 class="text-cyan-500 font-bold text-3xl my-2 border-b pb-1 border-gray-300 md:text-start sm:text-center">Products available in our departments</h4>
            <div class="py-16 grid md:grid-cols-2 xl:grid-cols-4 gap-8">
                <!-- Nos card -->
                
                <div class="card">
                    <img src="{{asset('images/img6.jpg')}}" alt="poisson" class="w-full sm:h-48 md:45 lg:50 xl:55 object-cover"><!--object-cover gere l'elargisement-->

                    <div class="m-4">
                        <span class="font-bold text-3xl text-black sm:text-xl" >Anti-Wrinkle...25.000 FCFA</span><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Show</a><br>
                        <a href="" class="text-green-500 font-mono font-semibold text-2xl">Edit</a><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Buy Now</a><br>
                        <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('images/img26.jpg')}}" alt="poisson" class="w-full sm:h-48 md:45 lg:50 xl:55 object-cover"><!--object-cover gere l'elargisement-->

                    <div class="m-4">
                        <span class="font-bold text-3xl text-black sm:text-xl" >Everything you need to have baby skin...80.000FCFA</span><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Show</a><br>
                        <a href="" class="text-green-500 font-mono font-semibold text-2xl">Edit</a><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Buy Now</a><br>
                        <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a>
                    </div>
                </div>
                
                <div class="card">
                    <img src="{{asset('images/img49.jpg')}}" alt="poisson" class="w-full sm:h-48 md:40 lg:35 xl:32 object-cover">

                    <div class="m-4">
                        <span class="font-bold text-2xl text-black" >Life is beautiful with Crystal</span><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Show</a><br>
                        <a href="" class="text-green-500 font-mono font-semibold text-2xl">Edit</a><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Buy Now</a><br>
                        <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a>
                    </div>

                </div>
                <div class="card">
                    <img src="{{asset('images/img32.jpg')}}" alt="poisson" class="w-full sm:h-48 md:40 lg:35 xl:32 object-cover">

                    <div class="m-4">
                        <span class="font-bold text-2xl text-black" >take care of you with Crystal range</span><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Show</a><br>
                        <a href="" class="text-green-500 font-mono font-semibold text-2xl">Edit</a><br>
                        <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Buy Now</a><br>
                        <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a>
                    </div>

                </div>
            </div>

        </div>
        <div class="flex justify-center">
            <div class="bg-blue-500 text-gray-800 py-2 px- btn">Read More</div>
        </div>

        </div>
        
</div>
</main><!-- fin Contenu principale -->

</div>
@endsection
