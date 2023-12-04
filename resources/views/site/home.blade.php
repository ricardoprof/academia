@extends('layout.layout')

@section('title', 'Home')

@section('conteudo')

    <!--==============================
            Hero Area
            ==============================-->
    <div class="hero-wrapper hero-2" id="hero">
        <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
            data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true"
            data-ml-arrows="true">

            <div class="hero-slider" data-bg-src="{{ asset('img/hero/hero_bg_2_1.png') }}">
                <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                    <img src="{{ asset('img/hero/hero_shape_2-1.png') }}" alt="img">
                </div>
                <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                    <img src="{{ asset('img/hero/hero_shape_2-2.png') }}" alt="img">
                </div>
                <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                    <img src="{{ asset('img/hero/hero_shape_2-3.png') }}" alt="img">
                </div>
                <div class="container">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-style2">
                                <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Aumente sua
                                    força</span>
                                <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">FORÇA</h1>
                                <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">e
                                    Viva Bem</span>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                    <a href="contact.html" class="btn style-r0 style2">Marque uma consulta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-slider" data-bg-src="{{ asset('img/hero/hero_bg_2_2.png') }}">
                <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                    <img src="{{ asset('img/hero/hero_shape_2-1.png') }}" alt="img">
                </div>
                <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                    <img src="{{ asset('img/hero/hero_shape_2-2.png') }}" alt="img">
                </div>
                <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                    <img src="{{ asset('img/hero/hero_shape_2-3.png') }}" alt="img">
                </div>
                <div class="container">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-style2">
                                <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Aumente
                                    sua</span>
                                <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">FORÇA</h1>
                                <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">academia
                                    Viva Bem</span>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                    <a href="contact.html" class="btn style-r0 style2">Marque uma visita</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="hero-arrow">
            <button data-slick-prev="#heroSlider2" class="slick-arrow slick-prev"><i
                    class="fa-solid fa-arrow-left"></i></button>
            <button data-slick-next="#heroSlider2" class="slick-arrow slick-next"><i
                    class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>



    <!--==============================
        Service Area
        ==============================-->
    <div class="service-bg2-area" data-bg-src="{{asset('img/bg/service-bg2.png')}}">
        <!--==============================
            BMI Area
            ==============================-->
        <div class="bmi-area-1 space">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="title-area mb-30">
                            <span class="sub-title">TESTE SEU IMC</span>
                            <h2 class="sec-title text-white fw-semibold">ÍNDICE DE MASSA CORPORAL</h2>
                            <p class="sec-text">O IMC é reconhecido como padrão internacional para avaliar o grau de sobrepeso e obesidade. É calculado dividindo o peso (em kg) pela altura ao quadrado (em metros).</p>
                        </div>
                        <div class="bmi-table mb-lg-0 mb-40">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">IMC</th>
                                        <th scope="col">ESTADO DE PESO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Abaixo de18.5 </th>
                                        <td>Subpeso</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18,5 a 24,9</th>
                                        <td>Saudável - Peso normal</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">25 a 29,9</th>
                                        <td>Sobrepeso</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">30 ou mais</th>
                                        <td>Obesidade</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="bmi-calculator-form">
                            <h4 class="form-title">RESERVE SEU LUGAR:</h4>

                            <form class="bmi-form" id="form" name="bmiCalc">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input for="weight" class="form-control style-border"
                                                placeholder="Informe seu peso (kg)" type="text" name="weight">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input for="height" class="form-control style-border"
                                                placeholder="Informe sua altura (metro e cm, separados por ponto)" type="text" name="height">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control style-border" name="age"
                                                id="age" placeholder="Idade">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-border" name="sex"
                                                id="sex" placeholder="Sexo">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input for="bmi_result" class="form-control style-border" placeholder="Seu IMC"
                                        type="text" name="bmi" readonly>
                                </div>
                                <div class="form-group">
                                    <input for="bmi_message" placeholder="Isso significa que?" class="form-control style-border"
                                        type="text" name="meaning" readonly>
                                </div>
                                <div class="btn style3">
                                    <input type="button" value="Calcular o IMC" onClick="calculateBMI()">
                                </div>
                                <div class="btn style3">
                                    <input type="button" value="Vamos conversar" onClick="calculateBMI-whats()">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
            Service Area 01
            ==============================-->
        <div class="service-area-1 space-bottom overflow-hidden">
            <div class="container">
                <div class="title-area">
                    <span class="sub-title">Nossos recursos</span>
                    <h2 class="sec-title text-white fw-semibold">SERVIÇOS QUE OFERECEMOS</h2>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row global-carousel service-slider-1 style2" data-slide-show="4" data-ml-slide-show="3"
                    data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
                    data-dots="false">

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/icon/musculacao.png') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="{{ url('/musculacao') }}">Musculação</a></h4>
                                <p class="service-card_text">Treinamento com pesos para fortalecimento muscular e desenvolvimento da
                                    resistência.</p>
                                <a href="{{ url('/musculacao') }}" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/icon/posio-de-ltus.png') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="{{ url('/yoga') }}">Yoga</a></h4>
                                <p class="service-card_text">Encontre equilíbrio e harmonia em nossas aulas de yoga. Combinando posturas, respiração e meditação, nossas práticas promovem bem-estar físico e mental. Descubra o poder transformador do Yoga em sua vida.</p>
                                <a href="{{ url('/yoga') }}" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/icon/zumba.png') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="{{ url('/zumba') }}">Zumba</a></h4>
                                <p class="service-card_text">Mergulhe na energia contagiante de nossas aulas de Zumba. Dança, diversão e condicionamento físico se unem para criar uma experiência única. Junte-se a nós e movimente-se ao ritmo da música.</p>
                                <a href="{{ url('/zumba') }}" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/icon/ciclismo.png') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="{{ url('/ciclismo') }}">Spinning/Ciclismo Indoor</a></h4>
                                <p class="service-card_text">Desfrute de uma intensa sessão de ciclismo indoor em nosso programa de Spinning. Queime calorias, melhore a resistência cardiovascular e divirta-se ao ritmo da música.</p>
                                <a href="{{ url('/ciclismo') }}" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/icon/pesos.png') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="{{ url('/crossfit') }}">CrossFit</a></h4>
                                <p class="service-card_text">Desafie-se com nosso programa de CrossFit, uma combinação de treino funcional de alta intensidade. Desenvolva força, resistência e flexibilidade em um ambiente motivador.</p>
                                <a href="{{ url('/crossfit') }}" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/icon/natao.png') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="{{ url('/natacao') }}">Natação</a></h4>
                                <p class="service-card_text">Aprimore suas habilidades aquáticas em nossas aulas de natação. Seja para iniciantes ou nadadores experientes, oferecemos um ambiente propício para o desenvolvimento técnico e condicionamento físico.</p>
                                <a href="{{ url('/natacao') }}" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="sec-shape2-bottom">
            <img src="{{ asset('img/bg/sec-shape2-top.png')}}" alt="img">
        </div>
    </div>


        <!--==============================
    schedule Area  
    ==============================-->
    <div class="schedule-area-1 space vivabem">
        <div class="container container2">
            <div class="title-area text-center">
                <span class="sub-title">NOSSAS AULAS</span>
                <h2 class="sec-title fw-semibold">NOSSO CRONOGRAMA DE TREINAMENTO</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab-1">
                        <div class="filter-menu-active mb-50 text-center">
                            <button data-filter=".cat1" class="active btn style4 style-r0" type="button">TODOS</button>
                            <button class="btn style4 style-r0" data-filter=".cat2" type="button">CARDIO</button>
                            <button class="btn style4 style-r0" data-filter=".cat3" type="button">ACADEMIA ABERTA</button>
                            <button class="btn style4 style-r0" data-filter=".cat4" type="button">CORPO TODO</button>
                            <button class="btn style4 style-r0" data-filter=".cat5" type="button">CROSSFIT</button>
                        </div>
                        <div class="filter-active-cat1">
                            <div class="filter-item cat1">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">SEGUNDA-FEIRA</th>
                                                <th scope="col">TERÇA-FEIRA</th>
                                                <th scope="col">QUARTA-FEIRA</th>
                                                <th scope="col">QUINTA-FEIRA</th>
                                                <th scope="col">SEXTA-FEIRA</th>
                                                <th scope="col">SÁBADO</th>
                                                <th scope="col">DOMINGO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat2">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense <br>
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat3">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat4">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat5">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
