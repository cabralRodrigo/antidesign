
<?php include('includes/header.php') ?>


<main class="c-busca">
        
    <section class="c-banner c-banner--reduced-search">
        <?php include('includes/search-box--reduced.php') ?>

        <div class="swiper-container h-100 JS__banner">
            
            <div class="swiper-wrapper h-100">

                <div class="c-banner__item swiper-slide h-100 d-flex align-items-end" style="background-image: url('assets/img/banner-bali.jpg');">
                <div class="c-banner__background__overlay"></div>
                    <div class="container text-light">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-8 col-sm-8">
                                <h2 class="c-banner__title fw-bold fs-3">Bali.</h2>
                                <p>Uma das ilhas com um cenário inesquecível! Se você busca sol brilhante, praias e montanhas, esse é o lugar certo</p>
                                <a href="" class="c-banner__button d-flex align-items-center text-reset text-uppercase fw-bolder">
                                    Explorar <svg xmlns="http://www.w3.org/2000/svg" width="41.29" height="20"><path d="M40.817 8.858L32.389.471a1.613 1.613 0 00-2.276 2.286l5.658 5.631H1.613a1.613 1.613 0 000 3.226h34.158l-5.658 5.631a1.613 1.613 0 002.276 2.286l8.428-8.387a1.614 1.614 0 000-2.286z" fill="#fff"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="c-banner__item swiper-slide h-100 d-flex align-items-end" style="background-image: url('assets/img/reservas-banner.jpg');">
                <div class="c-banner__background__overlay"></div>
                    <div class="container text-light">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-xl-4">
                                <h2 class="c-banner__title fw-bold fs-3">Nusa Penida.</h2>
                                <p>Uma das ilhas com um cenário inesquecível! Se você busca sol brilhante, praias e montanhas, esse é o lugar certo</p>
                                <a href="" class="c-banner__button d-flex align-items-center text-reset text-uppercase fw-bolder">
                                    Explorar <svg xmlns="http://www.w3.org/2000/svg" width="41.29" height="20"><path d="M40.817 8.858L32.389.471a1.613 1.613 0 00-2.276 2.286l5.658 5.631H1.613a1.613 1.613 0 000 3.226h34.158l-5.658 5.631a1.613 1.613 0 002.276 2.286l8.428-8.387a1.614 1.614 0 000-2.286z" fill="#fff"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
            
        </div>

    </section>

    <section class="c-busca__container">
        <div class="container">

            <div class="row">

                <div class="col-xl-2 c-busca__container__controls mb-5">

                    <div class="row border-bottom py-3">


                       
                            <a class="c-busca__controls__item text-reset fs-16 text-secondary fw-500 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" href="#reserva" role="button" aria-expanded="false"
                                aria-controls="multiCollapseExample1">
                                Reserva
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397">
                                    <path data-name="Caminho 4"
                                        d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z"
                                        fill="#0e6a7a" /></svg>
                            </a>
                            <div class="collapse multi-collapse show" id="reserva">
                            <div class="mt-2">
                                <button
                                    class="btn btn-primary fs-6 fw-500 w-100 JS__reservar-toggle JS__reserva-next">#35080</button>
                            </div>
                            </div>



                    </div>

                    <div class="row border-bottom py-3">
                        

                            <a class="c-busca__controls__item text-reset fs-16 text-secondary fw-500 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" href="#preco" role="button" aria-expanded="false"
                                aria-controls="multiCollapseExample1">
                                Preço
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397">
                                    <path data-name="Caminho 4"
                                        d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z"
                                        fill="#0e6a7a" /></svg>
                            </a>


                            <div class="collapse multi-collapse show" id="preco">
                            <div class="mt-2">
                                <div class="c-busca__controls__price">
                                <output id="output" class="range-value fs-14">
                                       <span>Min: <b>R$ 300,00</b></span>
                                       <span>Max:  <b>R$ 750,00</b></span>
                                    </output>
                                    <div style="display: flex; justify-content: center; flex-wrap: wrap;">
                                    <div class="slider-price__container">
                                            <div class="slider-price__bar">
                                                <div class="slider-price__bullet" tabindex="0" aria-valuemax="75" aria-valuemin="0" aria-valuenow="25" draggable="false" role="slider" style="transform: translate(183px, -9px);">
                                                </div>
                                                <div class="slider-price__bullet" tabindex="0" aria-valuemax="100" aria-valuemin="25" aria-valuenow="75" draggable="false" role="slider" style="transform: translate(56px, -9px);">
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row border-bottom py-3">
                      

                            <a class="c-busca__controls__item text-reset fs-16 text-secondary fw-500 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#categoria" aria-expanded="false"
                                aria-controls="categoria">
                                Categoria
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397">
                                    <path data-name="Caminho 4"
                                        d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z"
                                        fill="#0e6a7a" /></svg>
                            </a>

                            <div class="collapse multi-collapse show" id="categoria">
                            <div class="mt-2">
                                <select class="form-select">
                                    <option value="">Tipo do Hotel</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        
                            <a class="c-busca__controls__item text-reset fs-16 text-secondary fw-500 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#hospedagem" aria-expanded="false"
                                aria-controls="hospedagem">
                                Hospedagem
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397">
                                    <path data-name="Caminho 4"
                                        d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z"
                                        fill="#0e6a7a" /></svg>
                            </a>

                            <div class="collapse multi-collapse show" id="hospedagem">
                            <div class="mt-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="hoteis-internos" />
                                    <label class="form-check-label" for="hoteis-internos">
                                        Hotéis Internos
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="omnibees" />
                                    <label class="form-check-label" for="omnibees">
                                        Omnibees
                                    </label>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row border-bottom py-3">
                      
                            <a class="c-busca__controls__item text-reset fs-16 text-secondary fw-500 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#reembolsavel" aria-expanded="false"
                                aria-controls="perfil-produto">
                                Reembolsável
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397">
                                    <path data-name="Caminho 4"
                                        d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z"
                                        fill="#0e6a7a" /></svg>
                            </a>

                            <div class="collapse multi-collapse show" id="reembolsavel">
                            <div class="mt-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="reembonsavel-check" />
                                    <label class="form-check-label" for="reembonsavel-check">
                                        Reembonsável
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="nao-reembolsavel" />
                                    <label class="form-check-label" for="nao-reembolsavel">
                                        Não Reembonsável
                                    </label>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row border-bottom py-3">
                        
                            <a class="c-busca__controls__item text-reset fs-16 text-secondary fw-500 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#perfil-produto" aria-expanded="false"
                                aria-controls="perfil-produto">
                                Perfil de Produto
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397">
                                    <path data-name="Caminho 4"
                                        d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z"
                                        fill="#0e6a7a" /></svg>
                            </a>

                            <div class="collapse multi-collapse show" id="perfil-produto">
                            <div class="mt-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="brasil-secreto" />
                                    <label class="form-check-label" for="brasil-secreto">
                                        Brasil secreto
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="clafisicacao-hoteis" />
                                    <label class="form-check-label" for="clafisicacao-hoteis">
                                        Classificação de Hoteis
                                    </label>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row border-bottom py-3">
                       
                            <a class="c-busca__controls__item text-reset fs-16 text-secondary fw-500 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#refeicoes" aria-expanded="false"
                                aria-controls="perfil-produto">
                                Refeições
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397">
                                    <path data-name="Caminho 4"
                                        d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z"
                                        fill="#0e6a7a" /></svg>
                                </span></a>

                            <div class="collapse multi-collapse show" id="refeicoes">
                            <div class="mt-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="todos" />
                                    <label class="form-check-label" for="todos">
                                        Todos
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="sistema-inclusive" />
                                    <label class="form-check-label" for="sistema-inclusive">
                                        Sistema Inclusive
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="sem-almoco" />
                                    <label class="form-check-label" for="sem-almoco">
                                        Sem Almoço
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="map-bb" />
                                    <label class="form-check-label" for="map-bb">
                                        Map - BB
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="fab-bb" />
                                    <label class="form-check-label" for="fab-bb">
                                        FAP - BB
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="bb" />
                                    <label class="form-check-label" for="bb">
                                        BB
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row border-bottom py-3">
                       
                            <a class="c-busca__controls__item text-reset fs-16 text-secondary fw-500 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#servicos" aria-expanded="false"
                                aria-controls="perfil-produto">
                                Serviços
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397">
                                    <path data-name="Caminho 4"
                                        d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z"
                                        fill="#0e6a7a" /></svg>
                            </a>

                            <div class="collapse multi-collapse show" id="servicos">
                            <div class="mt-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="aceita-pets" />
                                    <label class="form-check-label" for="aceita-pets">
                                        Aceita Pets
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="buzines-corporativo" />
                                    <label class="form-check-label" for="buzines-corporativo">
                                        Buzines & Corporativo
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="ecofriendly" />
                                    <label class="form-check-label" for="ecofriendly">
                                        Ecofriendly
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="economico" />
                                    <label class="form-check-label" for="economico">
                                        Economico
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="familiar" />
                                    <label class="form-check-label" for="familiar">
                                        Familiar
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="frente-a-praia" />
                                    <label class="form-check-label" for="frente-a-praia">
                                        Frente a Praia
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="grupos" />
                                    <label class="form-check-label" for="grupos">
                                        Grupos
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="indicado-jovens" />
                                    <label class="form-check-label" for="indicado-jovens">
                                        Indicado para Jovens
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="recomendado-journeys" />
                                    <label class="form-check-label" for="recomendado-journeys">
                                        Recomendado Journeys
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="safe-clean" />
                                    <label class="form-check-label" for="safe-clean">
                                        Safe & Clean
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="terrano-plano" />
                                    <label class="form-check-label" for="terrano-plano">
                                        Terreno Plano
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-9 offset-xl-1">

                    <div class="row">

                        <div class="col-xl-8 col-lg-12 mb-5">

                            <h2 class="d-inline-block fs-5 text-secondary px-0 mb-3">138 hotéis encontrados</h2>
                            <h3 class="c-busca__container__title fs-2 text-primary fw-normal"><span
                                    class="fw-bold">Traslados em:</span> Rio de Janeiro</h3>

                            <?php include('includes/hotel.php'); ?>

                            <div class="text-center mt-5 pt-4">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination d-inline-flex" style="margin-bottom: 0;">
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                                    aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                                        <li class="page-item"><a class="page-link" href="#">9</a></li>
                                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                                        <li class="page-item"><a class="page-link" href="#">11</a></li>
                                        <li class="page-item"><a class="page-link" href="#">12</a></li>
                                        <li class="page-item"><a class="page-link" href="#">13</a></li>
                                        <li class="page-item"><a class="page-link" href="#">14</a></li>
                                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>

                        <div class="col-xl-3 offset-xl-1 col-xl-3 c-busca__advertisement">

                            <div class="mb-5">
                                <label for="exampleInputEmail1" class="form-label">Ordernar por:</label>
                                <select name="" id="" class="form-select">
                                    <option value="">Menor preço</option>
                                    <option value="">Maior preço</option>
                                    <option value="">Nome [A-Z]</option>
                                    <option value="">Nome [Z-A]</option>
                                    <option value="">Categoria</option>
                                </select>
                            </div>

                            <div>
                                <img src="assets/img/advertisement.jpg" alt="">
                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </div>
    </section>


    <?php include('includes/reserva-transfer.php');?>
    
</main>


<?php include('includes/loader.php'); ?>

<?php include('includes/footer.php') ?>

<script src="assets/js/pages/busca.js"></script>