<?php include('includes/header--page.php'); ?>

    <main class="c-page">
        <section class="container-fluid p-0 d-flex">
            <div class="c-page__img natural" style="background-image: url('assets/img/banner-covid.jpg');"></div>

            <div class="h-100 w-100 d-flex c-page__container">

                <div class="container">

                    <div class="row d-flex justify-content-end">

                        <div class="col-xl-6">  

                            <h1 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Juntos somos mais fortes</h1>
                            <h2 class="mb-4 fs-1 fw-bold col-xl-6 text-secondary">Um trabalho compartilhado</h2>

                            <div class="row">
                                <div class="col-xl-8">
                                    <p class="mb-5 fs-4 text-black-50">Entenda as medidas contra o covid, que estão sendo tomadas nos países e nossas preocupações.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-9 fs-4">
                                    <p class="mb-5">Relatamos algumas das medidas que serão tomadas para prevenir a propagação do vírus COVID-19 e trabalhamos com as medidas necessárias para uma viagem segura.</p> 

                                    <p class="mb-5">No momento não existe um cadastro pré-determinado para todos os estados do Brasil, porém cada estado está tomando suas próprias medidas e protocolos de segurança sanitária.</p>

                                    <p class="mb-5">Por este motivo, se você precisar de mais informações sobre um provedor específico, entre em contato conosco e enviaremos o que você precisa o mais breve possível.</p>

                                    <a class="text-primary fw-500 d-flex align-items-center text-decoration-none">Conheça as medidas <span class="icon-arrow-right fs-4 fw-bold ms-2"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="pt-5" id="medidas">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">

                        <div class="col-xl-4">
                            <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Medidas contra o Covid</h2>
                            <h3 class="mb-2 fs-3 fw-bold text-secondary mb-4">Entenda as medidas que estão sendo tomadas!</h3>
                            <p class="text-black-50">Alguns exemplos das medidas que serão tomadas quando as atividades voltarem gradualmente</p>
                        </div>
                        
                        <ul class="nav nav-tabs d-flex justify-content-between mt-5">
                            <li class="nav-item">
                                <button class="nav-link active" id="hospedagem-tab" data-bs-toggle="tab" data-bs-target="#hospedagem" type="button" role="tab" aria-controls="hospedagem" aria-selected="true">
                                    <span class="icon icon-hotel"></span>Hospedagem
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="atracoes-tab" data-bs-toggle="tab" data-bs-target="#atracoes" type="button" role="tab" aria-controls="atracoes" aria-selected="false">
                                    <span class="icon icon-hotel"></span>Atrações Turística
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="transporte-tab" data-bs-toggle="tab" data-bs-target="#transporte" type="button" role="tab" aria-controls="transporte" aria-selected="false">
                                    <span class="icon icon-transfer"></span>Transporte Turistico
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="agencias-tab" data-bs-toggle="tab" data-bs-target="#agencias" type="button" role="tab" aria-controls="agencias" aria-selected="false">
                                    <span class="icon icon-map"></span>Agências e Operadoras
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="gastronomia-tab" data-bs-toggle="tab" data-bs-target="#gastronomia" type="button" role="tab" aria-controls="gastronomia" aria-selected="false">
                                    <span class="icon icon-map"></span>Gastronomia
                                </button>
                            </li>
                        </ul>
                    
                    </div>
                </div>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="hospedagem" role="tabpanel" aria-labelledby="home-tab">
                    
                    <!-- Slider main container -->
                    <div class="swiper-container c-content-carousel JS__content-carousel">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">

                                <div class="c-content-carousel__img" style="background-image:url('assets/img/carousel-hospedagens.jpg')"></div>
                                <div class="c-content-carousel__content text-white bg-dark">

                                   

                                    <div class="col-xxl-5 col-xl-7">
                                        <span class="fs-3 fw-bold mb-3 d-block">Hospedagens</span>
                                        <p>As áreas de recepção, áreas comuns e circulação devem obedecer às seguintes normas</p>
                                    </div>

                                    <div class="col-xl-10">
                                        
                                        <div class="accordion accordion-flush mt-5 border-top border-bottom" id="accordionExample">
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Responsabilidade corporativa nos meios de hospedagem
                                                </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>


                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Comidas e bebidas nos alojamentos
                                                </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Limpeza dos quartos
                                                </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                    Áreas públicas
                                                </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                                    Espaço de eventos
                                                </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="c-content-carousel__buttons">
                            <div class="c-content-carousel__buttons__container">
                                <div class="swiper-button-prev">
                                    <span class="icon-arrow-left"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="icon-arrow-right"></span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="tab-pane fade" id="atracoes" role="tabpanel" aria-labelledby="profile-tab">
                   <!-- Slider main container -->
                   <div class="swiper-container c-content-carousel JS__content-carousel">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">

                                <div class="c-content-carousel__img" style="background-image:url('assets/img/carousel-hospedagens.jpg')"></div>
                                <div class="c-content-carousel__content text-white bg-dark">

                                   

                                    <div class="col-xl-5">
                                        <span class="fs-3 fw-bold mb-3 d-block">Hospedagens</span>
                                        <p>As áreas de recepção, áreas comuns e circulação devem obedecer às seguintes normas</p>
                                    </div>

                                    <div class="col-xl-10">
                                        
                                        <div class="accordion accordion-flush mt-5 border-top border-bottom" id="accordionExample">
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Responsabilidade corporativa nos meios de hospedagem
                                                </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>


                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Comidas e bebidas nos alojamentos
                                                </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Limpeza dos quartos
                                                </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                    Áreas públicas
                                                </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                                    Espaço de eventos
                                                </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="c-content-carousel__buttons">
                            <div class="c-content-carousel__buttons__container">
                                <div class="swiper-button-prev">
                                    <span class="icon-arrow-left"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="icon-arrow-right"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="transporte" role="tabpanel" aria-labelledby="contact-tab">
                    <!-- Slider main container -->
                    <div class="swiper-container c-content-carousel JS__content-carousel">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">

                                <div class="c-content-carousel__img" style="background-image:url('assets/img/carousel-hospedagens.jpg')"></div>
                                <div class="c-content-carousel__content text-white bg-dark">

                                   

                                    <div class="col-xl-5">
                                        <span class="fs-3 fw-bold mb-3 d-block">Hospedagens</span>
                                        <p>As áreas de recepção, áreas comuns e circulação devem obedecer às seguintes normas</p>
                                    </div>

                                    <div class="col-xl-10">
                                        
                                        <div class="accordion accordion-flush mt-5 border-top border-bottom" id="accordionExample">
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Responsabilidade corporativa nos meios de hospedagem
                                                </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>


                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Comidas e bebidas nos alojamentos
                                                </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Limpeza dos quartos
                                                </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                    Áreas públicas
                                                </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                                    Espaço de eventos
                                                </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="c-content-carousel__buttons">
                            <div class="c-content-carousel__buttons__container">
                                <div class="swiper-button-prev">
                                    <span class="icon-arrow-left"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="icon-arrow-right"></span>
                                </div>
                            </div>
                        </div>

                    </div>   
                </div>
                <div class="tab-pane fade" id="agencias" role="tabpanel" aria-labelledby="contact-tab">
                    <!-- Slider main container -->
                    <div class="swiper-container c-content-carousel JS__content-carousel">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">

                                <div class="c-content-carousel__img" style="background-image:url('assets/img/carousel-hospedagens.jpg')"></div>
                                <div class="c-content-carousel__content text-white bg-dark">

                                   

                                    <div class="col-xl-5">
                                        <span class="fs-3 fw-bold mb-3 d-block">Hospedagens</span>
                                        <p>As áreas de recepção, áreas comuns e circulação devem obedecer às seguintes normas</p>
                                    </div>

                                    <div class="col-xl-10">
                                        
                                        <div class="accordion accordion-flush mt-5 border-top border-bottom" id="accordionExample">
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Responsabilidade corporativa nos meios de hospedagem
                                                </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>


                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Comidas e bebidas nos alojamentos
                                                </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Limpeza dos quartos
                                                </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                    Áreas públicas
                                                </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                                    Espaço de eventos
                                                </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="c-content-carousel__buttons">
                            <div class="c-content-carousel__buttons__container">
                                <div class="swiper-button-prev">
                                    <span class="icon-arrow-left"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="icon-arrow-right"></span>
                                </div>
                            </div>
                        </div>

                    </div>   
                </div>
                <div class="tab-pane fade" id="gastronomia" role="tabpanel" aria-labelledby="contact-tab">
                    <!-- Slider main container -->
                    <div class="swiper-container c-content-carousel JS__content-carousel">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">

                                <div class="c-content-carousel__img" style="background-image:url('assets/img/carousel-hospedagens.jpg')"></div>
                                <div class="c-content-carousel__content text-white bg-dark">

                                   

                                    <div class="col-xl-5">
                                        <span class="fs-3 fw-bold mb-3 d-block">Hospedagens</span>
                                        <p>As áreas de recepção, áreas comuns e circulação devem obedecer às seguintes normas</p>
                                    </div>

                                    <div class="col-xl-10">
                                        
                                        <div class="accordion accordion-flush mt-5 border-top border-bottom" id="accordionExample">
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Responsabilidade corporativa nos meios de hospedagem
                                                </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>


                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Comidas e bebidas nos alojamentos
                                                </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Limpeza dos quartos
                                                </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                    Áreas públicas
                                                </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-white">
                                                <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                                    Espaço de eventos
                                                </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-dark text-white">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="c-content-carousel__buttons">
                            <div class="c-content-carousel__buttons__container">
                                <div class="swiper-button-prev">
                                    <span class="icon-arrow-left"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="icon-arrow-right"></span>
                                </div>
                            </div>
                        </div>

                    </div>   
                </div>
            </div>



        </section>  

        <section class="c-destaque c-destaque--reduced JS__destaque container text-light">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" style="background-image: url('assets/img/covid-diretrizes.jpg');">
                    <a class="container h-100 d-block text-reset" href="juntos-somos-mais-fortes.php">
                        <div class="row h-100 d-flex align-items-center text-white">
                            <div>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <h2 class="d-inline-block fs-6 text-secondary bg-light p-2 px-3 rounded-1 mb-3">Juntos ao combate</h2>
                                        <h3 class="mb-4 fs-3">Nossa resposta ao Covid-19</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <p>A um ano atrás o Covid mudou a forma como nos devemos relacionar, como tínhamos que evoluir.  Veja todas as modificações que fizemos para oferecer o bem-estar dos passageiros.</p>
                                        <span class="d-flex align-items-center text-reset text-uppercase fw-bolder c-destaque__link">
                                            Saber mais <svg xmlns="http://www.w3.org/2000/svg" width="41.29" height="20"><path d="M40.817 8.858L32.389.471a1.613 1.613 0 00-2.276 2.286l5.658 5.631H1.613a1.613 1.613 0 000 3.226h34.158l-5.658 5.631a1.613 1.613 0 002.276 2.286l8.428-8.387a1.614 1.614 0 000-2.286z" fill="#fff"/></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination container"></div>[

        </section>

      
    </main>

<?php include('includes/footer.php'); ?>
    

    
<script>

window.addEventListener("load", function (event) {
        
    //Scroll da Imagem 
    $stick = $('.c-page__img');
    $foot = $('#medidas');
    margin = 0;
    offtop = $stick.offset().top - margin;
    offbtm = $foot.offset().top - ( margin*2 + $stick.height() );

    $(window).scroll(function () {
    scrtop = $(window).scrollTop();
    if (scrtop > offtop && $stick.hasClass('natural')) {
        $stick.removeClass('natural').addClass('fixed').css('top', margin);
    }
    if (offtop > scrtop && $stick.hasClass('fixed')) {
        $stick.removeClass('fixed').addClass('natural').css('top', 'auto');
    }
    if (scrtop > offbtm && $stick.hasClass('fixed')) {
        $stick.removeClass('fixed').addClass('bottom').css('top', offbtm+margin);
    }
    if (offbtm > scrtop && $stick.hasClass('bottom')) {
        $stick.removeClass('bottom').addClass('fixed').css('top', margin);
    }
    });

});

</script>