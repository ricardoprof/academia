<!DOCTYPE html>
<html class="no-js" lang="pt-BR">

<head>

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - Academia Viva Bem</title>
    <meta name="description" content="Academia Viva Bem">
    <meta name="keywords" content="Academia Viva Bem">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logoVivaBem.svg') }}">
    <link rel="manifest" href="{{ asset('img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
    Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Kumbh+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!--==============================
    All CSS File
    ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <!-- Flip Slider -->
    <link rel="stylesheet" href="{{ asset('css/jquery.flipster.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!--==============================
     Preloader
    ==============================-->
    <div class="preloader ">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>

    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>

    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="/"><img src="{{ asset('img/logoVivaBem.svg') }}"
                                alt="@yield('title') - Academia Viva Bem"></a>
                    </div>
                    <p class="about-text">A Academia Viva Bem é mais do que um simples centro de condicionamento físico;
                        somos uma comunidade comprometida com a promoção da saúde e do bem-estar em todos os aspectos da
                        vida. Fundada em 2023, nossa academia tem se empenhado em oferecer um ambiente
                        acolhedor e motivador, onde pessoas de todas as idades e níveis de condicionamento físico podem
                        alcançar seus objetivos pessoais de forma sustentável e gratificante.</p>
                    <div class="social-btn">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Links Rápidos</h3>
                <ul class="menu">
                    <li><a href="{{ url('/sobre')}}">Sobre</a></li>
                    <li><a href="{{ url('/modalidade') }}">Modalidade</a></li>
                    <li><a href="{{ url('/aulas') }}">Aulas</a></li>
                    <li><a href="{{ url('/noticia') }}">Notícia</a></li>
                    <li><a href="{{ url('/contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="/"><img src="{{ asset('img/logoVivaBem.svg') }}" alt="Fitmas"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/sobre') }}">Sobre</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ url('/modalidade') }}">Modalidade</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/modalidade/musculacao') }}">Musculação</a></li>
                            <li><a href="{{ url('/modalidade/alongamento') }}">Alongamento</a></li>
                            <li><a href="{{ url('/modalidade/artes-marciais') }}">Artes Marciais</a></li>
                            <li><a href="{{ url('/modalidade/cardio') }}">Cardio</a></li>
                            <li><a href="{{ url('/modalidade/crossfit') }}">Crossfit</a></li>
                            <li><a href="{{ url('/modalidade/natacao') }}">Natação</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/aulas') }}">Aulas</a>
                    </li>
                    <li>
                        <a href="{{ url('/noticia') }}">Notícia</a>
                    </li>
                    <li>
                        <a href="{{ url('/contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
 Header Area
    ==============================-->
    <header class="nav-header header-layout2">
        <div class="header-top d-lg-block d-none">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-envelope"></i><a
                                        href="mailto:vivabem@tipi01.smpsistema.com.br">vivabem@tipi01.smpsistema.com.br</a></li>
                                <li><i class="far fa-clock"></i>Seg - Dom: 8.00 am - 23.00 pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <span class="me-3">Visite nossas redes sociais</span>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-start justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('img/logoVivaBem.svg') }}"
                                        alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto m-lg-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/sobre') }}">Sobre</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ url('/modalidade') }}">Modalidade</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/modalidade/musculacao') }}">Musculação</a></li>
                                            <li><a href="{{ url('/modalidade/alongamento') }}">Alongamento</a></li>
                                            <li><a href="{{ url('/modalidade/artes-marciais') }}">Artes Marciais</a></li>
                                            <li><a href="{{ url('/modalidade/cardio') }}">Cardio</a></li>
                                            <li><a href="{{ url('/modalidade/crossfit') }}">Crossfit</a></li>
                                            <li><a href="{{ url('/modalidade/natacao') }}">Natação</a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('/aulas') }}">Aulas</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/noticia') }}">Notícia</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contato') }}">Contato</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i
                                        class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-xxl-block d-none">
                            <div class="navbar-right-desc">
                                <i class="fas fa-phone-volume"></i><a href="tel:+5511988626603">(11) 988 626 603</a>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a href="{{ url('/contato') }}" class="btn style2 style-r0 d-xl-block d-none">
                                    Obtenha uma cotação
                                </a>
                                <button type="button" class="btn style-r0 btn-border3 sideMenuToggler">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="conteiner">
        @yield('conteudo')
    </main>

    <!--==============================
        Área do Footer
    ==============================-->
    <footer class="footer-wrapper footer-layout1">
        <div class="container">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="widget-about">
                                <div class="footer-logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('img/logoVivaBem.svg') }}" alt="Fitmas"></a>
                                </div>
                                <p class="about-text">Fundada em 2023, nossa academia tem se empenhado em oferecer um ambiente acolhedor e motivador.</p>
                                <div class="social-btn">
                                    <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/" tabindex="0"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Links Rápidos</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ url('/sobre') }}">Sobre Nós</a></li>
                                    <li><a href="{{ url('/modalidade') }}">Modalidades</a></li>
                                    <li><a href="{{ url('/aulas') }}">Aulas</a></li>
                                    <li><a href="{{ url('/noticia') }}">Notícias</a></li>
                                    <li><a href="{{ url('/contato') }}">Contato</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Galeria</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/modalidade/alongamento.jpg') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/modalidade/alongamento.jpg') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/modalidade/artesmarciais.jpg') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/modalidade/artesmarciais.jpg') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/modalidade/cardio.jpg') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/modalidade/cardio.jpg') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/modalidade/crossfit.jpg') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/modalidade/crossfit.jpg') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/modalidade/musculacao.jpg') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/modalidade/musculacao.jpg') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/modalidade/natacao.jpg') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/modalidade/natacao.jpg') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Receba boletim informativo</h3>
                            <p class="footer-text">Ganhe 10% de desconto na sua matrícula! Se apresse</p>
                            <form action="{{ route('contato.enviarnew') }}" method="POST" class="newsletter-form" id="formContato">
                                @csrf
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input class="form-control" name="emailnew" type="email" placeholder="E-mail" required="">
                                </div>
                                <input type="submit" value="Inscreva-se" class="btn style-r0 style2 btnInscrever">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto align-self-center"><p class="copyright-text text-center">© 2023 <a href="{{ url('/') }}">Viva Bem.</a> Todos os direitos reservados.</p></div>
                </div>
            </div>
        </div>
    </footer>

    <!--==============================
    Todos os arquivos Js
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- Flip Slider -->
    <script src="{{ asset('js/jquery.flipster.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('js/bmi.calculator.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>


</body>

</html>
