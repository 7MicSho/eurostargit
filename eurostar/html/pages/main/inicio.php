<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-4 col-md-6 order-0" style="margin-bottom: 1.1%;">
                    <a href="">
                        <div class="d-flex align-items-center row" style="padding-right: 4%;">
                            <div class="col-sm-12 bg-primary text-center" style="color: white; border-radius: 10px 10px 10px 10px;">
                                <i class="fa-solid fa-user-plus fa-3x mt-4"></i>
                                <p class="mt-3 pb-1">
                                    Agrega un nuevo prospecto
                                </p>
                            </div>
                        </div>
                    </a>
            </div>
            <div class="col-lg-4 col-md-6 order-1" style="margin-bottom: 1.1%;">
                    <a href="">
                        <div class="d-flex align-items-center row" style="padding-right: 4%;">
                            <div class="col-sm-12 bg-danger text-center" style="color: white; border-radius: 10px 10px 10px 10px;">
                                <i class="fa-solid fa-user-minus fa-3x mt-4"></i>
                                <p class="mt-3 pb-1">
                                    Consulta los prospectos existentes
                                </p>
                            </div>
                        </div>
                    </a>
            </div>
            <div class="col-lg-12 col-md-6 order-1" style="margin-bottom: 1.1%;">

                    <a href="">
                        <div class="d-flex align-items-center row" style="padding-right: 1%;">
                            <div class="col-sm-12 bg-warning text-center" style="color: white; border-radius: 10px 10px 10px 10px;">
                                <i class="fa-solid fa-user-minus fa-3x mt-4"></i>
                                <p class="mt-3 pb-1">
                                    Elimina un prospecto
                                </p>
                            </div>
                        </div>
                    </a>

            </div>
            <div class="col-lg-4 col-md-6 order-0" style="margin-bottom: 1.1%;">
                    <a href="">
                        <div class="d-flex align-items-center row" style="padding-right: 4%;">
                            <div class="col-sm-12 bg-success text-center" style="color: white; border-radius: 10px 10px 10px 10px;">
                                <i class="fa-solid fa-user-pen fa-3x mt-4"></i>
                                <p class="mt-3 pb-1">
                                    Edita la información de un prospecto
                                </p>
                            </div>
                        </div>
                    </a>
            </div>
        </div>
        <div class="row mt-4">
            <!-- Order Statistics -->
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Estadisticas por visitas</h5>
                            <small class="text-muted">42.82k Ventas totales</small>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                                <a class="dropdown-item" href="javascript:void(0);">Seleccionar todo</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refrescar</a>
                                <a class="dropdown-item" href="javascript:void(0);">Compartir</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <h2 class="mb-2">200</h2>
                                <span>Total de visitas</span>
                            </div>
                            <div id="orderStatisticsChart"></div>
                        </div>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-mobile-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Pintura Vinilica</h6>
                                        <small class="text-muted">Mobile, Earbuds, TV</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">82.5k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-success"><i
                                            class="bx bx-closet"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Pintura epoxica</h6>
                                        <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">23.8k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-info"><i
                                            class="bx bx-home-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Pintura 3</h6>
                                        <small class="text-muted">Fine Art, Dining</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">849k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-secondary"><i
                                            class="bx bx-football"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Sports</h6>
                                        <small class="text-muted">Football, Cricket Kit</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">99</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Order Statistics -->

            <!-- Expense Overview -->

            <!--/ Expense Overview -->

            <!-- Transactions -->
            <div class="col-md-6 col-lg-8 order-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Visitas más recientes</h5>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-circle-user fa-2x"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Juan García</small>
                                        <h6 class="mb-0">Medica Campestre</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">10-02-2023</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-circle-user fa-2x"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Roberto</small>
                                        <h6 class="mb-0">Robert's Company</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">05-02-2023</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-circle-user fa-2x"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Juan García</small>
                                        <h6 class="mb-0">Medica Campestre</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">20-01-2023</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-circle-user fa-2x"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Roberto</small>
                                        <h6 class="mb-0">Robert's Company</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">15-01-2023</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-circle-user fa-2x"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Juan García</small>
                                        <h6 class="mb-0">Medica Campestre</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">10-05-2023</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-circle-user fa-2x"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Roberto</small>
                                        <h6 class="mb-0">Robert's Company</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">10-05-2023</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->
        </div>
    </div>
</div>
<!-- / Content -->