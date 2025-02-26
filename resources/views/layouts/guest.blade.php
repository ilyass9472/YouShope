<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans" class="relative min-h-screen bg-cover bg-center ">   
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/50"></div>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-image: url('https://images.pexels.com/photos/4065133/pexels-photo-4065133.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
            <div>
                {{-- <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a> --}}
            </div>

            <div  class="mb-4 absolute w-full sm:max-w-md mt-6 px-6 py-4 bg-white/30 border-2 border-white shadow-md overflow-hidden sm:rounded-lg">

                {{ $slot }}
            </div>
        </div>
    </body>
</html>
