<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('layout.nav-links.home')}}</title>

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
            {{-- -- -- -- -- -- -- -- Section common hero -- -- -- -- -- -- -- --}}
            <div class="container-main">
                <div class="section-component">
                    <div class="hero-element">
                        {{-- -- -- -- -- -- -- -- Seccion de Contenido -- -- -- -- -- -- -- --}}
                        <div class="hero-content-block">
                            <div class="flex-vertical">
                                <h1 class="h1">{{__('home.section-hero.title')}}</h1>
                                <div class="hero-para-wrap">
                                    <p>{{__('home.section-hero.subtitle')}}</p>
                                </div>
                                <div>
                                    <button class="primary-button">
                                        <div class="button-shadow"></div>

                                        <div class="button-border">
                                            {{__('home.section-hero.button')}}
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- -- -- -- -- -- -- -- Seccion de Imagen -- -- -- -- -- -- -- --}}
                        <div class="hero-image-block">
                            <div class="reveal-image-wrap">
                                <img class="reveal-image" src="https://cdn.prod.website-files.com/67c0b6fdf5e66b6ddf545c74/67c0b6fdf5e66b6ddf545d08_hero-image.avif" alt="Hero Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-featured-category">
                <div class="container-main">
                    <div class="section-component">
                        <div class="featured-category-title-block">
                            <h2 class="h2">{{__('home.section-featured-category.title')}}</h2>
                            <div class="hide-on-landscape">
                                <button class="primary-button">
                                    <div class="button-shadow"></div>

                                    <div class="button-border">
                                        {{__('home.section-featured-category.button')}}
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div class="featured-category-collection">
                            <livewire:FeatureCategoryCollection/>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        {{-- footer --}}
        <footer>
            <x-footer></x-footer>
        </footer>
    </body>
</html>
