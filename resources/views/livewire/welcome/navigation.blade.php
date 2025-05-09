<nav class="navbar">
    <div class="container-main">
        <div class="nav-element">
            <div class="nav-content">
                <div class="nav-menu" id="nav-menu">
                    <div class="session-nav-buttons">
                        <x-nav-link message="Login" route="login"></x-nav-link>
                        @if (Route::has('register'))
                            <x-nav-link message="Register" route="register"></x-nav-link>
                        @endif
                    </div>
                    <x-nav-link :message="mb_strtoupper(__('layout.nav-links.home'))" route="/"> </x-nav-link>
                    <x-nav-link :message="mb_strtoupper(__('layout.nav-links.shop'))" route='/shop'> </x-nav-link>
                    <x-nav-link :message="mb_strtoupper(__('layout.nav-links.contact'))" route="/"> </x-nav-link>
                </div>

                <div>
                    <x-application-logo></x-application-logo>
                </div>
            </div>

            <div class="nav-buttons-wrap">
                @auth
                    <x-cart></x-cart>
                @else
                    <div class="session-nav-buttons-wrap">
                        <x-nav-link message="Login" route="login"></x-nav-link>
                        @if (Route::has('register'))
                            <x-nav-link message="Register" route="register"></x-nav-link>
                        @endif
                    </div>
                @endauth


                <!-- Botón de Menú -->
                <button id="menu-button" class="menu-button">
                    <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuButton = document.getElementById("menu-button");
        const menu = document.getElementById("nav-menu");
        const menuIcon = document.getElementById("menu-icon");
        const closeIcon = document.getElementById("close-icon");

        menuButton.addEventListener("click", function () {
            if (menu.classList.contains("active")) {
                // Cerrar menú con retraso en la visibilidad
                menu.classList.remove("active");
            } else {
                // Abrir menú
                menu.style.visibility = "visible";
                menu.classList.add("active");
            }

            menuIcon.classList.toggle("hidden"); // Oculta el icono de hamburguesa
            closeIcon.classList.toggle("hidden"); // Muestra el icono de cerrar
        });
    });
</script>
