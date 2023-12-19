@extends('layout.layout')

@section('title','Modalidade - Artes Marciais')

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
                        <h1 class="breadcumb-title">Detalhes de Artes Marciais</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">ARTES MARCIAIS</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Service Area 02
    ==============================-->
    <div class="service-details-area space-top space-extra-bottom overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="service-page-single">
                        <div class="page-img mb-50">
                            <img src="{{ asset('img/modalidade/artesmarciais.jpg') }}" alt="img">
                        </div>
                        <div class="page-content">
                            <h2 class="page-title">Artes Marciais</h2>
                            <p class="mb-30">Em nosso centro de Artes Marciais, desvende o fascinante mundo da disciplina física e mental, onde cada movimento é uma expressão de força, técnica e respeito. Oferecemos uma variedade de estilos de artes marciais, desde o clássico karatê até o dinâmico taekwondo, proporcionando aos praticantes uma jornada única de autodescoberta e aprimoramento pessoal. Nossos instrutores altamente qualificados não apenas compartilham a expertise técnica, mas também cultivam valores como perseverança, autocontrole e cortesia.</p>
                            <p class="mb-50">Seja você um iniciante curioso ou um praticante experiente, nosso espaço de Artes Marciais é um ambiente acolhedor para desafiar seus limites, desenvolver habilidades de autodefesa e promover uma mentalidade equilibrada. Junte-se a nós nessa jornada de crescimento, onde a tradição se encontra com a inovação, criando uma experiência enriquecedora que vai além das habilidades físicas, moldando caráter e confiança.</p>
                            <h3 class="page-subtitle mb-0">Porque escolher-nos?</h3>
                            <p>Existem vários motivos pelos quais você deve nos escolher:</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="service-wrap">
                                        <h6><i class="far fa-check me-2"></i> Diversificada gama de serviços:</h6>
                                        <p>Oferecemos uma ampla gama de serviços e programas de condicionamento físico para atender a diferentes níveis, interesses e objetivos de condicionamento físico. </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-wrap">
                                        <h6><i class="far fa-check me-2"></i> Conhecimento e Experiência:</h6>
                                        <p>Contamos com uma equipe de profissionais de fitness altamente qualificados e experientes que se dedicam a ajudá-lo...</p>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-25 mb-50">Oferecemos uma ampla gama de serviços e programas de condicionamento físico para atender a diferentes níveis, interesses e objetivos de condicionamento físico. Quer procure treino pessoal, aulas de fitness em grupo, treinos especializados ou orientação nutricional, temos opções que se adaptam às suas necessidades.</p>
                            <h3 class="page-subtitle mb-0">Porque escolher-nos?</h3>
                            <div class="service-page-list checklist mb-50" data-bg-src="{{ asset('img/modalidade/artesmarciais.jpg') }}">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Programa de treino qualificado.</li>
                                    <li><i class="far fa-check-circle"></i>Sobrecarga progressiva.</li>
                                    <li><i class="far fa-check-circle"></i>Concentre-se na forma adequada.</li>
                                    <li><i class="far fa-check-circle"></i>Seja consistente com o treinamento.</li>
                                    <li><i class="far fa-check-circle"></i>Ajuste a ingestão de calorias conforme necessário.</li>
                                </ul>
                            </div>
                            <div class="accordion-area mb-30 accordion" id="faqAccordion">

                                <div class="accordion-card style2 active">
                                    <div class="accordion-header" id="collapse-item-1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> Qual é o horário de funcionamento da academia?</button>
                                    </div>
                                    <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">A academia funciona de segunda à domingo e os horários são de acordo com o plano escolhido. </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"> Quais comodidades e instalações sua academia oferece?</button>
                                    </div>
                                    <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Temos as seguintes modalidades: Musculação, Alongamento, Artes Marciais, Cardio, Crossfit e Natação.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> Você fornece serviços de treinamento pessoal?</button>
                                    </div>
                                    <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Temos personal trainer para trabalhar direto com o aluno, de acordo com o plano escolhido. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Todos os Serviços</h3>
                            <ul>
                                <li>
                                    <a href="{{ url('/modalidade/musculacao') }}"><i class="fa-solid fa-arrow-right"></i>Musculação</a>
                                </li>
                                <li>
                                    <a href="{{ url('/modalidade/alongamento') }}"><i class="fa-solid fa-arrow-right"></i>Alongamento</a>
                                </li>
                                <li>
                                    <a href="{{ url('/modalidade/cardio') }}"><i class="fa-solid fa-arrow-right"></i>Cardio</a>
                                </li>
                                <li>
                                    <a href="{{ url('/modalidade/crossfit') }}"><i class="fa-solid fa-arrow-right"></i>Crossfit</a>
                                </li>
                                <li>
                                    <a href="{{ url('/modalidade/natacao') }}"><i class="fa-solid fa-arrow-right"></i>Natação</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_schedule">
                            <h3 class="widget_title">Horários</h3>
                            <ul>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Seg - Sex / Das 6h às 22h
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Sábado / Das 7h às 21h
                                </li>
                                <li class="unavailable">
                                    <i class="far fa-clock"></i>
                                    Domingo Fechado
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
