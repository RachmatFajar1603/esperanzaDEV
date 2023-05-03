<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Book Me') }}</title>

        {{-- flowbite --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body>
        <div x-data="{ sidebarOpen: false }" class="flex h-screen font-roboto" >
            @include('layouts.navigation')
 
            <div class="flex overflow-hidden flex-col flex-1">
                @include('layouts.header')

                @auth
                @if(auth()->user()->role == '2')
                <main class="overflow-y-auto overflow-x-hidden flex-1 bg-cover bg-center" style="background-image: url(bg_login.jpg)">
                    <div class="container px-6 py-8 mx-auto">
                        @if (isset($header))
                            <h3 class="mb-4 text-3xl font-medium text-gray-900">
                                {{ $header }}
                            </h3>
                        @endif

                        {{ $slot }}
                    </div>
                </main>

                @else 
                <main class="overflow-y-auto overflow-x-hidden flex-1 bg-cover bg-center bg-white">

                        {{ $slot }}

                </main>
                @endif
                @endauth
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    </body>
</html>
