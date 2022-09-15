<html>
    <head>
        <title>{{env("APP_NAME")}} - @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../fontawesome-free-6.1.1-web/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @vite('resources/css/app.css')
      
    </head>
    <body class="text-gray-400 font-primary">
    <div>
    <div class="">
    @isAdmin
        {{--L'utilsateur est un Admin--}}
        @section('sidebar')
            @include('partials.sidebar')
        @show
        <main class="box-border flex flex-col ml-72 pt-3 pr-4 min-h-full">
            @section('connexion')
                @include('partials.connexion')
            @show    
            @yield('content')
        </main>
    @else
        {{--Tu es un simple User--}}
        @section('navbar')
            @include('partials.navbar')
        @show
        @yield('content')
    @endisAdmin         
</div>

<footer class=" bg-amber-100 text-black border border-spacing-1 border-black-3">
        <p class=" font-bold text-2xl">DJEMAR BEAUTY SECIALIST OF MICRIPIGMENTATION</p>
        <div class="py-8 grid md:grid-cols-2 xl:grid-cols-4 gap-8">
            <div class="card2 flex-col font-semibold">
                <i class="fa-solid fa-location-dot zen-map content-center"></i>
                <p> Douala-Bonamoussadi.</p><br>
                <p>Ancien Cheval Blanc.</p><br>
            </div>
            <div class="card2  font-semibold">
            <a class="" href="">
                <p>Réservation</p>
            </a>
            </div>
            <div class="card2  font-semibold">
            <a class="" href="">
                <p>Avis</p>
            </a>
            </div>
            <div class="card2 flex-row justify-between text-center">
                <div>
                <a class="" href="tel:+237 655 64 15 79">
                    <i class="fa-solid fa-phone"></i>
                </a>
                </div>
                <div>
                <a class="" href="mailto:djemarbeauty@gmail.fr">
                    <i class="fa-solid fa-envelope"></i>
                </a>
                </div>
                <a class="" href="tel:+07 50 38 98 34">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a class="" href="djemar.beauty">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a class="" href="djemar.beauty">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
    </footer>

    </body>
</html>