<div class="footer">
    <div class="footer-top">
        <div class="container-main">
            <div class="footer-top-content">
                <div>
                    <x-application-logo></x-application-logo>

                    <div class="footer-para-wrap">
                        {{-- todo: implementar traducciones --}}
                        An Jewearly website.
                    </div>
                        <x-social-info></x-social-info>

                    <div class="footer-para-wrap">
                        <button class="primary-button">
                            <div class="button-shadow"></div>

                            <div class="button-border">
                                Registrarse
                            </div>

                        </button>

                    </div>
                </div>

                <div class="footer-link-columns">

                    <div class="footer-link-column">
                        <span class="footer-column-title"> Company </span>

                        <div class="footer-single-link">
                            <x-nav-link message="home" route="/"> </x-nav-link>

                        </div>
                        <div class="footer-single-link">
                            <x-nav-link message="shop" route='/shop'> </x-nav-link>

                        </div>
                        <div class="footer-single-link">
                            <x-nav-link message="contact us"> </x-nav-link>

                        </div>
                    </div>

                    <div class="footer-link-column">
                        <span class="footer-column-title"> Contact </span>

                        <div class="footer-single-link">
                            <span class="text-block">
                                +502 1234 5678
                                <span class="hover-line"></span>
                            </span>
                        </div>
                        <div class="footer-single-link">
                            <span class="text-block">
                                correo_xyz@asdf.com
                                <span class="hover-line"></span>
                            </span>
                        </div>
                        <div class="footer-single-link">
                            <p>Calle maravilla 123</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container-main">
            &copy; Todos los derechos reservados
        </div>
    </div>
</div>
