<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PookieMart</title>
    @vite('resources/css/app.css')

    <style>
        /* Carousel animation */
        .slider {
            display: flex;
            width: max-content;
            animation: scroll 20s linear infinite;
        }
        .slider .flex {
            display: flex;
            gap: 1.5rem; /* jarak antar gambar */
        }
        .slider img {
            width: 500px;
            height: 300px;
            object-fit: cover;
            border-radius: 16px; /* rounded */
        }
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
    </style>

</head>
<body class="bg-white text-gray-900 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-gray-20 flex justify-between items-center px-6 py-3 shadow">
            <x-application-logo></x-application-logo>

        <div class="space-x-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" 
                       class="px-4 py-2 bg-brand-default text-white rounded hover:bg-gray-800">
                        Home
                    </a>
                @else
                    <a href="{{ route('login') }}" 
                       class="px-4 py-2 border-2 border-brand-default rounded hover:bg-brand-default/20">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                           class="px-4 py-2 bg-brand-default text-white rounded hover:bg-brand-dark">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </header>

    <!-- Hero Section -->
    <main class="flex-1 flex flex-col justify-center items-center text-center px-4 py-12">
        <h1 class="text-7xl font-semibold text-brand-default">POOKIE MART</h1>
        <h2 class="text-9xl font-bold mt-2">ONE FOR ALL</h2>
        <p class="text-lg text-gray-600 font-medium mt-3">created with fidelina affectine sweat</p>
    </main>

    <!-- Image Carousel -->
    <section class="overflow-hidden w-full py-8 ">
        <div class="slider">
            <div class="flex space-x-6">
                <img src="img/image1.jpg" alt="Image 1" class="rounded-2xl shadow-lg">
                <img src="img/image2.jpg" alt="Image 2" class="rounded-2xl shadow-lg">
                <img src="img/image3.jpg" alt="Image 3" class="rounded-2xl shadow-lg">
                <img src="img/image4.jpg" alt="Image 4" class="rounded-2xl shadow-lg">
                <img src="img/image5.jpg" alt="Image 5" class="rounded-2xl shadow-lg">
                <!-- duplikat untuk looping halus -->
                <img src="img/image1.jpg" alt="Image 1" class="rounded-2xl shadow-lg">
                <img src="img/image2.jpg" alt="Image 2" class="rounded-2xl shadow-lg">
                <img src="img/image3.jpg" alt="Image 3" class="rounded-2xl shadow-lg">
                <img src="img/image4.jpg" alt="Image 4" class="rounded-2xl shadow-lg">
                <img src="img/image5.jpg" alt="Image 5" class="rounded-2xl shadow-lg">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-200 text-black font-bold text-sm px-6 py-4 flex justify-between">
        <span>©2025 PookieMart – All rights reserved</span>
        <span>Pookie Mart</span>
    </footer>

</body>
</html>
