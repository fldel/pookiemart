<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PookieMart') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            @keyframes gradientMove {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }
            .gradient-animate {
                background: linear-gradient(-45deg, #d6326c, #c50837, #fbcfe8, #e73d62);
                background-size: 400% 400%;
                animation: gradientMove 10s ease infinite;
            }
        </style>
    </head>
    <body class="font-sans text-brand-default antialiased">
        <div class="min-h-screen flex items-center justify-center bg-gray-100">
            <div class="w-full max-w-4xl min-h-[550px] bg-white rounded-2xl shadow-lg overflow-hidden grid grid-cols-1 md:grid-cols-2">
                
                <!-- LEFT SECTION -->
                <div class="gradient-animate flex flex-col justify-between p-6 text-white rounded-r-2xl md:rounded-r-none md:rounded-l-2xl">
                    <div>
                        <p class="text-lg">You can easily</p>
                        <h2 class="text-4xl font-bold mt-2">Get your needs with<br>Pookie Mart</h2>
                    </div>
                    <div class="flex justify-center space-x-6">
                        <x-application-logo></x-application-logo>
                        <x-pookie-logo></x-pookie-logo>
                    </div>
                </div>

                <!-- RIGHT SECTION -->
                <div class="flex flex-col justify-center items-center p-8">
                <div class="p-8">
                    {{ $slot }}
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
