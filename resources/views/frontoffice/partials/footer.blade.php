<!-- Main Footer -->
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section wow fadeInUp">
            <div class="row">

                {{-- Bloc logo + contact --}}
                <div class="big-column col-xl-4 col-lg-3 col-md-12">
                    <div class="footer-column about-widget">
                        <div class="logo">
                            <a href="{{ route('frontoffice.home') }}">
                                <img src="{{ asset('assets/frontoffice/images/logo.svg') }}" alt="Atsoubi">
                            </a>
                        </div>

                        <p class="phone-num">
                            <span>WhatsApp</span>
                            <a href="https://wa.me/212600000000" target="_blank">+212 6 00 00 00 00</a>
                        </p>

                        <p class="address">
                            Maroc • Accompagnement vers l’Allemagne
                            <br>
                            <a href="mailto:contact@atsoubi.ma" class="email">contact@atsoubi.ma</a>
                        </p>
                    </div>
                </div>

                {{-- Liens --}}
                <div class="big-column col-xl-8 col-lg-9 col-md-12">
                    <div class="row">

                        <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4 class="widget-title">Atsoubi</h4>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="{{ route('frontoffice.home') }}">Accueil</a></li>
                                        <li><a href="{{ route('frontoffice.home') }}#services">Accompagnement</a></li>
                                        <li><a href="{{ route('frontoffice.home') }}#process">Étapes</a></li>
                                        <li><a href="{{ route('frontoffice.home') }}#testimonials">Témoignages</a></li>
                                        <li><a href="{{ route('frontoffice.home') }}#contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4 class="widget-title">Services</h4>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="{{ route('frontoffice.home') }}#services">Contrat pour
                                                l’Allemagne</a></li>
                                        <li><a href="{{ route('frontoffice.home') }}#services">Dossier & Visa</a></li>
                                        <li><a href="{{ route('frontoffice.home') }}#services">Orientation & Suivi</a>
                                        </li>
                                        <li><a href="{{ route('frontoffice.home') }}#contact">Pré-évaluation</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4 class="widget-title">Pour les entreprises</h4>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="{{ route('frontoffice.home') }}#contact">Devenir partenaire</a>
                                        </li>
                                        <li><a href="{{ route('frontoffice.home') }}#process">Notre processus</a></li>
                                        <li><a href="{{ route('frontoffice.home') }}#testimonials">Résultats</a></li>
                                        <li><a href="{{ route('frontoffice.home') }}#contact">Demander un échange</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4 class="widget-title">Légal</h4>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="#">Conditions d’utilisation</a></li>
                                        <li><a href="#">Politique de confidentialité</a></li>
                                        <li><a href="#">Mentions légales</a></li>
                                        <li><a href="{{ route('frontoffice.home') }}#contact">Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="outer-box">
                <div class="copyright-text">
                    © {{ date('Y') }} <a href="{{ route('frontoffice.home') }}">Atsoubi</a>. Tous droits réservés.
                </div>

                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="fa fa-angle-up"></span>
    </div>
</footer>
<!-- End Main Footer -->
