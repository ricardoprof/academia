@extends('layout.layout')

@section('title','Contato')

@section('conteudo')


<!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('img/hero/hero_bg_2_1.png') }}">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Contate-nos</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">CONTATE-NOS</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
        Contact Area
    ==============================-->
    <div class="contact-area space bg-smoke2">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="{{ asset('img/icon/contact-icon1.png') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Fale conosco 24/7</span>
                            <h6 class="contact-info_text"><a href="tel:+5511988626603">(11) 988 626 603</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="{{ asset('img/icon/contact-icon2.png') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Faça um orçamento</span>
                            <h6 class="contact-info_text"><a href="mailto:vivabem@tipi01.smpsistema.com.br">vivabem@tipi01.smpsistema.com.br</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="{{ asset('img/icon/contact-icon3.png') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Local</span>
                            <h6 class="contact-info_text"><a href="https://maps.app.goo.gl/QGnHReT52AcLWNAD6">Av Marechal Tito, 1500</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-sec2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0254648900814!2d-46.434437023727014!3d-23.495592259180924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1702058070545!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="container">
        <div class="contact-form-area space-bottom">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="contact-form-thumb">
                        <img src="assets/img/normal/contact1.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-8 bg-smoke2">
                    <div class="contact-form-wrap">
                        <div class="title-area">
                            <span class="sub-title">Contate nos
                            </span>
                            <h2 class="sec-title">Envie sua mensagem</h2>
                        </div>
                        {{-- {{ asset('email.php') }}  --}}

                        <form action="{{ route('contato.enviar') }}" method="POST" class="contact-form ajax-contact" id="formContato">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="name" id="name" placeholder="Seu nome">
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="email" id="email" placeholder="Seu E-mail">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control style-white" name="tel" id="tel" placeholder="Seu Telefone">
                                        <i class="far fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select name="subject" id="subject" class="form-select style-white">
                                            <option value="" disabled="" selected="" hidden="">Selecione o assunto</option>
                                            <option value="1">Aulas</option>
                                            <option value="2">Modalidades</option>
                                            <option value="3">Matrículas</option>
                                            <option value="4">Outros...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-12">
                                <textarea placeholder="Sua Mensagem" name="mensagem" id="contactForm" class="form-control style-white"></textarea>
                            </div>

                            <div class="form-btn col-12">
                                <input type="submit" value="Enviar via e-mail" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-bottom">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Siga nossas redes sociais
                </span>
                <h2 class="sec-title">Feed do Instagram</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/modalidade/alongamento.jpg') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/modalidade/alongamento.jpg') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/modalidade/artesmarciais.jpg') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/modalidade/artesmarciais.jpg') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/modalidade/cardio.jpg') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/modalidade/cardio.jpg') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/modalidade/crossfit.jpg') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/modalidade/crossfit.jpg') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/modalidade/musculacao.jpg') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/modalidade/musculacao.jpg') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/modalidade/natacao.jpg') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/modalidade/natacao.jpg') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/modalidade/alongamento.jpg') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/modalidade/alongamento.jpg') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/modalidade/artesmarciais.jpg') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/modalidade/artesmarciais.jpg') }}" alt="portfolio">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
