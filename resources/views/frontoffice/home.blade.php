@extends('frontoffice.layouts.app')

@section('title', 'Atsoubi | Contrat & Études en Allemagne')

@section('content')

    <!-- Banner Section-->
    <section class="banner-section">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInUp" data-wow-delay="1000ms">
                        <div class="title-box">
                            <h3>
                                Réalisez votre projet
                                <span class="colored">Allemagne</span><br>
                                avec un contrat + accompagnement complet
                            </h3>
                            <div class="text">
                                Atsoubi accompagne les étudiants pour trouver une opportunité (contrat / formation),
                                préparer le dossier et réussir les étapes jusqu’au départ.
                            </div>
                        </div>

                        <!-- Lead Form -->
                        <div class="job-search-form">
                            <form method="post" action="#">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                        <span class="icon flaticon-user"></span>
                                        <input type="text" name="full_name" placeholder="Nom complet" required>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-12 col-sm-12 location">
                                        <span class="icon flaticon-email-3"></span>
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-12 col-sm-12 btn-box">
                                        <button type="submit" class="theme-btn btn-style-one">
                                            <span class="btn-title">Pré-évaluation gratuite</span>
                                        </button>
                                    </div>

                                    <div class="form-group col-12 mt-2">
                                        <small style="opacity:.85;display:block;">
                                            Réponse sous 24h • Pré-évaluation gratuite • Accompagnement étape par étape
                                        </small>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Lead Form -->

                        <!-- Popular Search (Quick tags) -->
                        <div class="popular-searches">
                            <span class="title">Profil recherché :</span>
                            <a href="#">Étudiants</a>,
                            <a href="#">Bac +</a>,
                            <a href="#">Motivés</a>,
                            <a href="#">Langue allemande</a>,
                            <a href="#">Dossier sérieux</a>
                        </div>
                        <!-- End Popular Search -->
                    </div>
                </div>

                <div class="image-column col-lg-5 col-md-12">
                    <div class="image-box">
                        <figure class="main-image wow fadeIn" data-wow-delay="500ms">
                            <img src="{{ asset('assets/frontoffice/images/resource/banner-img-1.png') }}" alt="Atsoubi Allemagne">
                        </figure>

                        <!-- Info Block One -->
                        <div class="info_block anm wow fadeIn" data-wow-delay="1000ms" data-speed-x="2" data-speed-y="2">
                            <span class="icon flaticon-email-3"></span>
                            <p>Pré-évaluation<br>gratuite</p>
                        </div>

                        <!-- Info Block Two -->
                        <div class="info_block_two anm wow fadeIn" data-wow-delay="2000ms" data-speed-x="1" data-speed-y="1">
                            <p>Accompagnement complet</p>
                            <div class="image">
                                <img src="{{ asset('assets/frontoffice/images/resource/multi-peoples.png') }}" alt="">
                            </div>
                        </div>

                        <!-- Info Block Three -->
                        <div class="info_block_three anm wow fadeIn" data-wow-delay="1500ms" data-speed-x="4" data-speed-y="4">
                            <span class="icon flaticon-briefcase"></span>
                            <p>Contrat / Formation</p>
                            <span class="sub-text">Allemagne</span>
                            <span class="right_icon fa fa-check"></span>
                        </div>

                        <!-- Info Block Four -->
                        <div class="info_block_four anm wow fadeIn" data-wow-delay="2500ms" data-speed-x="3" data-speed-y="3">
                            <span class="icon flaticon-file"></span>
                            <div class="inner">
                                <p>Dossier & Visa</p>
                                <span class="sub-text">Étapes guidées</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section-->

    <!-- Services / Categories (re-used section design) -->
    <section class="job-categories">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Notre accompagnement Atsoubi</h2>
                <div class="text">Un parcours clair pour maximiser vos chances d’aller en Allemagne.</div>
            </div>

            <div class="row wow fadeInUp">

                <div class="category-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="content">
                            <span class="icon flaticon-search-1"></span>
                            <h4><a href="#">Pré-évaluation</a></h4>
                            <p>Analyse de votre profil, niveau, objectifs, et faisabilité.</p>
                        </div>
                    </div>
                </div>

                <div class="category-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="content">
                            <span class="icon flaticon-file"></span>
                            <h4><a href="#">Préparation du dossier</a></h4>
                            <p>CV, motivation, documents, traductions et organisation.</p>
                        </div>
                    </div>
                </div>

                <div class="category-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="content">
                            <span class="icon flaticon-briefcase"></span>
                            <h4><a href="#">Recherche d’opportunité</a></h4>
                            <p>Orientation vers contrats / formations selon votre profil.</p>
                        </div>
                    </div>
                </div>

                <div class="category-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="content">
                            <span class="icon flaticon-email-3"></span>
                            <h4><a href="#">Suivi & communication</a></h4>
                            <p>Étapes, rendez-vous, relances et informations importantes.</p>
                        </div>
                    </div>
                </div>

                <div class="category-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="content">
                            <span class="icon flaticon-map-locator"></span>
                            <h4><a href="#">Démarches Allemagne</a></h4>
                            <p>Conseils, exigences, et préparation administrative.</p>
                        </div>
                    </div>
                </div>

                <div class="category-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="content">
                            <span class="icon flaticon-rocket-ship"></span>
                            <h4><a href="#">Accompagnement jusqu’au départ</a></h4>
                            <p>Checklist, organisation finale et conseils pratiques.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Process Section (re-used job cards style) -->
    <section class="job-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Comment ça marche ?</h2>
                <div class="text">Un parcours simple en 4 étapes.</div>
            </div>

            <div class="row wow fadeInUp">

                <div class="job-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="content">
                            <span class="company-logo">
                                <img src="{{ asset('assets/frontoffice/images/resource/company-logo/1-1.png') }}" alt="">
                            </span>
                            <h4><a href="#">1) Pré-évaluation</a></h4>
                            <ul class="job-info">
                                <li><span class="icon flaticon-user"></span> Profil & objectifs</li>
                                <li><span class="icon flaticon-clock-3"></span> Rapide</li>
                                <li><span class="icon flaticon-email-3"></span> Retour sous 24h</li>
                                <li><span class="icon flaticon-map-locator"></span> À distance</li>
                            </ul>
                            <ul class="job-other-info">
                                <li class="time">Gratuite</li>
                                <li class="privacy">Confidentiel</li>
                                <li class="required">Important</li>
                            </ul>
                            <button class="bookmark-btn" type="button"><span class="flaticon-bookmark"></span></button>
                        </div>
                    </div>
                </div>

                <div class="job-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="content">
                            <span class="company-logo">
                                <img src="{{ asset('assets/frontoffice/images/resource/company-logo/1-2.png') }}" alt="">
                            </span>
                            <h4><a href="#">2) Dossier complet</a></h4>
                            <ul class="job-info">
                                <li><span class="icon flaticon-file"></span> Documents & organisation</li>
                                <li><span class="icon flaticon-briefcase"></span> CV & motivation</li>
                                <li><span class="icon flaticon-clock-3"></span> Étapes guidées</li>
                                <li><span class="icon flaticon-email-3"></span> Suivi</li>
                            </ul>
                            <ul class="job-other-info">
                                <li class="time">Clair</li>
                                <li class="privacy">Sérieux</li>
                                <li class="required">Complet</li>
                            </ul>
                            <button class="bookmark-btn" type="button"><span class="flaticon-bookmark"></span></button>
                        </div>
                    </div>
                </div>

                <div class="job-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="content">
                            <span class="company-logo">
                                <img src="{{ asset('assets/frontoffice/images/resource/company-logo/1-3.png') }}" alt="">
                            </span>
                            <h4><a href="#">3) Opportunité (contrat / formation)</a></h4>
                            <ul class="job-info">
                                <li><span class="icon flaticon-search-1"></span> Matching profil</li>
                                <li><span class="icon flaticon-map-locator"></span> Allemagne</li>
                                <li><span class="icon flaticon-clock-3"></span> Process</li>
                                <li><span class="icon flaticon-briefcase"></span> Orientation</li>
                            </ul>
                            <ul class="job-other-info">
                                <li class="time">Ciblé</li>
                                <li class="privacy">Encadré</li>
                                <li class="required">Sérieux</li>
                            </ul>
                            <button class="bookmark-btn" type="button"><span class="flaticon-bookmark"></span></button>
                        </div>
                    </div>
                </div>

                <div class="job-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="content">
                            <span class="company-logo">
                                <img src="{{ asset('assets/frontoffice/images/resource/company-logo/1-4.png') }}" alt="">
                            </span>
                            <h4><a href="#">4) Démarches & départ</a></h4>
                            <ul class="job-info">
                                <li><span class="icon flaticon-file"></span> Dossier final</li>
                                <li><span class="icon flaticon-email-3"></span> Conseils & suivi</li>
                                <li><span class="icon flaticon-clock-3"></span> Planning</li>
                                <li><span class="icon flaticon-map-locator"></span> Installation</li>
                            </ul>
                            <ul class="job-other-info">
                                <li class="time">Accompagné</li>
                                <li class="privacy">Structuré</li>
                                <li class="required">Checklist</li>
                            </ul>
                            <button class="bookmark-btn" type="button"><span class="flaticon-bookmark"></span></button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="btn-box">
                <a href="#contact" class="theme-btn btn-style-one bg-blue">
                    <span class="btn-title">Commencer maintenant</span>
                </a>
            </div>
        </div>
    </section>
    <!-- End Process -->

    <!-- Testimonials -->
    <section class="testimonial-section">
        <div class="container-fluid">
            <div class="sec-title text-center">
                <h2>Témoignages</h2>
                <div class="text">Des étudiants accompagnés par Atsoubi.</div>
            </div>

            <div class="carousel-outer wow fadeInUp">
                <div class="testimonial-carousel owl-carousel owl-theme">

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <h4 class="title">Accompagnement clair</h4>
                            <div class="text">
                                J’ai compris les étapes, j’ai préparé mon dossier correctement et j’ai été guidé à chaque moment.
                            </div>
                            <div class="info-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/frontoffice/images/resource/testi-thumb-1.png') }}" alt="">
                                </div>
                                <h4 class="name">Étudiant</h4>
                                <span class="designation">Maroc</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <h4 class="title">Très pro</h4>
                            <div class="text">
                                Le suivi était rapide, et on sent que l’équipe maîtrise le processus.
                            </div>
                            <div class="info-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/frontoffice/images/resource/testi-thumb-2.png') }}" alt="">
                                </div>
                                <h4 class="name">Candidate</h4>
                                <span class="designation">Casablanca</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <h4 class="title">Étapes simplifiées</h4>
                            <div class="text">
                                Avant, j’étais perdu. Avec Atsoubi, j’ai eu une checklist et un plan clair.
                            </div>
                            <div class="info-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/frontoffice/images/resource/testi-thumb-3.png') }}" alt="">
                                </div>
                                <h4 class="name">Étudiant</h4>
                                <span class="designation">Rabat</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials -->

    <!-- Clients Section (optional logos) -->
    <section class="clients-section">
        <div class="sponsors-outer wow fadeInUp">
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontoffice/images/clients/1-1.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontoffice/images/clients/1-2.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontoffice/images/clients/1-3.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontoffice/images/clients/1-4.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontoffice/images/clients/1-5.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontoffice/images/clients/1-6.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontoffice/images/clients/1-7.png') }}" alt=""></a></figure></li>
            </ul>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column wow fadeInUp">
                        <div class="sec-title">
                            <h2>Atsoubi, votre partenaire pour l’Allemagne</h2>
                            <div class="text">
                                Notre objectif : vous guider clairement, éviter les erreurs, et maximiser vos chances
                                grâce à un accompagnement structuré (profil, dossier, opportunité, démarches).
                            </div>
                        </div>
                        <ul class="list-style-one">
                            <li>Suivi personnalisé</li>
                            <li>Checklist & plan d’action</li>
                            <li>Conseils pratiques et organisation</li>
                        </ul>
                        <a href="#contact" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Demander une pré-évaluation</span></a>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <figure class="image wow fadeInLeft">
                        <img src="{{ asset('assets/frontoffice/images/resource/image-2.jpg') }}" alt="">
                    </figure>

                    <div class="count-employers wow fadeInUp">
                        <div class="check-box"><span class="flaticon-tick"></span></div>
                        <span class="title">Process clair & structuré</span>
                        <figure class="image">
                            <img src="{{ asset('assets/frontoffice/images/resource/multi-logo.png') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="fun-fact-section">
                <div class="row">
                    <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="24">0</span>h</div>
                        <h4 class="counter-title">Réponse rapide</h4>
                    </div>

                    <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="4">0</span> étapes</div>
                        <h4 class="counter-title">Parcours simple</h4>
                    </div>

                    <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="100">0</span>%</div>
                        <h4 class="counter-title">Accompagnement humain</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Call To Action / Contact -->
    <section class="call-to-action" id="contact">
        <div class="auto-container">
            <div class="outer-box wow fadeInUp">
                <div class="content-column">
                    <div class="sec-title">
                        <h2>Prêt à commencer ?</h2>
                        <div class="text">
                            Déposez vos informations pour une pré-évaluation gratuite. <br>
                            Nous vous répondons rapidement avec les prochaines étapes.
                        </div>

                        <div class="job-search-form" style="margin-top:20px;">
                            <form method="post" action="#">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                        <span class="icon flaticon-user"></span>
                                        <input type="text" name="name" placeholder="Nom complet" required>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-12 col-sm-12 location">
                                        <span class="icon flaticon-email-3"></span>
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                        <span class="icon flaticon-briefcase"></span>
                                        <input type="text" name="level" placeholder="Niveau (Bac, Bac+2...)" required>
                                    </div>

                                    <div class="form-group col-12" style="margin-top:10px;">
                                        <textarea name="message" placeholder="Votre objectif (contrat/études), ville, niveau d’allemand..." style="height:120px;"></textarea>
                                    </div>

                                    <div class="form-group col-12 btn-box" style="margin-top:10px;">
                                        <button type="submit" class="theme-btn btn-style-one bg-blue">
                                            <span class="btn-title">Envoyer</span>
                                        </button>

                                        <a href="https://wa.me/212600000000" target="_blank" class="theme-btn btn-style-three" style="margin-left:10px;">
                                            WhatsApp
                                        </a>
                                    </div>

                                    <div class="form-group col-12 mt-2">
                                        <small style="opacity:.85;display:block;">
                                            Remplace le numéro WhatsApp par le tien : 2126XXXXXXXX.
                                        </small>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="image-column"
                     style="background-image: url('{{ asset('assets/frontoffice/images/resource/image-1.png') }}');">
                    <figure class="image">
                        <img src="{{ asset('assets/frontoffice/images/resource/image-1.png') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA -->

@endsection
