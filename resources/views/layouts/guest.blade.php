<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Book Me') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="flex justify-center items-center h-screen bg-gray-200 px-6 bg-cover bg-center" style="background-image: url(bg_login.jpg)">
            <div class="p-6 max-w-sm w-full bg-[#12153D] shadow-md rounded-md">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
