<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://kit.fontawesome.com/3cc229930b.js" crossorigin="anonymous"></script>
    </head>
    <body >
        {{-- header --}}
        <header>
            <x-baner>
                New products available
            </x-baner>
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </header>

        {{-- main --}}
        <main>
            A ver que chingados hago aqui
        </main>

        {{-- footer --}}
        <footer>
            <x-footer></x-footer>
        </footer>
    </body>
</html>
