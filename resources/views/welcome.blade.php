<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/pookieicon.png') }}" type="image/png class="">
    <title>PookieMart</title>
    @vite('resources/css/app.css')

    <style>
        /* Fullscreen video background */
        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* biar di belakang konten */
        }
    </style>
</head>
<body class="flex flex-col min-h-screen text-gray-900">

    <!-- Video Background -->
    <video autoplay muted loop playsinline class="video-bg">
        <source src="{{ asset('vid/bg.mp4') }}" type="video/mp4">
    </video>

    <div class="absolute inset-0 bg-black/50"></div>
    
    <!-- Header -->
    <header class="relative z-10 flex items-center justify-between px-8 py-4">
        <x-application-logo></x-application-logo>
            

        <div class="space-x-3">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" 
                       class="px-8 py-4 text-black bg-white rounded-full hover:bg-brand-default hover:text-white">
                        Home
                    </a>
                @else
                    <a href="{{ route('login') }}" 
                       class="px-6 py-4 text-sm font-semibold rounded-full bg-white/30 hover:bg-white/50">
                        Log In
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                           class="px-6 py-4 text-sm font-semibold text-black bg-white rounded-full hover:bg-brand-default hover:text-white">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </header>

    <!-- Hero Section -->
    <main class="relative z-10 flex flex-col items-center justify-center flex-1 px-4 text-center">
        <h1 class="font-bold tracking-wider text-white text-8xl">
            POOKIE MART
        </h1>
        <h2 class="mt-2 font-bold text-white text-9xl" >
            ONE FOR ALL
        </h2>    
        <p class="max-w-lg mt-6 text-lg text-white/90">
            get your shopping done with us
        </p>
    </main>

    <!-- Footer -->
    <footer class="relative flex justify-center w-full pb-6 ">
        <div class="flex items-center justify-between w-[90%] max-w-4xl px-6 py-4 text-sm font-medium text-white bg-black/70 rounded-2xl shadow-lg">
            <span>@2025 – All rights reserved</span>
            <span>created by fidelina affectine sweat</span>
        </div>
    </footer>

</body>
</html>
