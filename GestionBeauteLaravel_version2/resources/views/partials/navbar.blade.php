<div class="fixed w-full bg-black opacity-50">
    <div class="flex flex-row justify-between h-16">
        <div class="w-20 mt-3 ml-2">
            <img src="{{asset('images/logo.jpg')}}" alt="logo" >
        </div>
        <form action="">
            <input type="text" placeholder="Search" class="text-center py-2 px-2 mt-4 rounded-2xl">
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-6xl text-white mx-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </form>
        @section('connexion')
            @include('partials.connexion')
        @show
    </div>
    <nav class="flex flex-row w-full justify-center text-gray-200 font-semibold text-center text-2xl">
        <div class="p-2 px-5 ">
            <a href="">Accueil</a>
        </div>
        <div  class="p-2 px-5">
        <a href="">About Us</a>
        </div>
        <div  class="p-2 px-5">
            <a href="">Our Services</a>
        </div>
        <div  class="p-2 px-5">
            <a href="">Our Products</a>
        </div>
        <div  class="p-2 px-5">
            <a href="">Reservation</a>
        </div>
        <div  class="p-2 px-5">
            <a href="">Contact</a>
        </div>
    </nav>
</div>