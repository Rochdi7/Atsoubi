<!-- Main Header-->
<header class="main-header">

    <!-- Main box -->
    <div class="main-box">
        <!--Nav Outer -->
        <div class="nav-outer">
            <div class="logo-box">
                <div class="logo">
                    <a href="{{ route('frontoffice.home') }}">
                        <img src="{{ asset('assets/frontoffice/images/logo.svg') }}" alt="Atsoubi" title="Atsoubi">
                    </a>
                </div>
            </div>

            <nav class="nav main-menu">
                <ul class="navigation" id="navbar">

                    <li class="{{ request()->routeIs('front.home') ? 'current' : '' }}">
                        <a href="{{ route('frontoffice.home') }}">Accueil</a>
                    </li>

                    <li>
                        <a href="{{ route('frontoffice.home') }}#services">Accompagnement</a>
                    </li>

                    <li>
                        <a href="{{ route('frontoffice.home') }}#process">Étapes</a>
                    </li>

                    <li>
                        <a href="{{ route('frontoffice.home') }}#testimonials">Témoignages</a>
                    </li>

                    <li>
                        <a href="{{ route('frontoffice.home') }}#contact">Contact</a>
                    </li>

                    <!-- Only for Mobile View -->
                    <li class="mm-add-listing">
                        <a href="{{ route('frontoffice.home') }}#contact"
                            class="theme-btn btn-style-one">Pré-évaluation</a>
                        <span>
                            <span class="contact-info">
                                <span class="phone-num">
                                    <span>WhatsApp</span>
                                    <a href="https://wa.me/212600000000" target="_blank">+212 6 00 00 00 00</a>
                                </span>
                                <span class="address">
                                    Maroc • Accompagnement vers l’Allemagne
                                </span>
                                <a href="mailto:contact@atsoubi.ma" class="email">contact@atsoubi.ma</a>
                            </span>

                            <span class="social-links">
                                <a href="#" aria-label="Facebook"><span class="fab fa-facebook-f"></span></a>
                                <a href="#" aria-label="Instagram"><span class="fab fa-instagram"></span></a>
                                <a href="#" aria-label="LinkedIn"><span class="fab fa-linkedin-in"></span></a>
                            </span>
                        </span>
                    </li>
                </ul>
            </nav>
            <!-- Main Menu End-->
        </div>

        <div class="outer-box">
            <!-- WhatsApp -->
            <a href="https://wa.me/212600000000" target="_blank" class="upload-cv">
                WhatsApp
            </a>

            <!-- CTA -->
            <div class="btn-box">
                <a href="{{ route('frontoffice.home') }}#contact" class="theme-btn btn-style-three">
                    Pré-évaluation gratuite
                </a>
                <a href="{{ route('frontoffice.home') }}#contact" class="theme-btn btn-style-one">
                    Commencer
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo">
            <a href="{{ route('frontoffice.home') }}">
                <img src="{{ asset('assets/frontoffice/images/logo.svg') }}" alt="Atsoubi" title="Atsoubi">
            </a>
        </div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">
            <div class="outer-box">
                <!-- Quick CTA -->
                <div class="login-box">
                    <a href="{{ route('frontoffice.home') }}#contact" class="call-modal" aria-label="Contact">
                        <span class="icon-user"></span>
                    </a>
                </div>

                <a href="#nav-mobile" class="mobile-nav-toggler">
                    <span class="flaticon-menu-1"></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div id="nav-mobile"></div>
</header>
<!--End Main Header -->
