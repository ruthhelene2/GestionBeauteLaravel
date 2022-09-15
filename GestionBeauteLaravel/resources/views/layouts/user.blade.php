<html>
    <head>
        <title>{{env("APP_NAME")}} - @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
      
    </head>
    <body>
        <div class="container flex flex-row">
           <div class=" h-screen bg-sky-500 w-1/4 text-3xl font-mono font-bold">
                @section('sidebar')
                @include('components.sidebar')
                @show
           </div>
        
            <div class="container flex-grow  h-screen p-3">
                
                @yield('content')
            </div>
        </div>
    </body>
</html>