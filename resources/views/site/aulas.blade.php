@extends('layout.layout')

@section('title','Aulas')

@section('conteudo')

    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('img/aulas/banner01.png') }}">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Aulas</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">HOME</a></li>
                            <li class="active">AULAS</li>
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
                <h3 class="sub-title">Modalidades e Aulas</h3>
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
    <section class="cta-area space" data-bg-src="{{ asset('img/aulas/banner01.png') }}">
        <div class="container">
            <div class="row justify-content-lg-end justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="cta-wrap text-center text-lg-start">
                        <div class="title-area">
                            <span class="sub-title">Marque uma visita</span>
                            <h2 class="sec-title text-white">Faça uma visita gratuita
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
                <h2 class="sec-title">Conheça as Nossas Aulas</h2>
            </div>
            <div class="row global-carousel blog-slider" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false" data-md-dots="true">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/aulas/danca.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>Segunda-Feira</a>
                                <a href="blog.html"><i class="far fa-user"></i>Prof. André</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Dança</a></h3>
                            <p class="blog-text">As aulas de dança são uma ótima maneira de atrair públicos diferenciados e, até mesmo, de instigar as pessoas que fazem musculação a movimentar seu corpo de um jeito diferente.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/aulas/spinning.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>Terça-Feira</a>
                                <a href="blog.html"><i class="far fa-user"></i>Prof. Julia</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Spinning</a></h3>
                            <p class="blog-text">Normalmente, a prática conta com um clima bem animado e motivacional, com o uso de músicas e luzes. Os exercícios são ideais para melhorar o condicionamento físico, além de auxiliar no fortalecimento dos músculos inferiores.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/aulas/yoga.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>Quarta-Feira</a>
                                <a href="blog.html"><i class="far fa-user"></i>Prof. Marcos</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Yoga</a></h3>
                            <p class="blog-text">Um pouco diferente dos outros tipos de aulas coletivas de academia, o yoga é uma atividade menos intensa, mas que ainda traz inúmeros benefícios para a saúde. É uma excelente opção para quem deseja diminuir o estresse, aliviar a ansiedade, melhorar o equilíbrio e a elasticidade do corpo.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/aulas/ginastica.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>Quinta-Feira</a>
                                <a href="blog.html"><i class="far fa-user"></i>Prof. André</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Ginástica</a></h3>
                            <p class="blog-text">A ginástica coletiva é um modelo de atividade física que costuma ser menos cansativo, mas que ajuda a aquecer o corpo, alongar e trabalhar diferentes músculos. Para isso, reúne uma série de movimentos praticados regularmente para desenvolver flexibilidade e elasticidade no corpo e nos membros.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/aulas/jump.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>Sexta-Feira</a>
                                <a href="blog.html"><i class="far fa-user"></i>Prof. Marcos</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Jump</a></h3>
                            <p class="blog-text">Consiste no uso de um pequeno trampolim individual, no qual as alunas executam exercícios pulando. Por ser realizado na cama elástica, estimula o equilíbrio corporal com a postura correta. Além disso, fortalece diferentes músculos, como coxas, panturrilhas, glúteos, abdômen e lombar.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/aulas/pilates.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>Sábado</a>
                                <a href="blog.html"><i class="far fa-user"></i>Prof. Julia</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Pilates</a></h3>
                            <p class="blog-text">As aulas de pilates podem ser feitas tanto com o uso de aparelhos, quanto sem. Assim como o yoga, é ideal para quem deseja aliviar a tensão de dores crônicas, sem forçar muito as articulações.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
