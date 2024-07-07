<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <!-- Scripts -->
        @routes

        @switch(request()->platform())
            @case($platforms::GROUP)
                @vite(['resources/js/Group/app.js', "resources/js/Group/Pages/{$page['component']}.vue"])     
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
            @break
            @case($platforms::FARMS)
                @vite(['resources/js/Farms/app.js', "resources/js/Farms/Pages/{$page['component']}.vue"])  
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">       
            @break
            @case($platforms::STORES)
                @vite(['resources/js/Stores/app.js', "resources/js/Stores/Pages/{$page['component']}.vue"]) 
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">    
            @break
            @default
        @endswitch

        @inertiaHead
    </head>
    <body >
        @inertia

        <div>
            {{request()->platform}}
        </div>
    </body>
</html>
