<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>FOM Simulation</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

	    <link rel="icon" type="image/png" href="{{ asset('assethome/images/icon.png') }}"/>

        <link href="{{ asset('assethome/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assethome/css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('assethome/css/templatemo-topic-listing.css') }}" rel="stylesheet">
    <!--

    TemplateMo 590 topic listing

    https://templatemo.com/tm-590-topic-listing

    -->
    </head>

    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <i class="bi-back"></i>
                        <span>FOM-Sim</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Accueil</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">A Propos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Comment ça marche ?</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">FAQs</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact</a>
                            </li> --}}

                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="{{route('login')}}" alt="LOGIN" class="navbar-icon bi-person smoothscroll"></a>
                        </div>
                    </div>
                </div>
            </nav>


            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Découvrir. Simuler. Entreprendre</h1>

                            <h6 class="text-center">La plateforme web pour simuler vos processus industriels de manière simple et intuitive</h6>

                            {{-- <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1">

                                    </span>

                                    <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Design, Code, Marketing, Finance ..." aria-label="Search">

                                    <button type="submit" class="form-control">Search</button>
                                </div>
                            </form> --}}
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="#">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Simulation</h5>

                                            <p class="mb-0">Notre plateforme web de simulation de processus industriels vous permet d'utiliser nos modèles prédéfinis. Notre plateforme est facile à utiliser et vous permet de visualiser vos simulations.</p>
                                        </div>

                                        {{-- <span class="badge bg-design rounded-pill ms-auto">14</span> --}}
                                    </div>

                                    <img src="{{ asset('assethome/images/process.jpg')}}" height="40px" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="{{ asset('assethome/images/businesswoman-using-tablet-analysis.jpg')}}" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Analyse</h5>

                                            <p class="text-white">
                                                <ul class="text-white">
                                                    <li class="text-white"> Simuler vos processus industriels avant de les mettre en œuvre</li>
                                                    <li class="text-white"> Identifier les risques potentiels et les points de défaillance</li>
                                                    <li class="text-white"> Améliorer l'efficacité et la productivité de vos processus</li>
                                                    <li class="text-white"> Réduire les coûts</li>
                                                    <li class="text-white"> Améliorer la sécurité</li>

                                                </ul>
                                            </p>

                                            {{-- <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn More</a> --}}
                                        </div>

                                        {{-- <span class="badge bg-finance rounded-pill ms-auto">25</span> --}}
                                    </div>

                                    {{-- <div class="social-share d-flex">
                                        <p class="text-white me-4">Share:</p>

                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-twitter"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-facebook"></a>
                                            </li>Designms-auto"></a>
                                    </div> --}}

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="explore-section section-padding" id="section_2">
                <div class="container">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">A Propos de nous</h1>
                        </div>

                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Notre mission</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Nos valeurs</button>
                            </li>

                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Finance</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Music</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Education</button>
                            </li> --}}
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Améliorer l'efficacité</h5>

                                                            <p class="mb-0  text-justify">La simulation peut être utilisée pour identifier les goulots d'étranglement et les points de défaillance dans les processus industriels.</p>
                                                        </div>

                                                        {{-- <span class="badge bg-design rounded-pill ms-auto">14</span> --}}
                                                    </div>

                                                    <img src="{{ asset('assethome/images/topics/undraw_Remote_design_team_re_urdx.png') }}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Améliorer la productivité</h5>

                                                                <p class="mb-0 text-justify">La simulation peut être utilisée pour tester de nouvelles configurations de processus et de nouveaux équipements</p>
                                                        </div>

                                                        {{-- <span class="badge bg-design rounded-pill ms-auto">75</span> --}}
                                                    </div>

                                                    <img src="{{ asset('assethome/images/topics/undraw_Redesign_feedback_re_jvm0.png')}}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Améliorer la sécurité</h5>

                                                                <p class="mb-0 text-justify">La simulation peut être utilisée pour identifier les risques potentiels et les points de défaillance dans les processus industriels.</p>
                                                        </div>

                                                        {{-- <span class="badge bg-design rounded-pill ms-auto">100</span> --}}
                                                    </div>

                                                    <img src="{{ asset('assethome/images/topics/colleagues-working-cozy-office-medium-shot.png')}}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.html">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">L'innovation</h5>

                                                                <p class="mb-0 text-justify">Nous nous engageons à innover et à développer de nouvelles technologies de simulation.</p>
                                                            </div>

                                                            {{-- <span class="badge bg-advertising rounded-pill ms-auto">30</span> --}}
                                                        </div>

                                                        <img src="{{ asset('assethome/images/topics/undraw_online_ad_re_ol62.png')}}" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.html">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">L'excellence</h5>

                                                                <p class="mb-0 text-justify">Nous nous engageons à fournir à nos clients les meilleurs outils et ressources de simulation disponibles.</p>
                                                            </div>

                                                            {{-- <span class="badge bg-advertising rounded-pill ms-auto">65</span> --}}
                                                        </div>

                                                        <img src="{{ asset('assethome/images/topics/undraw_Group_video_re_btu7.png')}}" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.html">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Le service client</h5>

                                                                <p class="mb-0 text-justify">Nous nous engageons à fournir à nos clients un service client de premier ordre.</p>
                                                            </div>

                                                            {{-- <span class="badge bg-advertising rounded-pill ms-auto">50</span> --}}
                                                        </div>

                                                        <img src="{{ asset('assethome/images/topics/undraw_viral_tweet_gndb.png')}}" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                  </div>

                                <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Investment</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                                    </div>

                                                    <img src="{{ asset('assethome/images/topics/undraw_Finance_re_gnv2.png')}}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="custom-block custom-block-overlay">
                                                <div class="d-flex flex-column h-100">
                                                    <img src="{{ asset('assethome/images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg')}}" class="custom-block-image img-fluid" alt="">

                                                    <div class="custom-block-overlay-text d-flex">
                                                        <div>
                                                            <h5 class="text-white mb-2">Finance</h5>

                                                            <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis</p>

                                                            <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                                        </div>

                                                        <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                                    </div>

                                                    <div class="social-share d-flex">
                                                        <p class="text-white me-4">Share:</p>

                                                        <ul class="social-icon">
                                                            <li class="social-icon-item">
                                                                <a href="#" class="social-icon-link bi-twitter"></a>
                                                            </li>

                                                            <li class="social-icon-item">
                                                                <a href="#" class="social-icon-link bi-facebook"></a>
                                                            </li>

                                                            <li class="social-icon-item">
                                                                <a href="#" class="social-icon-link bi-pinterest"></a>
                                                            </li>
                                                        </ul>

                                                        <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                                    </div>

                                                    <div class="section-overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Composing Song</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-music rounded-pill ms-auto">45</span>
                                                    </div>

                                                    <img src="{{ asset('assethome/images/topics/undraw_Compose_music_re_wpiw.png')}}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Online Music</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-music rounded-pill ms-auto">45</span>
                                                    </div>

                                                    <img src="{{ asset('assethome/images/topics/undraw_happy_music_g6wc.png')}}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Podcast</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-music rounded-pill ms-auto">20</span>
                                                    </div>

                                                    <img src="{{ asset('assethome/images/topics/undraw_Podcast_audience_re_4i5q.png')}}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Graduation</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">80</span>
                                                    </div>

                                                    <img src="{{ asset('assethome/images/topics/undraw_Graduation_re_gthn.png')}}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Educator</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="{{ asset('assethome/images/topics/undraw_Educator_re_ju47.png')}}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </section>


            <section class="timeline-section section-padding" id="section_3">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">Comment ça marche?</h1>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>

                                    <li>
                                        <h4 class="text-white mb-3">Créer votre modèle</h4>

                                        <p class="text-white">La première étape consiste à créer votre modèle de simulation. Pour ce faire, vous pouvez utiliser notre interface de simulation basée sur des blocs glisser-déposer. Notre interface est facile à utiliser et vous permet de créer des modèles complexes sans avoir à écrire de code.</p>

                                        <div class="icon-holder">
                                          <i class="bi-search"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Exécuter votre simulation</h4>

                                        <p class="text-white">Une fois que vous avez créé votre modèle, vous pouvez l'exécuter pour voir comment il se comporte. Notre plateforme vous permet d'exécuter votre simulation en temps réel ou en accéléré. Vous pouvez également modifier les paramètres de votre simulation pour voir comment cela affecte le comportement du modèle.</p>

                                        <div class="icon-holder">
                                          <i class="bi-bookmark"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Analyser les résultats</h4>

                                        <p class="text-white">Une fois que vous avez exécuté votre simulation, vous pouvez analyser les résultats pour identifier les goulots d'étranglement et les points de défaillance dans votre processus. Vous pouvez également utiliser les résultats de votre simulation pour tester de nouvelles configurations de processus et de nouveaux équipements.</p>

                                        <div class="icon-holder">
                                          <i class="bi-book"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- <div class="col-12 text-center mt-5">
                            <p class="text-white">
                                Want to learn more?
                                <a href="#" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                            </p>
                        </div> --}}
                    </div>
                </div>
            </section>


            <section class="faq-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Foire Aux Questions</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-5 col-12">
                            <img src="{{ asset('assethome/images/faq.jpg')}}" class="img-fluid" alt="FAQs">
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Quel est le potentiel de croissance ?
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Enfin, vous devez vous assurer que votre entreprise a le potentiel de croître. Vous devez vous assurer qu'il existe un marché pour votre produit ou service, que la concurrence est faible, que le besoin est important et que le coût de démarrage est abordable.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Quelle est ma zone de compétence ?
                                    </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Il est également important de choisir une idée de business dans laquelle vous avez des <strong>compétences</strong>. Cela vous permettra de démarrer votre entreprise plus facilement et de mieux réussir.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Y a-t-il des garanties sur les matières premières ?
                                    </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Garantie de qualité : cette garantie couvre les défauts de qualité des matières premières. Si les matières premières ne sont pas de qualité acceptable, le fournisseur peut les remplacer ou rembourser le client.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding section-bg" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Entrer en contact</h2>
                        </div>

                        <div class="mapouter col-lg-5 col-12 mb-4 mb-lg-0">
                            <div class="gmap_canvas">
                                <iframe width="770" height="370" id="gmap_canvas" src="https://maps.google.com/maps?q=enset douala&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <br><style>.mapouter{position:relative;text-align:right;height:510px;width:770px;}</style><a href="https://embedgooglemap.2yu.co">Enset, University of Douala</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:510px;width:770px;}</style>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                            <h4 class="mb-3">Siège social</h4>

                            <p>Cameroun &amp;, Douala, ENSET</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Phone</span>

                                <a href="tel: 305-240-9671" class="site-footer-link">
                                    677024546
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:info@company.com" class="site-footer-link">
                                    info@company.com
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
            </section>
        </main>

<footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="{{ route('home') }}">
                            <i class="bi-back"></i>
                            <span>FOM-Sim</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Ressources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Accueil</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Comment ça marche ?</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">FAQs</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Information</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 677024546" class="site-footer-link">
                                677024546
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">

                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2023 Simulation Process. All rights reserved.
                        <br><br>Design: <a rel="nofollow" href="http://fed-technology.com" target="_blank"></a> Distribution <a href="http://fed-technology.com"> FED</a></p>

                    </div>

                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('assethome/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assethome/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assethome/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('assethome/js/click-scroll.js') }}"></script>
        <script src="{{ asset('assethome/js/custom.js') }}"></script>

    </body>
</html>
