<?php include('includes/header.php') ?>


<main class="c-reservas">

    <section class="c-banner">
        <?php include('includes/search-box.php') ?>

        <div class="swiper-container h-100 JS__banner">

            <div class="swiper-wrapper h-100">

                <div class="c-banner__item swiper-slide h-100 d-flex align-items-end"
                    style="background-image: url('assets/img/banner-bali.jpg');">

                    <div class="container text-light">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-8 col-sm-8">
                                <h2 class="c-banner__title fw-bold fs-3">Bali.</h2>
                                <p>Uma das ilhas com um cenário inesquecível! Se você busca sol brilhante, praias e
                                    montanhas, esse é o lugar certo</p>
                                <a href=""
                                    class="c-banner__button d-flex align-items-center text-reset text-uppercase fw-bolder">
                                    Explorar <svg xmlns="http://www.w3.org/2000/svg" width="41.29" height="20">
                                        <path
                                            d="M40.817 8.858L32.389.471a1.613 1.613 0 00-2.276 2.286l5.658 5.631H1.613a1.613 1.613 0 000 3.226h34.158l-5.658 5.631a1.613 1.613 0 002.276 2.286l8.428-8.387a1.614 1.614 0 000-2.286z"
                                            fill="#fff"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="c-banner__background__overlay"></div>
                </div>

                <div class="c-banner__item swiper-slide h-100 d-flex align-items-end"
                    style="background-image: url('assets/img/reservas-banner.jpg');">

                    <div class="container text-light">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-xl-4">
                                <h2 class="c-banner__title fw-bold fs-3">Nusa Penida.</h2>
                                <p>Uma das ilhas com um cenário inesquecível! Se você busca sol brilhante, praias e
                                    montanhas, esse é o lugar certo</p>
                                <a href=""
                                    class="c-banner__button d-flex align-items-center text-reset text-uppercase fw-bolder">
                                    Explorar <svg xmlns="http://www.w3.org/2000/svg" width="41.29" height="20">
                                        <path
                                            d="M40.817 8.858L32.389.471a1.613 1.613 0 00-2.276 2.286l5.658 5.631H1.613a1.613 1.613 0 000 3.226h34.158l-5.658 5.631a1.613 1.613 0 002.276 2.286l8.428-8.387a1.614 1.614 0 000-2.286z"
                                            fill="#fff"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="c-banner__background__overlay"></div>
                </div>


            </div>

        </div>

    </section>

    <section class="pt-5 mt-4">
        <div class="container">
            <div class="row mb-3">

                <div class="col-xl-6 offset-xl-3">
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading fs-24"><span class="icon-alert-triangle"></span> Atenção!</h4>
                        <p>Qualquer alteração nesse file não será sincronizada automaticamente com o sistema Blumar.</p>
                        <hr>
                        <p class="mb-0">O operador deverá efetuar a ação manualmente no sistema Raposa também.</p>
                    </div>
                </div>
            </div>


            <div class="row mb-3">

                <div class="col-xl-12">
                    <h3 class="fs-24 text-primary fw-normal"><span class="fw-bold">Reserva:</span> #36252</h3>
                </div>
            </div>

            <div class="row mb-3">
                <div class="d-flex border-bottom pb-4 flex-wrap">
                    <div class="me-5 mb-3">
                        <span class="fw-500 fs-12 d-block">Check-In</span>
                        <div class="fs-6">12 de Fevereiro</div>
                    </div>
                    <div class="me-5 mb-3">
                        <span class="fw-500 fs-12 d-block">Check-Out</span>
                        <div class="fs-6">14 de Fevereiro</div>
                    </div>
                    <div class="me-5 mb-3">
                        <span class="fw-500 fs-12 d-block">Competência</span>
                        <div class="fs-6">Março de 2021</div>
                    </div>
                    <div class="me-5 mb-3">
                        <span class="fw-500 fs-12 d-block">Finceiramente</span>
                        <div class="fs-6">Ativo</div>
                    </div>
                    <div class="me-5 mb-3">
                        <span class="fw-500 fs-12 d-block">Cliente</span>
                        <div class="fs-6">Xxxx</div>
                    </div>
                    <div class="mb-3">


                        <label class="c-reserva-modal__filtros__visibilidade cursor-pointer" aria-label="Visibilidade"
                            for="reserva-visibilidade">
                            <div class="form-check form-switch px-0">
                                <span class="form-check-label mb-0">
                                    Visível para o cliente
                                </span>
                                <input class="form-check-input me-2" type="checkbox" id="reserva-visibilidade">
                            </div>
                        </label>

                    </div>
                </div>
            </div>

            <table id="edit-reserva" class="table-reserva table table-rounded-header dataTable no-footer fs-6 mb-5">
                <thead>
                    <tr>
                        <th class="fw-500 fs-12">Referência do Cliente</th>
                        <th class="fw-500 fs-12">File/Invoice</th>
                        <th class="fw-500 fs-12">Empresa</th>
                        <th class="fw-500 fs-12">Unidade de Faturamento</th>
                        <th class="fw-500 fs-12">Agrupamento</th>
                        <th class="fw-500 fs-12">Tour Líder</th>
                        <th class="fw-500 fs-12">Idioma</th>
                        <th class="fw-500 fs-12">Nacionalidade</th>
                        <th class="fw-500 fs-12">Due Date</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="reserva-item">

                            <span class="data show-flex">Editar Ref/Cliente</span>
                            <span class="icon-edit-3 text-primary fs-22 me-2"></span>

                            <div class="form-group hide">
                                <div class="input-group">
                                    <input type="text" class="edit-input form-control">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary edit-button edit-reserva"><span
                                                class="icon-check fs-22"></span></button>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="reserva-item">

                            <span class="data show-flex">#283248</span>
                            <span class="icon-edit-3 text-primary fs-22 me-2"></span>

                            <div class="form-group hide">
                                <div class="input-group">
                                    <input type="text" class="edit-input form-control">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary edit-button edit-reserva"><span
                                                class="icon-check fs-22"></span></button>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="reserva-item">
                            <span class="data show-flex">Journeys</span>
                            <span class="icon-edit-3 text-primary fs-22 me-2"></span>

                            <div class="form-group hide">
                                <div class="input-group">
                                    <select class="form-select JS__select" id="empresa">
                                        <option value="1">Journeys AGT</option>
                                        <option selected="selected" value="2">Journeys</option>
                                        <option value="3">Journeys ALLOT</option>
                                        <option value="4">Journeys ESP</option>
                                        <option value="5">Journeys GRP</option>
                                        <option value="6">Journeys PARTNERS</option>
                                        <option value="7">Journeys NACIONAL</option>
                                    </select>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary edit-button edit-reserva"><span
                                                class="icon-check fs-22"></span></button>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="reserva-item">

                            <span class="data show-flex">Journeys</span>
                            <span class="icon-edit-3 text-primary fs-22 me-2"></span>

                            <div class="form-group hide">
                                <div class="input-group">
                                    <select class="form-select JS__select" id="faturamento">
                                        <option value="1">Journeys AGT</option>
                                        <option selected="selected" value="2">Journeys</option>
                                        <option value="3">Journeys ALLOT</option>
                                        <option value="4">Journeys ESP</option>
                                        <option value="5">Journeys GRP</option>
                                        <option value="6">Journeys PARTNERS</option>
                                        <option value="7">Journeys NACIONAL</option>
                                    </select>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary edit-button edit-reserva"><span
                                                class="icon-check fs-22"></span></button>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="reserva-item">

                            <span class="data show-flex">Journeys</span>
                            <span class="icon-edit-3 text-primary fs-22 me-2"></span>

                            <div class="form-group hide">
                                <div class="input-group">
                                    <select class="form-select JS__select" id="agrupamento">
                                        <option value="1">Journeys AGT</option>
                                        <option selected="selected" value="2">Journeys</option>
                                        <option value="3">Journeys ALLOT</option>
                                        <option value="4">Journeys ESP</option>
                                        <option value="5">Journeys GRP</option>
                                        <option value="6">Journeys PARTNERS</option>
                                        <option value="7">Journeys NACIONAL</option>
                                    </select>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary edit-button edit-reserva"><span
                                                class="icon-check fs-22"></span></button>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="reserva-item">

                            <span class="data show-flex">Tour Líder</span>
                            <span class="icon-edit-3 text-primary fs-22 me-2"></span>

                            <div class="form-group hide">
                                <div class="input-group">
                                    <input type="text" class="edit-input form-control">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary edit-button edit-reserva"><span
                                                class="icon-check fs-22"></span></button>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="reserva-item">

                            <span class="data show-flex">Selecione</span>
                            <span class="icon-edit-3 text-primary fs-22 me-2"></span>

                            <div class="form-group hide">
                                <div class="input-group">
                                    <select class="form-select JS__select" id="reserva-idioma">
                                        <option value="" selected="selected">Selecione o idioma</option>
                                        <option value="7">Alemão</option>
                                        <option value="11">Dinamarquês</option>
                                        <option value="4">Espanhol</option>
                                        <option value="8">Francês</option>
                                        <option value="6">Inglês</option>
                                        <option value="9">Italiano</option>
                                        <option value="3">Português</option>
                                        <option value="5">Português.</option>
                                    </select>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary edit-button edit-reserva"><span
                                                class="icon-check fs-22"></span></button>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="reserva-item">

                            <span class="data show-flex">Selecione</span>
                            <span class="icon-edit-3 text-primary fs-22 me-2"></span>

                            <div class="form-group hide">
                                <div class="input-group">
                                    <select class="form-select JS__select" id="ShoppingCart_Pais_Id">
                                        <option value="24">Africa do Sul </option>
                                        <option value="5">Alemanha</option>
                                        <option value="3">Argentina</option>
                                        <option value="38">Austria</option>
                                        <option value="40">Belgica</option>
                                        <option value="6">Bolivia</option>
                                        <option value="2">Brasil</option>
                                        <option value="26">Bulgaria</option>
                                        <option value="36">Canada</option>
                                        <option value="4">Chile</option>
                                        <option value="28">China</option>
                                        <option value="34">Chipre</option>
                                        <option value="13">Colômbia</option>
                                        <option value="37">Dinamarca</option>
                                        <option value="11">El Salvador</option>
                                        <option value="35">Emirados Arabes Unidos</option>
                                        <option value="10">Equador</option>
                                        <option value="12">Espanha</option>
                                        <option value="18">Estados Unidos</option>
                                        <option value="29">França</option>
                                        <option value="32">Honduras</option>
                                        <option value="27">Inglaterra</option>
                                        <option value="25">Israel </option>
                                        <option value="39">Marrocos</option>
                                        <option value="9">México</option>
                                        <option value="41">Noruega</option>
                                        <option value="23">Panamá</option>
                                        <option value="7">Paraguai</option>
                                        <option value="8">Peru</option>
                                        <option value="30">Porto Rico</option>
                                        <option value="16">Portugal</option>
                                        <option value="14">Rep. Dominicana</option>
                                        <option value="21">República Dominicana</option>
                                        <option value="22">Russia</option>
                                        <option value="31">Suiça </option>
                                        <option value="17">Turquia</option>
                                        <option value="33">Ucrânia</option>
                                        <option selected="selected" value="15">Uruguai</option>
                                        <option value="19">Venezuela</option>
                                    </select>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary edit-button edit-reserva"><span
                                                class="icon-check fs-22"></span></button>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="reserva-item reserva-item-multiple">
                            <span class="data show-flex">00/00/0000<br>R$0,00</span>
                            <span class="icon-edit-3 text-primary fs-22 me-2"></span>
                            <div class="form-group hide">
                                <div class="input-group input-group--multiple">
                                    <div class="input-group-inner">
                                        <div class="row">
                                            <div class="col">
                                                <span class="fw-500 fs-12 d-block">Data</span>
                                                <input type="text"
                                                    class="edit-input form-control bg-transparent reserva-item-input"
                                                    data-input-index="0" id="searchbox-datepicker-1month">
                                            </div>
                                            <div class="col">
                                                <span class="fw-500 fs-12 d-block">Valor</span>
                                                <input type="text"
                                                    class="edit-input form-control reserva-item-input reserva-item-input--price"
                                                    data-input-index="1">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="searchbox-datepicker-1month__container"></div>
                                        </div>
                                    </div>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary edit-button edit-reserva"><span
                                                class="icon-check fs-22"></span></button>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>



            <div class="row">
                <div class="col-xl-12 c-reserva-modal__table px-0">
                    <table class="table table-rounded-header fs-6" id="table">
                        <thead style="background-color: #FBFBFB;" class="fs-12">
                            <tr class="text-secondary">
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                    <input class="form-check-input fs-6 me-2" type="checkbox"
                                            name="checkall" id="checkall">
                                        <span class="text-primary icon-product fs-22 me-2"></span>
                                        Produto
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-status fs-22 me-2"></span>
                                        Status
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-category fs-22 me-2"></span>
                                        Ítem
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-calendar fs-22 me-2"></span>
                                        Check-In <span class="mx-3 text-primary fw-bold">|</span> Check Out
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-cost fs-22 me-2"></span>
                                        Custo
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-commission fs-22 me-2"></span>
                                        Comissão
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-exchange fs-22 me-2"></span>
                                        Câmbio
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-markup fs-22 me-2"></span>
                                        Markup
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-total fs-22 me-2"></span>
                                        Total
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="align-top checkall">
                                    <div class="form-check bg-white">
                                        <input class="form-check-input JS__search-box__radio" type="checkbox"
                                            name="search-opt" id="35080-1-HT" value="35080-1-HT">
                                        <label
                                            class="form-check-label d-flex align-items-center text-primary fw-500 mb-0 fs-6"
                                            for="35080-1-HT">
                                            Hotel
                                            35080-1-HT
                                        </label>
                                    </div>

                                </td>
                                <td class="align-top">
                                    <div class="d-flex align-items-center">
                                        <span class="dot bg-success me-2"></span>
                                        Confirmado
                                    </div>
                                </td>
                                <td class="align-top">
                                    <span class="fw-500 text-primary">TRF O.W. ARPT / HOTEL O V.V - 1 - Privado - Sólo
                                        chofer - IN</span><br>
                                    Salvador <br>
                                    02 Adultos <br>
                                    Cancelamento 15/01/2021<br>
                                    Lidiane Medina<br>
                                    RES014998-6059<br>
                                    Fornecedor: Toca da Coruja<br>
                                    Criação: 15/02/2021 - 10:44:15
                                </td>
                                <td class="align-top">18/03/2021 <span class="mx-3 text-white fw-bold">|</span>
                                    21/03/2021</td>
                                <td class="align-top">BRL 3747,20</td>
                                <td class="align-top">-</td>
                                <td class="align-top">15,2500</td>
                                <td class="align-top">5,00 %</td>
                                <td class="align-top">USD 752</td>
                            </tr>
                            <tr>
                                <td colspan="10">
                                    <div class="d-flex justify-content-between pt-5">
                                        <div class="d-flex">
                                            <div class="form-check form-switch mb-2 me-4">
                                                <input class="form-check-input me-2" type="checkbox"
                                                    id="hoteis-internos">
                                                <label class="form-check-label" for="hoteis-internos">
                                                    Visível para o cliente
                                                </label>
                                            </div>
                                            <div class="form-check form-switch mb-2 me-4">
                                                <input class="form-check-input me-2" type="checkbox"
                                                    id="hoteis-internos">
                                                <label class="form-check-label" for="hoteis-internos">
                                                    Confirmado
                                                </label>
                                            </div>
                                            <div class="form-check form-switch mb-2 me-4">
                                                <input class="form-check-input me-2" type="checkbox"
                                                    id="hoteis-internos">
                                                <label class="form-check-label" for="hoteis-internos">
                                                    Booking não opcional
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex fs-22">
                                            <span class="icon-check-circle text-primary me-4 cursor-pointer"
                                                data-tt-toggle="tooltip" data-bs-placement="top" data-bs-toggle="modal"
                                                data-bs-target="#confirmareserva" title="Confirmar Reserva"></span>
                                            <span
                                                class="icon-message-square text-primary me-4 cursor-pointer JS__open-editar-reserva"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Comentários Internos"><span class="notification bg-danger">3</span></span>
                                            <span
                                                class="icon-navigation text-primary me-4 cursor-pointer JS__open-editar-reserva"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Info. Pickup / Dropoff"></span>
                                            <span
                                                class="icon-edit-values text-primary me-4 cursor-pointer JS__open-editar-reserva"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Alteração de Valores"></span>
                                            <span
                                                class="icon-file-text text-primary me-4 cursor-pointer JS__open-editar-reserva"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Log de Alterações"></span>
                                            <span
                                                class="icon-privacy-policy text-primary me-4 cursor-pointer JS__open-editar-reserva"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Política/Privacidade"></span>
                                            <span class="icon-unlock text-primary me-4 cursor-pointer"
                                                data-tt-toggle="tooltip" data-bs-placement="top" data-bs-toggle="modal"
                                                data-bs-target="#cancelamentomanual" title="Cancelamento Manual"></span>
                                            <span class="icon-external-link text-primary me-4 cursor-pointer"
                                                data-tt-toggle="tooltip" data-bs-placement="top" data-bs-toggle="modal"
                                                data-bs-target="#selecionarfornecedor" title="Editar Fornecedor"></span>
                                            <!--<span
                                                class="icon-trash-2 text-primary cursor-pointer me-4 JS__open-editar-reserva"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Cancelar Item"></span>-->
                                            <span
                                                class="icon-trash-2 text-primary cursor-pointer me-4 JS__cancelar_uma-toggle"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Cancelar Item"></span>
                                            <span
                                                class="icon-trash-undo text-primary me-4 cursor-pointer JS__rev_cancel"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Reversão de Cancelamento"></span>
                                            <span class="icon-trash-politic text-primary cursor-pointer"
                                                data-tt-toggle="tooltip" data-bs-placement="top" data-bs-toggle="modal"
                                                data-bs-target="#politicadecancelamento"
                                                title="Política de Cancelamento"></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td scope="row" class="align-top checkall">
                                    <div class="form-check bg-white">
                                        <input class="form-check-input JS__search-box__radio" type="checkbox"
                                            name="search-opt" id="35080-1-HT" value="35080-1-HT">
                                        <label
                                            class="form-check-label d-flex align-items-center text-primary fw-500 mb-0 fs-6"
                                            for="35080-1-HT">
                                            Hotel
                                            35080-1-HT
                                        </label>
                                    </div>

                                </td>
                                <td class="align-top">
                                    <div class="d-flex align-items-center">
                                        <span class="dot bg-success me-2"></span>
                                        Confirmado
                                    </div>
                                </td>
                                <td class="align-top">
                                    <span class="fw-500 text-primary">TRF O.W. ARPT / HOTEL O V.V - 1 - Privado - Sólo
                                        chofer - IN</span><br>
                                    Salvador <br>
                                    02 Adultos <br>
                                    Cancelamento 15/01/2021<br>
                                    Lidiane Medina<br>
                                    RES014998-6059<br>
                                    Fornecedor: Toca da Coruja<br>
                                    Criação: 15/02/2021 - 10:44:15
                                </td>
                                <td class="align-top">18/03/2021 <span class="mx-3 text-white fw-bold">|</span>
                                    21/03/2021</td>
                                <td class="align-top">BRL 3747,20</td>
                                <td class="align-top">-</td>
                                <td class="align-top">15,2500</td>
                                <td class="align-top">5,00 %</td>
                                <td class="align-top">USD 752</td>
                            </tr>
                            <tr>
                                <td colspan="10">
                                    <div class="d-flex justify-content-between pt-5">
                                        <div class="d-flex">
                                            <div class="form-check form-switch mb-2 me-4">
                                                <input class="form-check-input me-2" type="checkbox"
                                                    id="hoteis-internos">
                                                <label class="form-check-label" for="hoteis-internos">
                                                    Visível para o cliente
                                                </label>
                                            </div>
                                            <div class="form-check form-switch mb-2 me-4">
                                                <input class="form-check-input me-2" type="checkbox"
                                                    id="hoteis-internos">
                                                <label class="form-check-label" for="hoteis-internos">
                                                    Confirmado
                                                </label>
                                            </div>
                                            <div class="form-check form-switch mb-2 me-4">
                                                <input class="form-check-input me-2" type="checkbox"
                                                    id="hoteis-internos">
                                                <label class="form-check-label" for="hoteis-internos">
                                                    Booking não opcional
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex fs-22">
                                            <span class="icon-check-circle text-primary me-4 cursor-pointer"
                                                data-tt-toggle="tooltip" data-bs-placement="top" data-bs-toggle="modal"
                                                data-bs-target="#confirmareserva" title="Confirmar Reserva"></span>
                                            <span
                                                class="icon-message-square text-primary me-4 cursor-pointer JS__open-editar-reserva"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Comentários Internos"></span>
                                            <span
                                                class="icon-navigation text-primary me-4 cursor-pointer JS__open-editar-reserva"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Info. Pickup / Dropoff"></span>
                                            <span
                                                class="icon-edit-values text-primary me-4 cursor-pointer JS__open-editar-reserva"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Alteração de Valores"></span>
                                            <span
                                                class="icon-file-text text-primary me-4 cursor-pointer JS__open-editar-reserva"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Log de Alterações"></span>
                                            <span
                                                class="icon-privacy-policy text-primary me-4 cursor-pointer JS__open-editar-reserva"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Política/Privacidade"></span>
                                            <span class="icon-unlock text-primary me-4 cursor-pointer"
                                                data-tt-toggle="tooltip" data-bs-placement="top" data-bs-toggle="modal"
                                                data-bs-target="#cancelamentomanual" title="Cancelamento Manual"></span>
                                            <span class="icon-external-link text-primary me-4 cursor-pointer"
                                                data-tt-toggle="tooltip" data-bs-placement="top" data-bs-toggle="modal"
                                                data-bs-target="#selecionarfornecedor" title="Editar Fornecedor"></span>
                                            <!--<span
                                                class="icon-trash-2 text-primary cursor-pointer me-4 JS__open-editar-reserva"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Cancelar Item"></span>-->
                                            <span
                                                class="icon-trash-2 text-primary cursor-pointer me-4 JS__cancelar_uma-toggle"
                                                data-tt-toggle="tooltip" title="Cancelar Item"></span>
                                            <span
                                                class="icon-trash-undo text-primary me-4 cursor-pointer JS__rev_cancel"
                                                data-tt-toggle="tooltip" data-bs-placement="top"
                                                title="Reversão de Cancelamento"></span>
                                            <span class="icon-trash-politic text-primary cursor-pointer"
                                                data-tt-toggle="tooltip" data-bs-placement="top" data-bs-toggle="modal"
                                                data-bs-target="#politicadecancelamento"
                                                title="Política de Cancelamento"></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col d-flex justify-content-between flex-wrap align-items-center">
                    <div class="d-flex flex-wrap mb-2">

                        <div
                            class="d-flex align-items-center me-4 mb-3  cursor-pointer JS__excluir_todas-toggle disabled">
                            <span class="icon-trash-2 text-primary fs-24 me-2"></span>
                            <span class="fs-12">Cancelar Todas</span>
                        </div>
                        <div class="d-flex align-items-center me-4 mb-3 cursor-pointer JS__doc-toggle">
                            <span class="icon-upload-cloud text-primary fs-24 me-2"></span>
                            <span class="fs-12">DOC Digital</span>
                        </div>
                        <div class="d-flex align-items-center me-4 mb-3 cursor-pointer JS__log-toggle">
                            <span class="icon-file-text text-primary fs-24 me-2"></span>
                            <span class="fs-12">Log de Alterações</span>
                        </div>
                        <div class="d-flex align-items-center me-4 mb-3 cursor-pointer JS__invoice-toggle">
                            <span class="icon-invoice text-primary fs-24 me-2"></span>
                            <span class="fs-12">Invoice</span>
                        </div>
                        <div class="d-flex align-items-center me-4 mb-3">
                            <span class="icon-printer1 text-primary fs-24 me-2"></span>
                            <span class="fs-12">Imprimir</span>
                        </div>
                        <div class="d-flex align-items-center me-4 mb-3 cursor-pointer JS__voucher-toggle">
                            <span class="icon-loader me-2"></span>
                            <!--<span class="icon-voucher text-primary fs-24 me-2"></span>-->
                            <span class="fs-12">Voucher</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center flex-wrap">
                        <span class="fs-4 text-primary fw-normal me-5 mb-3"><span class="fw-bold">Total:</span> USD
                            150,00</span>
                        <button class="btn btn-primary px-5 rounded-pill fw-500 mb-3">Adicionar mais itens</button>
                    </div>

                </div>


            </div>

        </div>
    </section>

</main>


<div class="c-reserva-modal__menu JS__reserva-menu">

    <div class="c-reserva-modal__menu__bg JS__open-editar-reserva"></div>

    <div class="c-reserva-modal__menu__content">

        <div class="c-reserva-modal__menu__icons">
            <span
                class="icon-x JS__open-editar-reserva fs-28 text-primary cursor-pointer c-reserva-modal__menu__close position-absolute"></span>
            <div class="w-100 h-100 d-flex align-items-center">
                <ul class="nav nav-fill d-block w-100 fs-22">
                    <li class="nav-item">
                        <button class="nav-link active" id="comentarios-tab" data-bs-toggle="tab"
                            data-bs-target="#comentarios-tabContent" type="button" role="tab"
                            aria-controls="comentarios-tabContent" aria-selected="true">
                            <span class="icon-message-square"></span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="pickup-tab" data-bs-toggle="tab"
                            data-bs-target="#pickup-tabContent" type="button" role="tab"
                            aria-controls="pickup-tabContent" aria-selected="true">
                            <span class="icon-navigation"></span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="valores-tab" data-bs-toggle="tab"
                            data-bs-target="#valores-tabContent" type="button" role="tab"
                            aria-controls="valores-tabContent" aria-selected="false">
                            <span class="icon-edit-values"></span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log-tabContent"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                            <span class="icon-file-text"></span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="politica-tab" data-bs-toggle="tab"
                            data-bs-target="#politica-tabContent" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">
                            <span class="icon-privacy-policy"></span>
                        </button>
                    </li>
                    <!--<li class="nav-item">
                        <button class="nav-link" id="excluir-tab" data-bs-toggle="tab"
                            data-bs-target="#excluir-tabContent" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">
                            <span class="icon-trash-2"></span>
                        </button>
                    </li>-->
                </ul>
            </div>
        </div>

        <div class="tab-content" id="tabTarifados">

            <div class="tab-pane fade active show" id="comentarios-tabContent" role="tabpanel"
                aria-labelledby="comentarios-tab">
                <div class="c-reserva-modal__menu__container fs-6">
                    <span class="fs-24 text-primary mb-5 d-block fw-bold">Comentários Internos</span>

                    <p class="fw-500 mb-5">TRF O.W. ARPT / HOTEL O V.V<br>
                        1 - Privado - Sólo chofer - IN</p>

                    <ul class="comments fs-12">
                        <li>
                            <span class="icon icon-message-square fs-16"></span>
                            <div><span class="text-primary fw-500 me-2">Kelly Silva</span> 11, Set, 2021</div>
                            Está viagem necessita de hospedagem dupla
                        </li>
                        <li class="level-2">
                            <span class="icon icon-message-square fs-16"></span>
                            <div><span class="text-primary fw-500 me-2">Kelly Silva</span> 12, Set, 2021</div>
                            Serão dois hóspedes
                        </li>
                        <li>
                            <span class="icon icon-message-square fs-16"></span>
                            <div><span class="text-primary fw-500 me-2">Erick Henrique</span> 14, Set, 2021</div>
                            Viagem com alterações criadas
                        </li>
                    </ul>

                    <div class="mt-5 w-100">
                        <label for="add-comment" class="form-label">Adicionar Comentário</label>
                        <label for="add-comment" class="add-comment">
                            <span class="icon-plus"></span>
                            <input class="form-control comment" id="add-comment" type="text"
                                placeholder="Adicione algum detalhe sobre a viagem" pattern=".*\S.*" required>
                        </label>
                    </div>

                    <button class="btn btn-primary px-5 rounded-pill fw-500 mt-5">Salvar Alterações</button>

                </div>
            </div>

            <div class="tab-pane fade" id="valores-tabContent" role="tabpanel" aria-labelledby="pickup-tab">
                <div class="c-reserva-modal__menu__container fs-6">
                    <span class="fs-24 text-primary mb-5 d-block fw-bold">Alteração de Valores</span>

                    <p class="fw-500 mb-5">TRF O.W. ARPT / HOTEL O V.V<br>1 Privado - Sólo chofer - IN</p>

                    <div class="mb-3 w-100 me-2">
                        <label for="exampleInputEmail1" class="form-label">Valor de Venda (USD)</label>
                        <input class="form-control " type="text" placeholder="USD 0,000">
                    </div>
                    <div class="mb-5 w-100 me-2">
                        <label for="exampleInputEmail1" class="form-label">Notas</label>
                        <input class="form-control " type="text" placeholder="Digite algo sobre…">
                    </div>
                    <div class="mb-3 w-100 me-2">
                        <label for="exampleInputEmail1" class="form-label">Valor de Venda (BRL)</label>
                        <input class="form-control" type="text" placeholder="BRL 0,000">
                    </div>
                    <div class="mb-5 w-100 me-2">
                        <label for="exampleInputEmail1" class="form-label">Notas</label>
                        <input class="form-control" type="text" placeholder="Digite algo sobre…">
                    </div>

                    <button class="btn btn-primary px-5 rounded-pill fw-500 me-3">Salvar Alterações</button>
                </div>
            </div>

            <div class="tab-pane fade" id="pickup-tabContent" role="tabpanel" aria-labelledby="pickup-tab">
                <div class="c-reserva-modal__menu__container fs-6">
                    <span class="fs-24 text-primary mb-5 d-block fw-bold">Info. Pickup / Dropoff</span>


                    <div>
                        <p class="fw-500 mb-2 pb-2 border-bottom">Ida</p>
                        <div class="row">
                            <div class="col-6">
                                <span class="fs-6 text-primary mb-3 d-block fw-bold">Pickup</span>

                                <label for="exampleInputEmail1" class="form-label">Tipo</label>
                                <div class="d-flex mb-3">
                                    <div class="form-check bg-white me-4">
                                        <input class="form-check-input" type="radio" name="pickup-tipo" value="1"
                                            id="pickup-hotel" checked>
                                        <label class="form-check-label d-flex align-items-center" for="pickup-hotel">
                                            <span class="icon-bags fs-24 me-2"></span> Hotel
                                        </label>
                                    </div>
                                    <div class="form-check bg-white">
                                        <input class="form-check-input" type="radio" name="pickup-tipo" value="1"
                                            id="pickup-aeroporto">
                                        <label class="form-check-label d-flex align-items-center"
                                            for="pickup-aeroporto">
                                            <span class="icon-airport fs-24 me-2"></span> Aeroporto
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 w-100 me-2">
                                    <label for="exampleInputEmail1" class="form-label">Cidade</label>
                                    <input class="form-control " type="text"
                                        placeholder="Digite o nome da cidade desejada">
                                </div>
                                <div class="mb-3 w-100 me-2">
                                    <label for="exampleInputEmail1" class="form-label">Número do Voo</label>
                                    <input class="form-control " type="text" placeholder="0000000">
                                </div>
                                <div class="mb-3 w-100 me-2">
                                    <label for="exampleInputEmail1" class="form-label">Localização do Aeroporto</label>
                                    <input class="form-control " type="text" placeholder="Digite o endereço">
                                </div>

                            </div>
                            <div class="col-6">

                                <span class="fs-6 text-primary mb-3 d-block fw-bold">Dropoof</span>
                                <label for="exampleInputEmail1" class="form-label">Tipo</label>
                                <div class="d-flex mb-3">
                                    <div class="form-check bg-white me-4">
                                        <input class="form-check-input" type="radio" name="dropoof-tipo" value="1"
                                            id="dropoof-hotel" checked>
                                        <label class="form-check-label d-flex align-items-center" for="dropoof-hotel">
                                            <span class="icon-bags fs-24 me-2"></span> Hotel
                                        </label>
                                    </div>
                                    <div class="form-check bg-white">
                                        <input class="form-check-input" type="radio" name="dropoof-tipo" value="1"
                                            id="dropoof-aeroporto">
                                        <label class="form-check-label d-flex align-items-center"
                                            for="dropoof-aeroporto">
                                            <span class="icon-airport fs-24 me-2"></span> Aeroporto
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 w-100 me-2">
                                    <label for="exampleInputEmail1" class="form-label">Cidade</label>
                                    <input class="form-control" type="text"
                                        placeholder="Digite o nome da cidade desejada">
                                </div>
                                <div class="mb-3 w-100 me-2">
                                    <label for="exampleInputEmail1" class="form-label">Hotel</label>
                                    <input class="form-control " type="text" placeholder="0000000">
                                </div>

                            </div>
                            <div>
                            </div>
                        </div>
                        <p class="fw-500 mt-5 mb-2 pb-2 border-bottom">Volta</p>
                        <div class="row">
                            <div class="col-6">
                                <span class="fs-6 text-primary mb-3 d-block fw-bold">Pickup</span>

                                <label for="exampleInputEmail1" class="form-label">Tipo</label>
                                <div class="d-flex mb-3">
                                    <div class="form-check bg-white me-4">
                                        <input class="form-check-input" type="radio" name="pickup-tipo" value="1"
                                            id="pickup-hotel" checked>
                                        <label class="form-check-label d-flex align-items-center" for="pickup-hotel">
                                            <span class="icon-bags fs-24 me-2"></span> Hotel
                                        </label>
                                    </div>
                                    <div class="form-check bg-white">
                                        <input class="form-check-input" type="radio" name="pickup-tipo" value="1"
                                            id="pickup-aeroporto">
                                        <label class="form-check-label d-flex align-items-center"
                                            for="pickup-aeroporto">
                                            <span class="icon-airport fs-24 me-2"></span> Aeroporto
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 w-100 me-2">
                                    <label for="exampleInputEmail1" class="form-label">Cidade</label>
                                    <input class="form-control " type="text"
                                        placeholder="Digite o nome da cidade desejada">
                                </div>
                                <div class="mb-3 w-100 me-2">
                                    <label for="exampleInputEmail1" class="form-label">Número do Voo</label>
                                    <input class="form-control " type="text" placeholder="0000000">
                                </div>
                                <div class="mb-3 w-100 me-2">
                                    <label for="exampleInputEmail1" class="form-label">Localização do Aeroporto</label>
                                    <input class="form-control " type="text" placeholder="Digite o endereço">
                                </div>

                            </div>
                            <div class="col-6">

                                <span class="fs-6 text-primary mb-3 d-block fw-bold">Dropoof</span>
                                <label for="exampleInputEmail1" class="form-label">Tipo</label>
                                <div class="d-flex mb-3">
                                    <div class="form-check bg-white me-4">
                                        <input class="form-check-input" type="radio" name="dropoof-tipo" value="1"
                                            id="dropoof-hotel" checked>
                                        <label class="form-check-label d-flex align-items-center" for="dropoof-hotel">
                                            <span class="icon-bags fs-24 me-2"></span> Hotel
                                        </label>
                                    </div>
                                    <div class="form-check bg-white">
                                        <input class="form-check-input" type="radio" name="dropoof-tipo" value="1"
                                            id="dropoof-aeroporto">
                                        <label class="form-check-label d-flex align-items-center"
                                            for="dropoof-aeroporto">
                                            <span class="icon-airport fs-24 me-2"></span> Aeroporto
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 w-100 me-2">
                                    <label for="exampleInputEmail1" class="form-label">Cidade</label>
                                    <input class="form-control" type="text"
                                        placeholder="Digite o nome da cidade desejada">
                                </div>
                                <div class="mb-3 w-100 me-2">
                                    <label for="exampleInputEmail1" class="form-label">Hotel</label>
                                    <input class="form-control " type="text" placeholder="0000000">
                                </div>

                            </div>
                            <div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary px-5 rounded-pill fw-500 mt-5">Salvar Alterações</button>

                </div>
            </div>

            <div class="tab-pane fade" id="log-tabContent" role="tabpanel" aria-labelledby="log-tab">
                <div class="c-reserva-modal__menu__container fs-6">
                    <span class="fs-24 text-primary mb-5 d-block fw-bold">Log de Alterações</span>
                    <p class="fw-500 mb-5">TRF O.W. ARPT / HOTEL O V.V<br>1 - Privado - Sólo chofer - IN</p>
                    <div class="c-reserva-modal__table--log">
                        <table class="table fs-12 JS__datatable">
                            <thead>
                                <tr>
                                    <th>
                                        Data e Hora
                                    </th>
                                    <th>
                                        Cliente
                                    </th>
                                    <th>
                                        Usuário
                                    </th>
                                    <th>
                                        Ação
                                    </th>
                                    <th>
                                        Campo
                                    </th>
                                    <th>
                                        Antes
                                    </th>
                                    <th>
                                        Depois
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>26/01/2021 13:21:28</td>
                                    <td>Journeys | Uso Interno Operações</td>
                                    <td>Kelly</td>
                                    <td>Inserção</td>
                                    <td>Opcional</td>
                                    <td>Não</td>
                                    <td>Sim</td>
                                </tr>
                                <tr>
                                    <td>26/01/2021 13:21:28</td>
                                    <td>Journeys | Uso Interno Operações</td>
                                    <td>Kelly</td>
                                    <td>-</td>
                                    <td>Opcional</td>
                                    <td>Não</td>
                                    <td>Sim</td>
                                </tr>
                                <tr>
                                    <td>26/01/2021 13:21:28</td>
                                    <td>Journeys | Uso Interno Operações</td>
                                    <td>Kelly</td>
                                    <td>Insersção</td>
                                    <td>Opcional</td>
                                    <td>Sim</td>
                                    <td>Sim</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="politica-tabContent" role="tabpanel" aria-labelledby="politica-tab">
                <div class="c-reserva-modal__menu__container fs-6">
                    <span class="fs-24 text-primary mb-5 d-block fw-bold">Política e Privacidade</span>

                    <h3>Días normales</h3>

                    <p>Hasta 48 horas antes de la fecha de llegada del huésped - no habrá cargo.</p>

                    <p>Menos de 48 horas antes de la fecha de llegada del huésped, se cobrará el mínimo de noches
                        requeridas.</p>


                    <h3>Vacaciones y paquetes</h3>

                    <p>Para feriados, el plazo para cancelación sin cargo es hasta 14 días antes de la llegada del
                        huésped, cancelaciones posteriores a esa fecha, se cobrará el período completo del paquete.</p>

                    <h3>Dados</h3>
                    <p>
                        Banco Santander<br>
                        Agencia: 3020<br>
                        Cuenta de cadena 13001461-5<br>
                        Vg brasil ativ.hoteleiras cnpj (09.467.429 / 0001-68)<br>
                        Fecha límite hasta 2 días antes del checkin. el valor de cancelación es 100,00% del valor de la
                        reserva.<br>
                        Todo incluido<br>
                        Refeições: desayuno, almuerzo, cena<br>
                        Pago estándar
                    </p>
                </div>
            </div>


            <div class="tab-pane fade" id="excluir-tabContent" role="tabpanel" aria-labelledby="excluir-tab">
                <div class="c-reserva-modal__menu__container fs-6">
                    <span class="fs-24 text-primary mb-5 d-block"><span class="fw-bold">Reserva:</span> #36252</span>
                    <p class="fw-500 mb-5">Você tem certeza que deseja efetuar a exclusão deste item? Está ação não
                        poderá ser desfeita!</p>

                    <div>

                        <div class="mb-5">
                            <span class="d-block text-primary fs-16 fw-500">Produto</span>
                            Hotel 35080-1-HT
                        </div>
                        <div class="mb-5">
                            <span class="d-block text-primary fs-16 fw-500">Item</span>
                            <div class="fw-500">Center Hotel Rio</div>
                            Rio de Janeiro<br>
                            Doble Estándar BB<br>
                            Júlio Cabral<br>
                            02 Adultos<br>
                            Cancelamento 15/01/2021<br>
                        </div>
                        <div class="mb-5 d-flex">
                            <div class="me-5">
                                <span class="d-block text-primary fs-16 fw-500">Check-In</span>
                                12/03/2021
                            </div>
                            <div>
                                <span class="d-block text-primary fs-16 fw-500">Check-Out</span>
                                12/03/2021
                            </div>
                        </div>
                        <div class="mb-5">
                            <span class="d-block text-primary fs-16 fw-500">Preço</span>
                            R$ 85,00
                        </div>

                    </div>

                    <button class="btn btn-primary px-5 rounded-pill fw-500 me-3">Excluir Item</button>
                </div>
            </div>
        </div>

    </div>

</div>


<div class="c-reserva-modal c-reserva-modal__doc JS__doc ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    <div class="c-reserva-modal__bg cursor-pointer JS__doc-toggle"></div>

    <div class="c-reserva-modal__box">
        <div class="c-reserva-modal__box__container d-flex show">
            <div class="c-reserva-modal__close JS__doc-toggle cursor-pointer">
                <span class="icon-x text-primary fs-28"></span>
            </div>

            <div
                class="c-reserva-modal__box__confirmation c-reserva-modal__step1 pb-5 show overflow-auto overflow-padding">

                <div class="border-bottom pb-3 pt-2 mb-3">
                    <span class="fs-4 text-primary fw-bold mb-3 d-block">Doc Digital</span>
                    <div class="d-flex fs-6">
                        <div class="me-5">
                            <span class="fs-12 fs-500 text-black-50">Reserva</span><br>
                            #36547
                        </div>
                        <div>
                            <span class="fs-12 fs-500 text-black-50">Ref. Journeys</span><br>
                            030458b21
                        </div>
                    </div>
                </div>

                <div class="d-flex border-bottom pb-3 pt-2 mb-5">
                    <div class="col-6">
                        <span class="text-primary fw-500 fs-6 mb-3 d-block">Entrada:</span>
                        <div class="d-flex">
                            <div class="upload">
                                <form action="/upload" class="dropzone" id="dropzone">
                                    <div class="dz-message">
                                        <span class="mb-2 text-primary fw-500">CLIENTE</span><br>
                                        <span class="mt-2 fs-12">Segure e arraste os arquivos até aqui</span>
                                </div>
                                </form>
                            </div>
                            <div class="upload">
                                <form action="/upload" class="dropzone" id="dropzone">
                                    <div class="dz-message">
                                        <span class="mb-2 text-primary fw-500">FORNECEDOR</span><br>
                                        <span class="mt-2 fs-12">Segure e arraste os arquivos até aqui</span>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                
                <div class="col-6">
                    <span class="text-primary fw-500 fs-6 mb-3 d-block">Saída:</span>
                    <div class="d-flex">
                            <div class="upload">
                                <form action="/upload" class="dropzone" id="dropzone">
                                    <div class="dz-message">
                                        <span class="mb-2 text-primary fw-500">CLIENTE</span><br>
                                        <span class="mt-2 fs-12">Segure e arraste os arquivos até aqui</span>
                                </div>
                                </form>
                            </div>
                            <div class="upload">
                                <form action="/upload" class="dropzone" id="dropzone">
                                    <div class="dz-message">
                                        <span class="mb-2 text-primary fw-500">FORNECEDOR</span><br>
                                        <span class="mt-2 fs-12">Segure e arraste os arquivos até aqui</span>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
            <div class="c-reserva-modal__doc__table_">
                <div class="row">
                    <div class="col-lg-6">
                        <div style="background-color: white; height: 700px; overflow-y: scroll; position: relative;">
                       
    <div id="preloader" class="absolute">
        <div class="loader-container">
            <div class="loader-icon">
                <svg viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                    <path id="line-icon" class="logo" d="M20,14.8c1.7-1.6,3.9-2.5,6.3-2.5L23,15.6c2.3,0.1,4.4,1.1,6,2.7h-6.1l0,0
	c1.6,1.6,2.5,3.9,2.4,6.2l-4.7-4.7C20.7,24.9,21,36.7,21,37c0,0.3,0.2,0.5,0.5,0.5h2.4c5.1,0,9.3-4.2,9.3-9.3V11.8
	c0-5.1-4.1-9.3-9.3-9.3h-7.9c-5.1,0-9.3,4.2-9.3,9.3v16.3c0,5.1,4.2,9.3,9.3,9.3h2.4c0.3,0,0.5-0.2,0.5-0.5c0-0.3,0.3-12,0.4-17.1
	L15,24.5c-0.3-2.3,0.4-4.6,2.1-6.2l0,0h-6.1c1.6-1.6,3.7-2.6,6-2.7l-3.3-3.3C16.1,12.3,18.3,13.2,20,14.8"></path>
                </svg>
                <svg viewBox="0 0 40 40" class="line" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                    <path id="bg-icon" class="st0" d="M20,14.8c1.7-1.6,3.9-2.5,6.3-2.5L23,15.6c2.3,0.1,4.4,1.1,6,2.7h-6.1l0,0
	c1.6,1.6,2.5,3.9,2.4,6.2l-4.7-4.7C20.7,24.9,21,36.7,21,37c0,0.3,0.2,0.5,0.5,0.5h2.4c5.1,0,9.3-4.2,9.3-9.3V11.8
	c0-5.1-4.1-9.3-9.3-9.3h-7.9c-5.1,0-9.3,4.2-9.3,9.3v16.3c0,5.1,4.2,9.3,9.3,9.3h2.4c0.3,0,0.5-0.2,0.5-0.5c0-0.3,0.3-12,0.4-17.1
	L15,24.5c-0.3-2.3,0.4-4.6,2.1-6.2l0,0h-6.1c1.6-1.6,3.7-2.6,6-2.7l-3.3-3.3C16.1,12.3,18.3,13.2,20,14.8"></path>
                </svg>
            </div>
            <div class="message">Carregando mensagem</div>
        </div>
    </div>

                            <table class="table table-hover table-rounded-header fs-6">

                                <thead style="background-color: #FBFBFB;" class="fs-12">
                                    <tr>
                                        <th>Data Envio</th>
                                        <th>Categoria</th>
                                        <th>Entrada / Saída</th>
                                        <th>FROM</th>
                                        <th>TO</th>
                                    </tr>


                                </thead>
                            </table>
                        </div>


                    </div>

                    <div class="col-lg-6">


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 100%">
                                    <label class="form-label mb-2">Env</label>
                                    <input type="text" id="text-data-envio" class="form-control"
                                        style="max-width: unset; width: 100%;" readonly="readonly">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="width: 100%">
                                    <label class="form-label mb-2">Rec</label>
                                    <input type="text" id="text-data-upload" class="form-control"
                                        style="max-width: unset; width: 100%;" readonly="readonly">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group" style="width: 100%">
                                    <label class="form-label mb-2">De</label>
                                    <input type="text" id="text-remetente" class="form-control"
                                        style="max-width: unset; width: 100%;" readonly="readonly">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group" style="width: 100%">
                                    <label class="form-label mb-2">Para</label>
                                    <input type="text" id="text-destinatario" class="form-control"
                                        style="max-width: unset; width: 100%;" readonly="readonly">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group" style="width: 100%">
                                    <label class="form-label mb-2">Cópia</label>
                                    <input type="text" id="text-cc" class="form-control"
                                        style="max-width: unset; width: 100%;" readonly="readonly">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group" style="width: 100%">
                                    <label class="form-label mb-2">Assunto</label>
                                    <input type="text" id="text-assunto" class="form-control"
                                        style="max-width: unset; width: 100%;" readonly="readonly">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <iframe id="conteudo" class="conteudo" src=""></iframe>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <select id="anexos" class="form-select"></select>
                            </div>
                        </div>

                    </div>
                </div>



            </div>



            <div class="d-flex justify-content-end align-items-center pt-4 flex-wrap flex-xl-nowrap">
                <button id="remover-email" class="btn btn-danger px-5 mb-3 rounded-pill fw-500 me-3">Remover</button>
                <button id="baixar-email" class="btn btn-primary px-5 mb-3 rounded-pill fw-500">Baixar email
                    completo</button>
            </div>




        </div>


    </div>

</div>
</div>
</div>


<div class="c-reserva-modal c-reserva-modal__invoice JS__invoice">

    <div class="c-reserva-modal__bg cursor-pointer JS__invoice-toggle"></div>

    <div class="c-reserva-modal__box">
        <div class="c-reserva-modal__box__container d-flex show">
            <div class="c-reserva-modal__close JS__invoice-toggle cursor-pointer">
                <span class="icon-x text-primary fs-28"></span>
            </div>

            <div class="c-reserva-modal__box__confirmation c-reserva-modal__step1 pb-5 show">

                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3 pt-2">
                    <span class="fs-4 text-primary fw-normal"><span class="fw-bold">Exportar:</span> PDF</span>
                </div>

                <!--
                <div class="d-flex justify-content-between">

                    <table class="table fs-6" id="table">
                        <thead>
                            <tr class="text-secondary fw-500">
                                <th scope="col">Produto</th>
                                <th scope="col"> Ítem</th>
                                <th scope="col">Status</th>
                                <th scope="col">Check-In</th>
                                <th scope="col">Check-Out</th>
                                <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="text-primary">
                                    Hotel
                                    35080-1-HT
                                </td>
                                <td>
                                    <span class="fw-bold text-primary">Center Hotel Rio</span><br>
                                    Rio de Janeiro<br>
                                    Doble Estándar BB<br>
                                    Júlio Cabral<br>
                                    02 Adultos<br>
                                    Cancelamento 15/01/2021
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="dot bg-success me-2"></span>
                                        Confirmado
                                    </div>
                                </td>
                                <td>18/03/2021</td>
                                <td>21/03/2021</td>
                                <td>R$ 50,00</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="pt-4 d-flex align-items-center">
                        <span class="fs-4 text-primary fw-normal"><span class="fw-bold">Total:</span> R$ 150,00</span>
                    </div>

                </div>
-->
                <div class="row">

                    <div class="mb-3 col-2">

                        <label for="invoice-idioma" class="form-label">Idioma da emissão</label>
                        <select class="form-select" id="invoice-idioma">
                            <option value="">Selecione o idioma</option>
                        </select>
                    </div>
                    <div class="mb-3 col-2">
                        <label for="invoice-preco" class="form-label">Selecione uma opção para o preço</label>
                        <select class="form-select" id="invoice-preco">
                            <option value="">Total</option>
                            <option value="">Modificado</option>
                        </select>
                    </div>


                    <div class="mb-3 col-3">
                        <div class="mb-3">
                            <label for="valor-1" class="form-label">Reserva 44292-1-HT - Valor (USD)</label>
                            <input class="form-control" id="valor-1" type="text" placeholder="Digite algo sobre">
                        </div>
                        <div class="mb-3">
                            <label for="valor-2" class="form-label">Reserva 44292-2-HT - Valor (USD)</label>
                            <input class="form-control" id="valor-2" type="text" placeholder="Digite algo sobre">
                        </div>

                    </div>


                </div>

                <div class="row">
                    <div class="mb-3 w-100">
                        <label for="voucher-fornecedor" class="form-label mb-2">Comentários</label>
                        <input class="form-control" id="comentarios" type="text" placeholder="Comentários">
                    </div>
                </div>

                <div class="row">

                    <div class="mb-3 col-12 d-flex flex-row-reverse">
                        <button class="btn btn-primary px-5 rounded-pill fw-500 btn-load">Exportar Invoice <span
                                class="btn-loader"></span></button>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>


<div class="c-reserva-modal c-reserva-modal__voucher JS__voucher">

    <div class="c-reserva-modal__bg cursor-pointer JS__voucher-toggle"></div>

    <div class="c-reserva-modal__box">

        <div class="c-reserva-modal__box__container d-flex show">
            <div class="c-reserva-modal__close JS__voucher-toggle cursor-pointer">
                <span class="icon-x text-primary fs-28"></span>
            </div>

            <div
                class="c-reserva-modal__box__confirmation c-reserva-modal__step1 pb-5 show overflow-auto overflow-padding">

                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3 pt-2">
                    <span class="fs-4 text-primary fw-normal"><span class="fw-bold">Voucher:</span> 36547-1HT</span>
                </div>


                <form action="">
                    <div class="row">
                        <div class="mb-3 col-3">
                            <label for="voucher-idioma" class="form-label mb-2">Idioma da emissão</label>
                            <select class="form-select" id="voucher-idioma">
                                <option value="">Selecione o idioma</option>
                            </select>
                        </div>
                        <div class="mb-3 col-3">
                            <label for="voucher-descricao" class="form-label mb-2">Descrição</label>
                            <input class="form-control" id="voucher-descricao" type="text"
                                placeholder="Superior Executivo Double BB">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="voucher-checkin" class="form-label mb-2">Check-In</label>
                            <input class="form-control bg-white input-date" type="text" placeholder="Selecione"
                                id="voucher-checkin">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="voucher-checkout" class="form-label mb-2">Check-Out</label>
                            <input class="form-control bg-white input-date" type="text" placeholder="Selecione"
                                id="voucher-checkout">
                        </div>



                    </div>

                    <div class="row">

                        <div class="mb-3 col-3">
                            <label for="voucher-fornecedor" class="form-label mb-2">Fornecedor</label>
                            <input class="form-control" id="voucher-fornecedor" type="text"
                                placeholder="Windsor Barra Hotel E Congressos">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="voucher-fornecedor-endereco" class="form-label mb-2">Fornecedor Endereço</label>
                            <input class="form-control" id="voucher-fornecedor-endereco" type="text"
                                placeholder="Rua Maria, 999">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="voucher-fornecedor-fone" class="form-label mb-2">Telefones</label>
                            <input class="form-control" id="voucher-fornecedor-fone" type="text"
                                placeholder="(11) 5567-7890, (11) 99999-8888">
                        </div>

                        <div class="mb-3 col-3">
                            <label for="voucher-fornecedor-fone-emergencia" class="form-label mb-2">Telefones de
                                Emergência</label>
                            <input class="form-control" id="voucher-fornecedor-fone-emergencia" type="text"
                                placeholder="(11) 5567-7890, (11) 99999-8888">
                        </div>



                    </div>

                    <div class="row">
                        <div class="col-3">
                            <div class="w-100">
                                <label for="voucher-tour" class="form-label">Tour Líder</label>
                                <input class="form-control" type="text" placeholder="Editar/Ref Cliente"
                                    id="voucher-tour">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 qnty me-xl-3">
                                <label for="adultos-input" class="form-label mb-3">Adultos</label>
                                <div class="input-number">
                                    <input type="button" class="button-minus" data-field="quantity" value="-">
                                    <input type="number" step="1" max="" value="0" name="quantity" id="adultos-input"
                                        class="JS__hotel-passageiros-value p-0">
                                    <input type="button" class="button-plus" data-field="quantity" value="+">
                                </div>
                            </div>
                            <div class="d-flex flex-wrap flex-xl-nowrap">
                                <div class="mb-3 w-100 me-xl-3">
                                    <label for="voucher-fornecedor-fone" class="form-label mb-2">Nome</label>
                                    <input class="form-control" id="voucher-fornecedor-fone" type="text"
                                        placeholder="Nome">
                                </div>

                                <div class="mb-3 w-100">
                                    <label for="voucher-fornecedor-fone-emergencia"
                                        class="form-label mb-2">Sobrenome</label>
                                    <input class="form-control" id="voucher-fornecedor-fone-emergencia" type="text"
                                        placeholder="Sobrenome">
                                </div>
                            </div>
                            <div class="d-flex flex-wrap flex-xl-nowrap">
                                <div class="mb-3 w-100 me-xl-3">
                                    <label for="voucher-fornecedor-fone" class="form-label mb-2">Nome</label>
                                    <input class="form-control" id="voucher-fornecedor-fone" type="text"
                                        placeholder="Nome">
                                </div>

                                <div class="mb-3 w-100">
                                    <label for="voucher-fornecedor-fone-emergencia"
                                        class="form-label mb-2">Sobrenome</label>
                                    <input class="form-control" id="voucher-fornecedor-fone-emergencia" type="text"
                                        placeholder="Sobrenome">
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3 qnty me-xl-3 c-reserva-modal__voucher__criancas">
                                <label for="criancas-input" class="form-label mb-3">Crianças</label>
                                <div class="input-number">
                                    <input type="button" class="button-minus" data-field="quantity" value="-">
                                    <input type="number" step="1" max="" value="0" name="quantity" id="criancas-input"
                                        class="JS__hotel-passageiros-value p-0">
                                    <input type="button" class="button-plus" data-field="quantity" value="+">
                                </div>
                            </div>
                            <div class="d-flex flex-wrap flex-xl-nowrap">
                                <div class="mb-3 w-100 me-xl-3">
                                    <label for="voucher-fornecedor-fone" class="form-label mb-2">Idade CHD 1</label>
                                    <input class="form-control" id="voucher-fornecedor-fone" type="number"
                                        placeholder="">
                                </div>

                                <div class="mb-3 w-100">
                                    <label for="voucher-fornecedor-fone-emergencia" class="form-label mb-2">Idade CHD
                                        2</label>
                                    <input class="form-control" id="voucher-fornecedor-fone-emergencia" type="number"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap flex-xl-nowrap">

                        <div class="mb-3 w-100">
                            <label for="voucher-fornecedor" class="form-label mb-2">Comentários</label>
                            <input class="form-control" id="comentarios" type="text" placeholder="Comentários">
                        </div>
                    </div>
                </form>


                <hr class="divide">

                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3 pt-2">
                    <span class="fs-4 text-primary fw-normal"><span class="fw-bold">Voucher:</span> 36547-2HT</span>
                </div>


                <form action="">
                    <div class="row">
                        <div class="mb-3 col-3">
                            <label for="voucher-idioma" class="form-label mb-2">Idioma da emissão</label>
                            <select class="form-select" id="voucher-idioma">
                                <option value="">Selecione o idioma</option>
                            </select>
                        </div>
                        <div class="mb-3 col-3">
                            <label for="voucher-descricao" class="form-label mb-2">Descrição</label>
                            <input class="form-control" id="voucher-descricao" type="text"
                                placeholder="Superior Executivo Double BB">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="voucher-checkin" class="form-label mb-2">Check-In</label>
                            <input class="form-control bg-white input-date" type="text" placeholder="Selecione"
                                id="voucher-checkin">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="voucher-checkout" class="form-label mb-2">Check-Out</label>
                            <input class="form-control bg-white input-date" type="text" placeholder="Selecione"
                                id="voucher-checkout">
                        </div>



                    </div>

                    <div class="row">

                        <div class="mb-3 col-3">
                            <label for="voucher-fornecedor" class="form-label mb-2">Fornecedor</label>
                            <input class="form-control" id="voucher-fornecedor" type="text"
                                placeholder="Windsor Barra Hotel E Congressos">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="voucher-fornecedor-endereco" class="form-label mb-2">Fornecedor Endereço</label>
                            <input class="form-control" id="voucher-fornecedor-endereco" type="text"
                                placeholder="Rua Maria, 999">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="voucher-fornecedor-fone" class="form-label mb-2">Telefones</label>
                            <input class="form-control" id="voucher-fornecedor-fone" type="text"
                                placeholder="(11) 5567-7890, (11) 99999-8888">
                        </div>

                        <div class="mb-3 col-3">
                            <label for="voucher-fornecedor-fone-emergencia" class="form-label mb-2">Telefones de
                                Emergência</label>
                            <input class="form-control" id="voucher-fornecedor-fone-emergencia" type="text"
                                placeholder="(11) 5567-7890, (11) 99999-8888">
                        </div>



                    </div>

                    <div class="row">
                        <div class="col-3">
                            <div class="w-100">
                                <label for="voucher-tour" class="form-label">Tour Líder</label>
                                <input class="form-control" type="text" placeholder="Editar/Ref Cliente"
                                    id="voucher-tour">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 qnty me-xl-3">
                                <label for="adultos-input" class="form-label mb-3">Adultos</label>
                                <div class="input-number">
                                    <input type="button" class="button-minus" data-field="quantity" value="-">
                                    <input type="number" step="1" max="" value="0" name="quantity" id="adultos-input"
                                        class="JS__hotel-passageiros-value p-0">
                                    <input type="button" class="button-plus" data-field="quantity" value="+">
                                </div>
                            </div>
                            <div class="d-flex flex-wrap flex-xl-nowrap">
                                <div class="mb-3 w-100 me-xl-3">
                                    <label for="voucher-fornecedor-fone" class="form-label mb-2">Nome</label>
                                    <input class="form-control" id="voucher-fornecedor-fone" type="text"
                                        placeholder="Nome">
                                </div>

                                <div class="mb-3 w-100">
                                    <label for="voucher-fornecedor-fone-emergencia"
                                        class="form-label mb-2">Sobrenome</label>
                                    <input class="form-control" id="voucher-fornecedor-fone-emergencia" type="text"
                                        placeholder="Sobrenome">
                                </div>
                            </div>
                            <div class="d-flex flex-wrap flex-xl-nowrap">
                                <div class="mb-3 w-100 me-xl-3">
                                    <label for="voucher-fornecedor-fone" class="form-label mb-2">Nome</label>
                                    <input class="form-control" id="voucher-fornecedor-fone" type="text"
                                        placeholder="Nome">
                                </div>

                                <div class="mb-3 w-100">
                                    <label for="voucher-fornecedor-fone-emergencia"
                                        class="form-label mb-2">Sobrenome</label>
                                    <input class="form-control" id="voucher-fornecedor-fone-emergencia" type="text"
                                        placeholder="Sobrenome">
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3 qnty me-xl-3 c-reserva-modal__voucher__criancas">
                                <label for="criancas-input" class="form-label mb-3">Crianças</label>
                                <div class="input-number">
                                    <input type="button" class="button-minus" data-field="quantity" value="-">
                                    <input type="number" step="1" max="" value="0" name="quantity" id="criancas-input"
                                        class="JS__hotel-passageiros-value p-0">
                                    <input type="button" class="button-plus" data-field="quantity" value="+">
                                </div>
                            </div>
                            <div class="d-flex flex-wrap flex-xl-nowrap">
                                <div class="mb-3 w-100 me-xl-3">
                                    <label for="voucher-fornecedor-fone" class="form-label mb-2">Idade CHD 1</label>
                                    <input class="form-control" id="voucher-fornecedor-fone" type="number"
                                        placeholder="">
                                </div>

                                <div class="mb-3 w-100">
                                    <label for="voucher-fornecedor-fone-emergencia" class="form-label mb-2">Idade CHD
                                        2</label>
                                    <input class="form-control" id="voucher-fornecedor-fone-emergencia" type="number"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap flex-xl-nowrap">

                        <div class="mb-3 w-100">
                            <label for="voucher-fornecedor" class="form-label mb-2">Comentários</label>
                            <input class="form-control" id="comentarios" type="text" placeholder="Comentários">
                        </div>
                    </div>
                </form>

                <div class="d-flex justify-content-between align-items-center pt-4 flex-wrap flex-xl-nowrap">
                    <span class="btn-link fs-6 fw-500 mb-5 cursor-pointer JS__voucher-toggle">Selecionar Mais
                        Reservas</span>
                    <div class="d-flex flex-wrap">
                        <button class="btn btn-primary px-5 mb-3 rounded-pill fw-500 me-3">Imprimir Voucher</button>
                        <button class="btn btn-primary px-5 mb-3 rounded-pill fw-500">Emitir Voucher</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<!-- Modal Excluir Todas -->
<div class="c-reserva-modal c-reserva-modal__excluir_todas JS__excluir_todas">

    <div class="c-reserva-modal__bg cursor-pointer JS__excluir_todas-toggle"></div>

    <div class="c-reserva-modal__box">

        <div class="c-reserva-modal__box__container d-flex show">
            <div class="c-reserva-modal__close JS__excluir_todas-toggle cursor-pointer">
                <span class="icon-x text-primary fs-28"></span>
            </div>

            <div
                class="c-reserva-modal__box__confirmation c-reserva-modal__step1 pb-5 show overflow-auto overflow-padding">

                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3 pt-2">
                    <span class="fs-4 text-primary fw-normal"><span class="fw-bold">Cancelar Reserva(s)</span></span>
                </div>



                <div class="row">

                    <div class="c-reserva-modal__table">

                        <table class="table fs-12 no-footer">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="
                                        Cliente
                                    : activate to sort column ascending" style="width: 0px;">
                                        Item
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="
                                        Usuário
                                    : activate to sort column ascending" style="width: 0px;">
                                        Observação
                                    </th>
                                </tr>
                            </thead>
                            <tbody>



                                <tr class="odd">

                                    <td>TRF O.W. ARPT / HOTEL O V.V - 1 - Privado - Sólo chofer - IN</td>
                                    <td>Nenhum valor será cobrado pelo cancelamento da reserva.</td>

                                </tr>
                                <tr class="even">
                                    <td>TRF O.W. ARPT / HOTEL O V.V - 1 - Privado - Sólo chofer - IN</td>
                                    <td>Nenhum valor será cobrado pelo cancelamento da reserva.</td>
                                </tr>
                                <tr class="odd">
                                    <td>TRF O.W. ARPT / HOTEL O V.V - 1 - Privado - Sólo chofer - IN</td>
                                    <td>Nenhum valor será cobrado pelo cancelamento da reserva.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>




                <div class="d-flex justify-content-between align-items-center pt-4 flex-wrap flex-xl-nowrap">
                    <div class="form-check form-switch mb-3 me-4">
                        <input class="form-check-input me-2" type="checkbox" id="email-operador">
                        <label class="form-check-label" for="email-operador">
                            Enviar email ao operador
                        </label>
                    </div>
                    <div class="form-check form-switch mb-3 me-4">
                        <input class="form-check-input me-2" type="checkbox" id="email-fornecedor">
                        <label class="form-check-label" for="email-fornecedor">
                            Enviar email ao fornecedor
                        </label>
                    </div>
                    <div class="form-check form-switch mb-3 me-4">
                        <input class="form-check-input me-2" type="checkbox" id="email-cliente">
                        <label class="form-check-label" for="email-cliente">
                            Enviar email ao cliente
                        </label>
                    </div>
                    <div class="d-flex flex-wrap">
                        <button class="btn btn-primary px-5 mb-3 rounded-pill fw-500 me-3">Cancelar Reserva(s)</button>
                        <button class="btn btn-secondary px-5 mb-3 rounded-pill fw-500">Fechar</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- /Modal Excluir Todas -->


<!-- Modal Cancelar Uma -->
<div class="c-reserva-modal c-reserva-modal__cancelar_uma JS__cancelar_uma">

    <div class="c-reserva-modal__bg cursor-pointer JS__cancelar_uma-toggle"></div>

    <div class="c-reserva-modal__box">

        <div class="c-reserva-modal__box__container d-flex show">
            <div class="c-reserva-modal__close JS__cancelar_uma-toggle cursor-pointer">
                <span class="icon-x text-primary fs-28"></span>
            </div>

            <div
                class="c-reserva-modal__box__confirmation c-reserva-modal__step1 pb-5 show overflow-auto overflow-padding">

                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3 pt-2">
                    <span class="fs-4 text-primary fw-normal"><span class="fw-bold">Cancelar Reserva(s)</span></span>
                </div>



                <div class="row">

                    <div class="c-reserva-modal__table">

                        <table class="table fs-12 no-footer">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="
                                        Cliente
                                    : activate to sort column ascending" style="width: 0px;">
                                        Item
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="
                                        Usuário
                                    : activate to sort column ascending" style="width: 0px;">
                                        Observação
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd">
                                    <td>TRF O.W. ARPT / HOTEL O V.V - 1 - Privado - Sólo chofer - IN</td>
                                    <td>Nenhum valor será cobrado pelo cancelamento da reserva.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>




                <div class="d-flex justify-content-between align-items-center pt-4 flex-wrap flex-xl-nowrap">
                    <div class="form-check form-switch mb-3 me-4">
                        <input class="form-check-input me-2" type="checkbox" id="email-operador">
                        <label class="form-check-label" for="email-operador">
                            Enviar email ao operador
                        </label>
                    </div>
                    <div class="form-check form-switch mb-3 me-4">
                        <input class="form-check-input me-2" type="checkbox" id="email-fornecedor">
                        <label class="form-check-label" for="email-fornecedor">
                            Enviar email ao fornecedor
                        </label>
                    </div>
                    <div class="form-check form-switch mb-3 me-4">
                        <input class="form-check-input me-2" type="checkbox" id="email-cliente">
                        <label class="form-check-label" for="email-cliente">
                            Enviar email ao cliente
                        </label>
                    </div>
                    <div class="d-flex flex-wrap">
                        <button class="btn btn-primary px-5 mb-3 rounded-pill fw-500 me-3">Cancelar Reserva(s)</button>
                        <button class="btn btn-secondary px-5 mb-3 rounded-pill fw-500">Fechar</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- /Modal Calcelar Uma -->


<!-- Modal Log Alterações -->
<div class="c-reserva-modal c-reserva-modal__log JS__log">

    <div class="c-reserva-modal__bg cursor-pointer JS__log-toggle"></div>

    <div class="c-reserva-modal__box">

        <div class="c-reserva-modal__box__container d-flex show">
            <div class="c-reserva-modal__close JS__log-toggle cursor-pointer">
                <span class="icon-x text-primary fs-28"></span>
            </div>

            <div
                class="c-reserva-modal__box__confirmation c-reserva-modal__step1 pb-5 show overflow-auto overflow-padding">

                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3 pt-2">
                    <span class="fs-4 text-primary fw-normal"><span class="fw-bold">Log de Alterações</span> Reserva
                        #9999</span>
                </div>


                <div class="row">
                    <div class="c-reserva-modal__table--log">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">

                            <table class="table fs-12 JS__datatable dataTable no-footer" id="DataTables_Table_0"
                                role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                        Data e Hora
                                    : activate to sort column descending" style="width: 0px;">
                                            Data e Hora
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="
                                        Cliente
                                    : activate to sort column ascending" style="width: 0px;">
                                            Cliente
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="
                                        Usuário
                                    : activate to sort column ascending" style="width: 0px;">
                                            Usuário
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="
                                        Ação
                                    : activate to sort column ascending" style="width: 0px;">
                                            Ação
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="
                                        Campo
                                    : activate to sort column ascending" style="width: 0px;">
                                            Campo
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="
                                        Antes
                                    : activate to sort column ascending" style="width: 0px;">
                                            Antes
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="
                                        Depois
                                    : activate to sort column ascending" style="width: 0px;">
                                            Depois
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>



                                    <tr class="odd">
                                        <td class="sorting_1">26/01/2021 13:21:28</td>
                                        <td>Journeys | Uso Interno Operações</td>
                                        <td>Kelly</td>
                                        <td>Inserção</td>
                                        <td>Opcional</td>
                                        <td>Não</td>
                                        <td>Sim</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">26/01/2021 13:21:28</td>
                                        <td>Journeys | Uso Interno Operações</td>
                                        <td>Kelly</td>
                                        <td>-</td>
                                        <td>Opcional</td>
                                        <td>Não</td>
                                        <td>Sim</td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">26/01/2021 13:21:28</td>
                                        <td>Journeys | Uso Interno Operações</td>
                                        <td>Kelly</td>
                                        <td>Insersção</td>
                                        <td>Opcional</td>
                                        <td>Sim</td>
                                        <td>Sim</td>
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
<!-- /Modal Log Alterações -->



<!-- Modal Fornecedor -->
<div class="modal fade" id="selecionarfornecedor" tabindex="-1" aria-labelledby="selecionarfornecedor"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title text-primary fs-24 fw-bold">Selecionar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form>
                    <select class="form-control item__description JS__select" id="customer_id" name="customer_id"
                        style="max-width: none;">
                        <option value="238"> NANO - USO INTERNO OPERAÇÕES - INTERNACIONAL (USD)</option>
                        <option value="453"> NANO - USO INTERNO OPERAÇÕES - NACIONAL (BRL)</option>
                        <option selected="selected" value="1"> JOURNEYS - USO INTERNO OPERAÇÕES - INTERNACIONAL (USD)
                        </option>
                        <option value="552"> JOURNEYS - USO INTERNO OPERAÇÕES - NACIONAL (BRL)</option>
                        <option value="528">2C Turismo (BRL)</option>
                        <option value="3">360 Regional (USD)</option>
                        <option value="352">360°TOUR OPERADOR (USD)</option>
                        <option value="178">A LUGARES Y DESTINO OPERADOR (USD)</option>
                        <option value="558">ABSOLUT SPORT - INTERNACIONAL (USD)</option>
                        <option value="429">ABSOLUT SPORT - NACIONAL (BRL)</option>
                        <option value="5">Abtour Viajes (USD)</option>
                        <option value="441">ACE TOUR SRL (USD)</option>
                        <option value="6">Aconcagua EVT (USD)</option>
                        <option value="8">ACT Travel (USD)</option>
                        <option value="10">Active Travel (USD)</option>
                        <option value="495">ADOND (Adonde México) (USD)</option>
                        <option value="400">ADS Mundo (USD)</option>
                        <option value="510">AERO (USD)</option>
                        <option value="170">AEROMUNDO Internacional (USD)</option>
                        <option value="443">AGENCIA DE VIAJES ANITA (USD)</option>
                        <option value="11">Agyr (USD)</option>
                        <option value="541">AINI EXPERIENCIAS VIAGENS E TURISMO / Cliente Net (BRL)</option>
                        <option value="513">ALHTO MAYORISTA DE TURISMO (USD)</option>
                        <option value="12">Aliwen Incoming (USD)</option>
                        <option value="484">All Travel (USD)</option>
                        <option value="367">ALL TRAVEL MAYORISTAS DE TURISMO CIA. LTDA. (USD)</option>
                        <option value="519">Alltour Nacional (BRL)</option>
                        <option value="488">ALTCA (Alta Calidad) (USD)</option>
                        <option value="551">AMANCAYA OPERADORA MAYORISTA SAS (USD)</option>
                        <option value="193">Amerika SPA (USD)</option>
                        <option value="15">Amv Travel (USD)</option>
                        <option value="16">Ananke (USD)</option>
                        <option value="517">ANDALUCIA VIAJES (USD)</option>
                        <option value="17">Andes Reps (USD)</option>
                        <option value="200">Any Way (Script Plus) (USD)</option>
                        <option value="202">Argentina On The Go (USD)</option>
                        <option value="499">ARGEX (Argentinian Explorer) (USD)</option>
                        <option value="535">Aspire Life Styles (USD)</option>
                        <option value="347">ASTROTURS (USD)</option>
                        <option value="520">ATOM TRAVEL, C.A. (USD)</option>
                        <option value="339">ATRAPALO S.L (USD)</option>
                        <option value="490">ATRAV (Accessible Travel Experience) (USD)</option>
                        <option value="327">ATYCA (USD)</option>
                        <option value="360">AVA Tours (USD)</option>
                        <option value="21">Avantrip (USD)</option>
                        <option value="536">AZABACHE (USD)</option>
                        <option value="372">Bamboostravel (USD)</option>
                        <option value="463">BARAKA CLUB DE VIATGES SLU (USD)</option>
                        <option value="24">BARNEOS ARGENTINA INCOMING (USD)</option>
                        <option value="26">Be The World (USD)</option>
                        <option value="205">Bespoke Asuncion (USD)</option>
                        <option value="426">Beyond BA Latam (USD)</option>
                        <option value="337">Bienvenido (USD)</option>
                        <option value="409">Bienvenido 5 (USD)</option>
                        <option value="370">Bienvenido a Journeys (USD)</option>
                        <option value="310">Bienvenido! (USD)</option>
                        <option value="341">Bienvenidos 7 (USD)</option>
                        <option value="28">BM representaciones (USD)</option>
                        <option value="548">BOLIVIA BOOKING (USD)</option>
                        <option value="29">BON BINI EV y T SRL (USD)</option>
                        <option value="30">Brazil Reps (USD)</option>
                        <option value="419">Breeze Travel (USD)</option>
                        <option value="430">Brujula de Viajes (USD)</option>
                        <option value="538">BS TOURS (USD)</option>
                        <option value="32">BTU Tour Operator (USD)</option>
                        <option value="33">Buquebus Argentina (USD)</option>
                        <option value="542">C&amp;C LUCURY TRAVEL (USD)</option>
                        <option value="363">CANGOOROO JOURNEYS (USD)</option>
                        <option value="364">CANGOOROO NANO (USD)</option>
                        <option value="309">Caribbean Chile (USD)</option>
                        <option value="186">Carlos Garros Travel (USD)</option>
                        <option value="438">CARLOTA STOCKAR - Excelencia EVT SRL (USD)</option>
                        <option value="525">CARLOTA STOCKAR - Laser Argentina (USD)</option>
                        <option value="37">Carnival (USD)</option>
                        <option value="361">CARRUSEL REPRESENTACIONES SAC (USD)</option>
                        <option value="399">Casa Shopping (BRL)</option>
                        <option value="185">Chasma Tours (USD)</option>
                        <option value="369">CHECK IN MAYORISTA DE VIAJES (USD)</option>
                        <option value="439">Check In Viajes (USD)</option>
                        <option value="365">CIC COLOMBIA (USD)</option>
                        <option value="330">CIC Travel Chile (USD)</option>
                        <option value="323">CLICK &amp; TRAVEL (USD)</option>
                        <option value="2">CLIENTE NACIONAL - 10% Comis. (BRL)</option>
                        <option value="169">CLIENTE TESTE - EURO (8/11) (EUR)</option>
                        <option value="403">CNET (BRL) (BRL)</option>
                        <option value="533">COLAEREO SAS (USD)</option>
                        <option value="41">Combratur (USD)</option>
                        <option value="235">Consolid Bue (USD)</option>
                        <option value="42">CONSORCIO TRAVEL SRL (USD)</option>
                        <option value="43">Consult House (USD)</option>
                        <option value="215">Contrastes (USD)</option>
                        <option value="405">Creditravel S.A. (USD)</option>
                        <option value="46">CTS Turismo - Chile (USD)</option>
                        <option value="313">CTSA (BRL)</option>
                        <option value="348">Cuarta Dimensión (USD)</option>
                        <option value="410">CUSTO_NET (BRL) (BRL)</option>
                        <option value="315">CUSTO_NET (USD) (USD)</option>
                        <option value="47">Cynsa (USD)</option>
                        <option value="357">DCOM TRAVEL (USD)</option>
                        <option value="48">De La Paz (USD)</option>
                        <option value="49">Del Sur Viajes (USD)</option>
                        <option value="50">Delfos Argentina (USD)</option>
                        <option value="482">Design Travel (DESTR) (USD)</option>
                        <option value="328">DESTEFANIS TRAVEL (USD)</option>
                        <option value="504">Destinos Mundiales (USD)</option>
                        <option value="506">Dieux Travel Services (USD)</option>
                        <option value="198">DIRECT CONNECTION TRAVEL (USD)</option>
                        <option value="412">Discovery Tour (USD)</option>
                        <option value="559">Doutor Viagem (BRL)</option>
                        <option value="501">Dream &amp; Travel inter (USD)</option>
                        <option value="54">DTP TOUR OPERATOR (USD)</option>
                        <option value="358">ecoTravel Lda (USD)</option>
                        <option value="514">Eddys Tours (USD)</option>
                        <option value="413">Ego Travel (USD)</option>
                        <option value="241">ELYSIUM TRAVEL (USD)</option>
                        <option value="354">Emeté Ltda (USD)</option>
                        <option value="384">EMPRETUR E. V. Y T (USD)</option>
                        <option value="545">ENJOY EXPERIENCE - Comissiondo (BRL)</option>
                        <option value="505">EPICT (Epic Travel) (USD)</option>
                        <option value="498">Estilo Plus (USD)</option>
                        <option value="555">EUROMUNDO OPERADORA MAYORISTA (USD)</option>
                        <option value="58">Eurotur (USD)</option>
                        <option value="59">Eurovip´s (USD)</option>
                        <option value="375">EVENEMENT (USD)</option>
                        <option value="492">EWT (USD)</option>
                        <option value="217">Excellence Club (BRL)</option>
                        <option value="487">EXITO (Tour Exito) (USD)</option>
                        <option value="448">Exoticca Alemania (USD)</option>
                        <option value="539">Exoticca Espanha (USD)</option>
                        <option value="450">Exoticca Francia (USD)</option>
                        <option value="451">Exoticca UK (USD)</option>
                        <option value="452">Exoticca USA (USD)</option>
                        <option value="422">Expahotels (USD)</option>
                        <option value="418">EXPRESS TRAVEL SRL (USD)</option>
                        <option value="500">EXPTG (Xperience travel group) (USD)</option>
                        <option value="527">Extraordinario Turismo (BRL)</option>
                        <option value="496">FAMA (Viajes Fama) (USD)</option>
                        <option value="387">Festival Travel e Tours (USD)</option>
                        <option value="362">Freenthotels (USD)</option>
                        <option value="445">FROSCH COLOMBIA (USD)</option>
                        <option value="61">Fuera de Ruta (USD)</option>
                        <option value="62">Gador Viajes (USD)</option>
                        <option value="491">GAMMA (Gamma Mercadeo) (USD)</option>
                        <option value="406">Geist (USD)</option>
                        <option value="381">GEO STYLISH EVT (USD)</option>
                        <option value="486">GIRATUR (USD)</option>
                        <option value="64">Giromundo (USD)</option>
                        <option value="65">Git (USD)</option>
                        <option value="225">Global LTD - desabilitado por duplicidade - DELETAR (USD)</option>
                        <option value="318">GO GLOBAL (USD)</option>
                        <option value="300">Go Trip (USD)</option>
                        <option value="457">GOYA TOUR OPERADOR (USD)</option>
                        <option value="222">Greenland Tours (USD)</option>
                        <option value="68">Grizzlys (USD)</option>
                        <option value="336">GRUPO OPERAMA OPERADORA MAYORISTA DE TURISMO SAS (USD)</option>
                        <option value="71">Grupo Travel Mexico (USD)</option>
                        <option value="72">GTS Turismo (USD)</option>
                        <option value="331">Güney Amerika Seyahat (USD)</option>
                        <option value="74">Hayland Travel (USD)</option>
                        <option value="466">Hiperviajes (Top Tours) (USD)</option>
                        <option value="447">ILUSIONES (USD)</option>
                        <option value="245">Imacop Tour Corporation (USD)</option>
                        <option value="526">Inara Travel (USD)</option>
                        <option value="195">Infinity Tours (USD)</option>
                        <option value="503">INKAY (Inka Yume Travel) (USD)</option>
                        <option value="76">Inter Tours – El Salvador (USD)</option>
                        <option value="197">Intercity (USD)</option>
                        <option value="77">Intertours (USD)</option>
                        <option value="78">ISTE S.A (USD)</option>
                        <option value="319">ITC Travel Group (USD)</option>
                        <option value="79">Itravel Group (USD)</option>
                        <option value="483">ITREP (IT Representaciones) (USD)</option>
                        <option value="80">Iumira Travel (USD)</option>
                        <option value="462">IVON PEREZ MAYORISTA DE TURISMO (USD)</option>
                        <option value="550">Jadabook (USD)</option>
                        <option value="210">Jazz Operador (USD)</option>
                        <option value="469">JESPER (USD)</option>
                        <option value="81">JETMAR (USD)</option>
                        <option value="322">JPM Viagens (BRL)</option>
                        <option value="481">JSREP (Js Representaciones) (USD)</option>
                        <option value="290">Juan Tosseli (USD)</option>
                        <option value="303">Kiboko (USD)</option>
                        <option value="377">KOVAR VIAJES (USD)</option>
                        <option value="82">Kuality Tour (USD)</option>
                        <option value="83">Latin Adventure - Operador Mayorista (USD)</option>
                        <option value="474">LATIR (Latin Reiser) (USD)</option>
                        <option value="433">LLOYD/VOYPORELMUNDO.COM (USD)</option>
                        <option value="87">Logan Travel (USD)</option>
                        <option value="560">LOVELY TRIP (BRL)</option>
                        <option value="88">Lua Viajes (USD)</option>
                        <option value="386">Mac Travel (USD)</option>
                        <option value="294">Manchego Turismo SRL (USD)</option>
                        <option value="404">MANTIS TRAVEL (USD)</option>
                        <option value="91">Maral Turismo (USD)</option>
                        <option value="266">MAVANI TOUR OPERATOR (USD)</option>
                        <option value="461">MaxiTravel Tours Wholesaler (USD)</option>
                        <option value="454">MAYORISTA DE VIAJES FREEWAY (USD)</option>
                        <option value="480">MCO CALI (USD)</option>
                        <option value="479">MENAT (Mena Travel) (USD)</option>
                        <option value="554">METROPROMOCIONES (USD)</option>
                        <option value="378">MeVuelo.com (USD)</option>
                        <option value="356">Mozgetawayz (USD)</option>
                        <option value="524">multidestinos (USD)</option>
                        <option value="95">Mundo Jovem Travel Shop (USD)</option>
                        <option value="96">Mundo MBA (USD)</option>
                        <option value="218">Mundo Travel (USD)</option>
                        <option value="408">Nattule (USD)</option>
                        <option value="299">Naviterra (USD)</option>
                        <option value="366">NEMO - SUPORTE (USD)</option>
                        <option value="99">New World Travel (USD)</option>
                        <option value="100">Nexos (USD)</option>
                        <option value="102">Nuevo Mundo (USD)</option>
                        <option value="220">OLATREK (USD)</option>
                        <option value="351">Olympus (USD)</option>
                        <option value="497">OPEST (Opesa México) (USD)</option>
                        <option value="105">Oporto Mayorista (USD)</option>
                        <option value="473">OSITR (USD)</option>
                        <option value="226">OTSI (USD)</option>
                        <option value="521">OXALA TRAVEL (USD)</option>
                        <option value="107">Pacific Reps (USD)</option>
                        <option value="204">Panamericana (USD)</option>
                        <option value="547">PENTAGONO OPERADORA TURISTICA (USD)</option>
                        <option value="434">Perfectstay (USD)</option>
                        <option value="295">PeruvianNet (USD)</option>
                        <option value="436">PETRABAX ARGENTINA (USD)</option>
                        <option value="108">Pezzati (USD)</option>
                        <option value="368">PG TravelGroup Inc (USD)</option>
                        <option value="456">PLANET TOURS SA DE CV (USD)</option>
                        <option value="109">Planet Travel (USD)</option>
                        <option value="111">Plus Travel (USD)</option>
                        <option value="324">POLIMUNDO SA (USD)</option>
                        <option value="112">Portuviaje (USD)</option>
                        <option value="113">Positivo (USD)</option>
                        <option value="115">Pri Internacional (USD)</option>
                        <option value="304">Price Travel (USD)</option>
                        <option value="516">Prime operadora (BRL)</option>
                        <option value="523">PROA VIAJES Y TURISMO (USD)</option>
                        <option value="502">PROCH (Promocharters) (USD)</option>
                        <option value="302">Profi Travel (USD)</option>
                        <option value="390">PUBLITOUR REPS (USD)</option>
                        <option value="118">Puntos Cardinales (USD)</option>
                        <option value="119">Quality (USD)</option>
                        <option value="120">Quarum Travel (USD)</option>
                        <option value="121">QWERTY (USD)</option>
                        <option value="122">Real Way Dominicana (USD)</option>
                        <option value="213">Representaciones y Turismo Expan SPA (USD)</option>
                        <option value="350">REVEILLON GROUP (USD)</option>
                        <option value="123">Ricale Master (USD)</option>
                        <option value="407">RINCON TRAVEL (USD)</option>
                        <option value="301">Rit Group (USD)</option>
                        <option value="124">Ronay (USD)</option>
                        <option value="125">Roteiros (USD)</option>
                        <option value="126">RT-Latinoamérica (USD)</option>
                        <option value="338">RTS website (USD)</option>
                        <option value="127">RuColumb (USD)</option>
                        <option value="444">Ruta 5 (USD)</option>
                        <option value="31">Sakibong Creative (USD)</option>
                        <option value="316">SantiniTours (USD)</option>
                        <option value="128">SCENERY TRAVEL SERVICE (USD)</option>
                        <option value="472">SENSA (Sensatours) (USD)</option>
                        <option value="543">SER Travel (USD)</option>
                        <option value="512">SER VIAJEROS (USD)</option>
                        <option value="130">Setours (USD)</option>
                        <option value="192">Sevens Uruguai (USD)</option>
                        <option value="395">SIERRA MADRE (USD)</option>
                        <option value="411">SIESTA (USD)</option>
                        <option value="134">Smart Travel (USD)</option>
                        <option value="415">SMY Tours (USD)</option>
                        <option value="515">Snow Operadora (BRL)</option>
                        <option value="216">Soles Fun &amp; Leisure (USD)</option>
                        <option value="414">Solférias (USD)</option>
                        <option value="530">Star Travel UK Ltd (USD)</option>
                        <option value="137">Station Travel (USD)</option>
                        <option value="329">STRADA TRAVEL TOUR OPERATOR S.A (USD)</option>
                        <option value="138">Sudamerika CSI (USD)</option>
                        <option value="332">SUPORT - BOOKINGMOTOR (USD)</option>
                        <option value="465">SUPORTE - NETACTICA (ESP) (USD)</option>
                        <option value="532">SUPORTE - NETACTICA (ING) (USD)</option>
                        <option value="531">SUPORTE - NETACTICA (PORT) (USD)</option>
                        <option value="139">Sur Brasil (USD)</option>
                        <option value="140">Swan Turismo (USD)</option>
                        <option value="478">SWIND (South Winds) (USD)</option>
                        <option value="208">Tailorbeds (USD)</option>
                        <option value="133">Tamesys Mayorista x SNS (USD)</option>
                        <option value="432">TAYS4TRAVEL (USD)</option>
                        <option value="141">T-Block (USD)</option>
                        <option value="402">TBO Holidays (BRL)</option>
                        <option value="296">TC TRAVEL (USD)</option>
                        <option value="259">TDC Viajes (USD)</option>
                        <option value="344">TH OPERADORA (USD)</option>
                        <option value="471">The Luxury Travel (USD)</option>
                        <option value="317">Ticketya (USD)</option>
                        <option value="373">TIKA REPS SRL (USD)</option>
                        <option value="146">TMT Operadora (USD)</option>
                        <option value="534">TON TURISMO (BRL)</option>
                        <option value="181">Torremolinos Viajes S.A (USD)</option>
                        <option value="236">Tour Mundial (USD)</option>
                        <option value="423">Tourradar (USD)</option>
                        <option value="190">Tower Travel (USD)</option>
                        <option value="477">TPOST (The Postcard Life) (USD)</option>
                        <option value="346">TRANSVUELOS S.A (USD)</option>
                        <option value="298">TRAVEL ATOMEX , S.A. DE C.V (USD)</option>
                        <option value="397">TRAVEL GALLERY (USD)</option>
                        <option value="147">Travel Security (USD)</option>
                        <option value="355">TRAVEL TAILOR (USD)</option>
                        <option value="379">TRAVEL TODAY (USD)</option>
                        <option value="148">Travel Viajes Group (USD)</option>
                        <option value="56">Travel, Trade &amp; Experience (USD)</option>
                        <option value="345">TRAVELERO CORP (USD)</option>
                        <option value="537">TRAVELGATEX - SUPORTE (USD)</option>
                        <option value="421">Travelgea (USD)</option>
                        <option value="187">Traveltino (USD)</option>
                        <option value="149">Travex Security (USD)</option>
                        <option value="150">Trip Top (USD)</option>
                        <option value="494">TRIPLAN (USD)</option>
                        <option value="382">Tryvel Lda (USD)</option>
                        <option value="485">TSMAY (TS Mayorista) (USD)</option>
                        <option value="380">TSYACOM - SUPORTE (USD)</option>
                        <option value="151">TTS (USD)</option>
                        <option value="219">Turisclub (USD)</option>
                        <option value="557">TURISMO AL VUELO LTN COLOMBIA (USD)</option>
                        <option value="152">Turismo Rays (USD)</option>
                        <option value="153">Turismo Travel (USD)</option>
                        <option value="442">TURISMO TRAVEL/GRUPO TRAVEL (USD)</option>
                        <option value="305">Turista Internacional (USD)</option>
                        <option value="333">UNICOTOUR (USD)</option>
                        <option value="509">Universal Group (USD)</option>
                        <option value="196">Vacaciones Barcelo (USD)</option>
                        <option value="179">Vakaciona (USD)</option>
                        <option value="376">Vefa Travel Viagens e Turismo (USD)</option>
                        <option value="470">VELOSO (USD)</option>
                        <option value="156">Vete de Viaje (USD)</option>
                        <option value="177">Via Express (USD)</option>
                        <option value="549">VIAJA CON GANAS (USD)</option>
                        <option value="553">VIAJAR LH (USD)</option>
                        <option value="540">VIAJARFR@GMAIL.COM / Comissionado (BRL)</option>
                        <option value="359">Viajeroenlinea.com (USD)</option>
                        <option value="556">Viajersa (USD)</option>
                        <option value="518">VIAJES ESPACIAL (USD)</option>
                        <option value="431">Viajes Ikea (USD)</option>
                        <option value="420">VIAJES ONLINE (USD)</option>
                        <option value="158">Viajes Pacifico (USD)</option>
                        <option value="159">Viajo Bien - AR (USD)</option>
                        <option value="160">Viajo Bien - CH (USD)</option>
                        <option value="161">Viajo Bien - UR (USD)</option>
                        <option value="325">VIDA LATAM CORP (USD)</option>
                        <option value="425">Vip Global Marketing S.A (USD)</option>
                        <option value="353">VIP VIAJES (USD)</option>
                        <option value="398">Viva Vacations (USD)</option>
                        <option value="308">VM TOUR OPERADOR (USD)</option>
                        <option value="374">VOLEMOS.COM (USD)</option>
                        <option value="476">VOYAGE ASSOCIATIF (USD)</option>
                        <option value="163">VTD Vacaciones (USD)</option>
                        <option value="544">Wondella (USD)</option>
                        <option value="522">WOOBA JOURNEYS (BRL)</option>
                        <option value="342">WOW TURISMO OPERADOR DE VIAJES (USD)</option>
                        <option value="334">XPERIENCE TURISMO ALTERNATIVO SAS (USD)</option>
                        <option value="165">Yafar Destinos (USD)</option>
                        <option value="388">Ympar Experiências Personalizadas (BRL)</option>
                        <option value="167">Zanellato Viajes (USD)</option>
                        <option value="529">ZOAR TURISMO &amp; EVENTOS (BRL)</option>
                        <option value="455">ZUIDERHUIS WERELDREIZEN (USD)</option>
                    </select>

                    <button type="submit"
                        class="btn btn-primary px-5 mt-4 rounded-pill JS__reserva-next">Alterar</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Modal Fornecedor -->



<!-- Modal Confirma Reserva -->
<div class="modal fade" id="confirmareserva" tabindex="-1" aria-labelledby="confirmareserva" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary fs-24 fw-bold">Confirmar Reserva</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2 class="d-block text-primary fs-16 fw-500">Hotel 35080-1-HT</h2>
                <p class="mb-3 fs-6">TRF O.W. ARPT / HOTEL O V.V - 1 - Privado - Sólo chofer - IN</p>
                <form>
                    <button type="submit"
                        class="btn btn-primary px-5 mt-4 rounded-pill JS__reserva-next">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Modal Confirma Reserva -->


<!-- Modal Cancelamento Manual -->
<div class="modal fade" id="cancelamentomanual" tabindex="-1" aria-labelledby="cancelamentomanual" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary fs-24 fw-bold">Cancelamento manual</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2 class="d-block text-primary fs-16 fw-500">Reserva 35080-1-HT</h2>
                <div class="alert alert-danger mb-3" role="alert">
                    <h4 class="alert-heading fs-24"><span class="icon-alert-triangle"></span> Atenção!</h4>
                    <p class="mb-0 fs-6">Isso irá cancelar a reserva manualmente.</p>
                </div>
                <p class="mb-3 fs-6">Quer dizer que nenhum email será enviado e a reserva não será cancelada com as
                    interações / fornecedores. Esse recurso deve ser utilizado no caso de erro no processo de
                    cancelamento normal da reserva.</p>
                <form>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="Cart_ClienteReferencia" class="form-label">Moeda Custo</label>
                                <input class="form-control" id="Cart_ClienteReferencia" type="text" placeholder="BRL">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="Cart_ClienteReferencia" class="form-label">Valor Custo</label>
                                <input class="form-control" id="Cart_ClienteReferencia" type="text"
                                    placeholder="190,00">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="Cart_ClienteReferencia" class="form-label">Moeda Sale</label>
                                <input class="form-control" id="Cart_ClienteReferencia" type="text" placeholder="USD">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="Cart_ClienteReferencia" class="form-label">Valor Sale</label>
                                <input class="form-control" id="Cart_ClienteReferencia" type="text" placeholder="39">
                            </div>
                        </div>

                    </div>
                    <button type="submit"
                        class="btn btn-primary px-5 mt-4 rounded-pill JS__reserva-next">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Modal Cancelamento Manual -->


<!-- Modal Politica de Cancelamento -->
<div class="modal fade" id="politicadecancelamento" tabindex="-1" aria-labelledby="politicadecancelamento"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary fs-24 fw-bold">Política de Cancelamento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3" data-select2-id="select2-tipodepenalidade">
                                <label for="tipodepenalidade" class="form-label">Tipo de penalidade</label>
                                <select class="form-select JS__select select2-hidden-accessible" id="tipodepenalidade"
                                    data-select2-id="select2-data-tipodepenalidade" tabindex="-1" aria-hidden="true">

                                    <option selected="selected" value="1" data-select2-id="select2-data-13-dae3">Valor
                                        percentual</option>
                                    <option value="2" data-select2-id="select2-data-389-ti56">Valor fixo</option>
                                    <option value="3" data-select2-id="select2-data-390-1nl6">Quantidade de noites
                                    </option>
                                    <option value="4" data-select2-id="select2-data-391-36ka">Sem custo</option>

                                </select>
                            </div>

                            <div class="form-check form-switch mb-2 me-4">
                                <input class="form-check-input me-2" type="checkbox" id="hoteis-internos">
                                <label class="form-check-label" for="hoteis-internos">
                                    Reembolsável
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="Cart_ClienteReferencia" class="form-label">Deadline</label>
                                <input class="form-control" id="Cart_ClienteReferencia" type="text"
                                    placeholder="dd/mm/aaaa">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="Cart_ClienteReferencia" class="form-label">Valor percentual</label>
                                <input class="form-control" id="Cart_ClienteReferencia" type="text"
                                    placeholder="190,00">
                            </div>
                        </div>


                    </div>
                    <button type="submit"
                        class="btn btn-primary px-5 mt-4 rounded-pill JS__reserva-next">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Modal Politica de Cancelamento -->

<?php include('includes/footer.php') ?>


<script src="assets/js/pages/reserva.js"></script>