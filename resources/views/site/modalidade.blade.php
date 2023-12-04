@extends('layout.layout')

@section('title','Modalidade')

@section('conteudo')

    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('img/modalidade/banner01.png') }}">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Modalidades</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">HOME</a></li>
                            <li class="active">MODALIDADES</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Pricing plan Area
    ==============================-->
    <div class="pricing-area space">
        <div class="container">
            <div class="title-area text-center">
                <h3 class="sub-title">Modalidades</h3>
                <h2 class="sec-title">Conheça nossos planos</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-card_icon">
                            <img src="{{ asset('img/icon/picing-icon_1-1.svg') }}" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Plano Básico</h3>
                        <h4 class="pricing-card_price"><span class="currency">R$</span>99,99<span class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Acesso à academia durante horário comercial. Sem acesso a aulas especiais. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seg - Sex / Das 8h às 17h</li>
                                <li><i class="far fa-check-circle"></i>Musculação</li>
                                <li><i class="far fa-check-circle"></i>Atendimento coletivo</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento Pago</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Detalhes do plano</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card pricing-card_active">
                        <div class="pricing-card_icon">
                            <img src="{{ asset('img/icon/picing-icon_1-2.svg') }}" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Plano Premium</h3>
                        <h4 class="pricing-card_price"><span class="currency">R$</span>149,99<span class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Acesso ilimitado à academia e todas as aulas. Acompanhamento individual com instrutores. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seg - Sab / Das 6h às 22h</li>
                                <li><i class="far fa-check-circle"></i>Todos os Treinos</li>
                                <li><i class="far fa-check-circle"></i>Todas as Aulas</li>
                                <li><i class="far fa-check-circle"></i>Atendimento Coletivo</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Detalhes do plano</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-card_icon">
                            <img src="{{ asset('img/icon/picing-icon_1-3.svg') }}" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Plano Gold</h3>
                        <h4 class="pricing-card_price"><span class="currency">R$</span>199,99<span class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Acesso 24/7 à academia, incluindo aulas exclusivas. Treinos personalizados e nutricionista incluso. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Todos os dias e horários </li>
                                <li><i class="far fa-check-circle"></i>Todos os Treinos e Aulas</li>
                                <li><i class="far fa-check-circle"></i>Atendimento Individual</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento Gratuito</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Detalhes do plano</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Cta Area
    ==============================-->
    <section class="cta-area space" data-bg-src="{{ asset('img/modalidade/banner02.png') }}">
        <div class="container">
            <div class="row justify-content-lg-end justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="cta-wrap text-center text-lg-start">
                        <div class="title-area">
                            <span class="sub-title">Marque uma visita</span>
                            <h2 class="sec-title text-white">Obtenha uma visita gratuita
                                Agora Mesmo!</h2>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="btn style2">Marcar Visita</a>
                            <div class="about-info-wrap style3">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title text-white">Precisa de Ajuda?</p>
                                    <a class="about-info-link" href="tel:+551199999-9696">(11) 988 626 603</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="blog-area space">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="sec-title">Conheça as Modalidades</h2>
            </div>
            <div class="row global-carousel blog-slider" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false" data-md-dots="true">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/modalidade/musculacao.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>Segunda-Feira</a>
                                <a href="blog.html"><i class="far fa-user"></i>Prof. André</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Musculação</a></h3>
                            <p class="blog-text">Desenvolva sua força e esculpa seu corpo na nossa academia de musculação totalmente equipada, onde cada levantamento é um passo em direção aos seus objetivos fitness.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/modalidade/alongamento.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>Terça-Feira</a>
                                <a href="blog.html"><i class="far fa-user"></i>Prof. Julia</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Alongamento</a></h3>
                            <p class="blog-text">Liberte a flexibilidade do seu corpo e mente em nossas aulas de alongamento, criadas para promover bem-estar físico e mental através de movimentos suaves e conscientes.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/modalidade/artesmarciais.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>Quarta-Feira</a>
                                <a href="blog.html"><i class="far fa-user"></i>Prof. Marcos</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Artes Marciais</a></h3>
                            <p class="blog-text">Desperte o guerreiro interior e aprimore suas habilidades de autodefesa em nossas aulas de artes marciais, onde disciplina e respeito se encontram para criar uma jornada de crescimento pessoal.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/modalidade/cardio.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>Quinta-Feira</a>
                                <a href="blog.html"><i class="far fa-user"></i>Prof. André</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Cardio</a></h3>
                            <p class="blog-text">Transforme sua energia em resultados tangíveis com nossas sessões de cardio dinâmicas, projetadas para queimar calorias, fortalecer o coração e proporcionar uma explosão de vitalidade.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/modalidade/crossfit.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>Sexta-Feira</a>
                                <a href="blog.html"><i class="far fa-user"></i>Prof. Marcos</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Crossfit</a></h3>
                            <p class="blog-text">Entre em um novo nível de condicionamento físico total com nossas intensas sessões de crossfit, desafiando seus limites e promovendo um corpo funcional e resistente.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/modalidade/natacao.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>Sábado</a>
                                <a href="blog.html"><i class="far fa-user"></i>Prof. Julia</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Natação</a></h3>
                            <p class="blog-text">Mergulhe em um mundo de saúde e bem-estar com nossas aulas de natação, onde a técnica aprimorada e o condicionamento cardiovascular se encontram para criar uma experiência aquática única.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
