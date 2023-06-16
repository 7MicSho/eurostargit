<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 order-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">GIROS MÁS VENDIDOS</h5>
                        <small class="text-success fw-semibold">
                            <span class="badge bg-label-success rounded-pill "> <i class="bx bx-up-arrow-alt"></i>  ultimos 30 dias</span>
                        </small>
                         <!-- 
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Últimos 28 Días</a>
                                <a class="dropdown-item" href="javascript:void(0);">Último Mes</a>
                                <a class="dropdown-item" href="javascript:void(0);">Último Año</a>

                            
                            </div>
                        </div>-->
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                        <?php for ($i=0; $i < count($mercado) ; $i++) {  ?>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-info"><i
                                            class="bx bx-world"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0"><?php echo $mercado[$i]['nombre_giro'] ?></h6>
                                        <small class="text-muted"> MERCADO: <?php echo $mercado[$i]['nombre_mercado'] ?> </small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold"><?php echo $mercado[$i]['suma'] ?> <strong> </strong></small>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                        </ul>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 order-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">GIROS MÁS PROSPECTADOS</h5>
                        <small class="text-success fw-semibold">
                            <span class="badge bg-label-success rounded-pill "> <i class="bx bx-up-arrow-alt"></i>  ultimos 30 dias</span>
                        </small>
                         <!-- 
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Últimos 28 Días</a>
                                <a class="dropdown-item" href="javascript:void(0);">Último Mes</a>
                                <a class="dropdown-item" href="javascript:void(0);">Último Año</a>

                            
                            </div>
                        </div>-->
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                        <?php for ($i=0; $i < count($mercadop) ; $i++) {  ?>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-info"><i
                                            class="bx bx-world"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0"><?php echo $mercadop[$i]['nombre_giro'] ?></h6>
                                        <small class="text-muted"> MERCADO: <?php echo $mercadop[$i]['nombre_mercado'] ?> </small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold"><?php echo $mercadop[$i]['suma'] ?> <strong> </strong></small>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                        </ul>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 order-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">PRODUCTOS MÁS VENDIDOS</h5>
                        <small class="text-success fw-semibold">
                            <span class="badge bg-label-success rounded-pill "> <i class="bx bx-up-arrow-alt"></i>  ultimos 30 dias</span>
                        </small>
                         <!-- 
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Últimos 28 Días</a>
                                <a class="dropdown-item" href="javascript:void(0);">Último Mes</a>
                                <a class="dropdown-item" href="javascript:void(0);">Último Año</a>

                            
                            </div>
                        </div>-->
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">

                        <?php for ($i=0; $i < count($ventas) ; $i++) {  ?>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-brush"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0"><?php echo $ventas[$i]['descripcion_tipo_pro'] ?></h6>
                                        <small class="text-muted"><?php echo $ventas[$i]['cantidad_vendida'] ?> UNIDAD(ES) VENDIDAS </small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">$<?php echo $ventas[$i]['total_neto_vendido'] ?> <strong> MXN</strong></small>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>

                        
                        <?php ?>



                        

                        </ul>
                        <hr>
                        <div >
                            
                            <div class="d-flex flex-column align-items-center gap-1 mt-10">
                                
                                    <h5><?php echo $c_ventm[0]['total']  ?> PEDIDOS / <?php echo $dventas[0]['total']  ?> UNIDADES</h5>
                                
                                </div>
                                
                               
                            </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-6 order-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">MEJORES VENDEDORES</h5>
                        <small class="text-success fw-semibold">
                            <span class="badge bg-label-success rounded-pill "> <i class="bx bx-up-arrow-alt"></i>  ultimos 30 dias</span>
                        </small>
                        
                        <!--
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Últimos 28 Días</a>
                                <a class="dropdown-item" href="javascript:void(0);">Último Mes</a>
                                <a class="dropdown-item" href="javascript:void(0);">Último Año</a>
                            </div>
                        </div> -->
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">



                            <?php for ($i = 0; $i < count($emplyeds); $i++) { ?>

                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="html/image/personas/<?php echo $emplyeds[$i]['image_name']; ?>"
                                            alt="Oneplus" class="w-px-40 h-auto rounded-circle">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">
                                                <?php echo $emplyeds[$i]['nombre'] . ' ' . $emplyeds[$i]['primer_apellido'] ?>
                                            </small>
                                            <h6 class="mb-0">
                                                <?php echo $emplyeds[$i]['cantidad_ventas'] ?> UNIDAD(ES) VENDIDAS
                                            </h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">+$
                                                <?php echo $emplyeds[$i]['total_ventas']; ?>
                                            </h6>
                                            <span class="text-muted">MXN</span>
                                        </div>
                                    </div>
                                </li>

                            <?php } ?>







                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 order-1">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-warning"><i
                                            class="bx bx-user-plus"></i></span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="?modulo=prospectos&accion=administrar">Ver
                                            todos</a>
                                        <a class="dropdown-item" href="?modulo=prospectos&accion=agregar">Agregar
                                            Nuevo</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-4">PROSPECTOS</span>
                            <h3 class="card-title mb-2"><?php echo $c_pros[0]['total'] ?></h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +<?php echo $c_prosm[0]['total'] ?> <span
                                    class="badge bg-label-success rounded-pill">ultimo 30 dias</span></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-happy-alt"></i></span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="?modulo=clientes&accion=administrar">Ver
                                            todos</a>
                                        <a class="dropdown-item" href="?modulo=clientes&accion=agregar">Agregar
                                            Nuevo</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-4">CLIENTES</span>
                            <h3 class="card-title mb-2"><?php echo $c_clie[0]['total'] ?></h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +<?php echo $c_cliem[0]['total'] ?> <span
                                    class="badge bg-label-success rounded-pill">ultimo 30 dias</span></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-success"><i
                                            class="bx bx-box"></i></span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="?modulo=producto&accion=galeria">Ver todos</a>
                                        <a class="dropdown-item" href="?modulo=prospectos&accion=agregar">Agregar
                                            Nuevo</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-4">PRODUCTOS</span>
                            <h3 class="card-title mb-2"><?php echo $c_prod[0]['total'] ?></h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +<?php echo $c_prodm[0]['total'] ?> <span
                                    class="badge bg-label-success rounded-pill">ultimo 30 dias</span></small>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-user-plus"></i></span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="?modulo=empleado&accion=home">Ver todos</a>
                                        <a class="dropdown-item" href="?modulo=empleado&accion=agregar">Agregar
                                            Nuevo</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-4">EMPLEADOS</span>
                            <h3 class="card-title mb-2"><?php echo $c_empl[0]['total'] ?></h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +<?php echo $c_emplm[0]['total'] ?> <span
                                    class="badge bg-label-success rounded-pill">ultimo 30 dias</span></small>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-12 mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-danger"><i
                                            class="bx bx-cuboid"></i></span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">Ver todos</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Agregar Nuevo</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-4">PROVEEDORES</span>
                            <h3 class="card-title text-nowrap mb-1"><?php echo $c_prov[0]['total'] ?></h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +<?php echo $c_provm[0]['total'] ?> <span
                                    class="badge bg-label-success rounded-pill">ultimo 30 dias</span></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-success"><i
                                            class="bx bx-box"></i></span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">Ver todos</a>
                                        <a class="dropdown-item" href="?modulo=prospectos&accion=agregar">Agregar
                                            Nuevo</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-4">VENTAS</span>
                            <h3 class="card-title mb-2"><?php echo $c_vent[0]['total'] ?></h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +<?php echo $c_ventm[0]['total'] ?> <span
                                    class="badge bg-label-success rounded-pill">ultimo 30 dias</span></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="card">
                        <a href="?modulo=admin&accion=viewpowerbi">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                    <div class="d-flex flex-sm-column align-items-start justify-content-between">
                                        <div class="card-title">
                                            <h5 class="text-nowrap">POWER BI</h5>
                                            <span class="badge bg-label-warning rounded-pill">FEBRERO 2023</span>
                                        </div>
                                        <div class="mt-0">
                                            <img src="" alt="">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                <div class="d-flex flex-sm-column align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap">INFORME</h5>
                                        <small class="text-success fw-semibold">
                            <span class="badge bg-label-success rounded-pill "> <i class="bx bx-up-arrow-alt"></i>  ultimos 30 dias</span>
                        </small>
                                    </div>
                                    <div class="mt-0">
                                        <h4 class="mb-3">$ <?php echo $total[0]['total']; ?> <small> MXN</small> </h4>
                                       
                                    </div>
                                </div>
                                <div id="profileReportChart"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>






        </div>















        <!--
        <div class="row">

            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Enhorabuena, Ing. Norberto Roque!
                                    🎉
                                </h5>
                                <p class="mb-4">
                                    Tus ventas han aumentado un <span class="fw-bold">72%</span> más
                                    este mes.
                                    Ver tablero de resultados.
                                </p>
                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">Power
                                    Bi</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body px-md-4">
                                <img src="<?php echo ASSETS ?>/img/illustrations/pintura-1.png" height="130" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="<?php echo ASSETS ?>/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-3" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                            <a class="dropdown-item" href="javascript:void(0);">View
                                                More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span>Ventas</span>
                                <h3 class="card-title text-nowrap mb-1">$4,67</h3>
                                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card" style="height:465px">
                    <div class="row row-bordered g-0">
                        <div class="col-md-8">
                            <h5 class="card-header m-0 me-2 pb-3">Total Ventas</h5>
                            <br>
                            <div id="totalRevenueChart" class="px-2"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            2022
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                            <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="growthChart"></div>
                            <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                            <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                <div class="d-flex">
                                    <div class="me-2">
                                        <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>2022</small>
                                        <h6 class="mb-0">$32.5k</h6>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>2021</small>
                                        <h6 class="mb-0">$41.2k</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                    <div class="col-6 mb-4" style="height: 10px;">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="<?php echo ASSETS ?>/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-2" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                            <a class="dropdown-item" href="javascript:void(0);">View
                                                More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="d-block mb-1">Pago</span>
                                <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                                <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="<?php echo ASSETS ?>/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-2" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                            <a class="dropdown-item" href="javascript:void(0);">View
                                                More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Transacc</span>
                                <h3 class="card-title mb-2">$14,8</h3>
                                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                            </div>
                        </div>

                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                            <div class="card-title">
                                                <h5 class="text-nowrap mb-2">Profile Report</h5>
                                                <span class="badge bg-label-warning rounded-pill">Año
                                                    2021</span>
                                            </div>
                                            <div class="mt-sm-auto">
                                                <small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i> 68.2%</small>
                                                <h3 class="mb-0">$84,686k</h3>
                                            </div>
                                        </div>
                                        <div id="profileReportChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-12 mb-4 mb-md-0">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Productos vendidos</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Últimos 28 Días</a>
                                <a class="dropdown-item" href="javascript:void(0);">Último Mes</a>
                                <a class="dropdown-item" href="javascript:void(0);">Último Año</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Categoria</th>
                                    <th>Metodo de pago</th>
                                    <th>Estatus de Orden</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="<?php echo ASSETS ?>/img/illustrations/pcafe.png" alt="Oneplus" height="32" width="32" class="me-2">
                                            <div class="d-flex flex-column">
                                                <span class="fw-semibold lh-1">Galón de pintura</span>
                                                <small class="text-muted">20 lts</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class="bx bx-mobile-alt bx-xs"></i></span> Acrilica</td>
                                    <td>
                                        <div class="text-muted lh-1"><span class="text-primary fw-semibold">$120</span>/499</div>
                                        <small class="text-muted">Partially Paid</small>
                                    </td>
                                    <td><span class="badge bg-label-primary">Confirmada</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="<?php echo ASSETS ?>/img/illustrations/pamarilla.png" alt="Apple" height="32" width="32" class="me-2">
                                            <div class="d-flex flex-column">
                                                <span class="fw-semibold lh-1">Galón de pintura</span>
                                                <small class="text-muted">20 lts</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"><i class="bx bx-mouse bx-xs"></i></span> Vinilica</td>
                                    <td>
                                        <div class="lh-1"><span class="text-primary fw-semibold">$149</span>
                                        </div>
                                        <small class="text-muted">Fully Paid</small>
                                    </td>
                                    <td><span class="badge bg-label-success">Completada</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="<?php echo ASSETS ?>/img/illustrations/pnegra.png" alt="Apple" height="32" width="32" class="me-2">
                                            <div class="d-flex flex-column">
                                                <span class="fw-semibold lh-1">Galón de pintura</span>
                                                <small class="text-muted">4 lts</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-info rounded-pill badge-center p-3 me-2"><i class="bx bx-desktop bx-xs"></i></span> Epoxica</td>
                                    <td>
                                        <div class="text-muted lh-1"><span class="text-primary fw-semibold">$0</span>/899</div>
                                        <small class="text-muted">Unpaid</small>
                                    </td>
                                    <td><span class="badge bg-label-danger">Cancelada</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="<?php echo ASSETS ?>/img/illustrations/pamarilla.png" alt="Samsung" height="32" width="32" class="me-2">
                                            <div class="d-flex flex-column">
                                                <span class="fw-semibold lh-1">Pintura en Aerosol</span>
                                                <small class="text-muted">200 ml</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class="bx bx-mobile-alt bx-xs"></i></span> Acrilica</td>
                                    <td>
                                        <div class="lh-1"><span class="text-primary fw-semibold">$149</span>
                                        </div>
                                        <small class="text-muted">Fully Paid</small>
                                    </td>
                                    <td><span class="badge bg-label-success">Completada</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="<?php echo ASSETS ?>/img/illustrations/pmorada.png" alt="Apple" height="32" width="32" class="me-2">
                                            <div class="d-flex flex-column">
                                                <span class="fw-semibold lh-1">Pintura en Aerosol</span>
                                                <small class="text-muted">200 ml</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class="bx bx-mobile-alt bx-xs"></i></span> Vinilica</td>
                                    <td>
                                        <div class="lh-1"><span class="text-primary fw-semibold">$399</span>
                                        </div>
                                        <small class="text-muted">Fully Paid</small>
                                    </td>
                                    <td><span class="badge bg-label-success">Completada</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="<?php echo ASSETS ?>/img/illustrations/pblanca.png" alt="Xiaomi" height="32" width="32" class="me-2">
                                            <div class="d-flex flex-column">
                                                <span class="fw-semibold lh-1">Galón de pintura</span>
                                                <small class="text-muted">20 lts</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-danger rounded-pill badge-center p-3 me-2"><i class="bx bx-tv bx-xs"></i></span> Epoxica</td>
                                    <td>
                                        <div class="text-muted lh-1"><span class="text-primary fw-semibold">$349</span>/2499</div>
                                        <small class="text-muted">Partially Paid</small>
                                    </td>
                                    <td><span class="badge bg-label-primary">Confirmada</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="<?php echo ASSETS ?>/img/illustrations/pcafe.png" alt="Logitech" height="32" width="32" class="me-2">
                                            <div class="d-flex flex-column">
                                                <span class="fw-semibold lh-1">Galón de pintura</span>
                                                <small class="text-muted">20 lts</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"><i class="bx bx-mouse bx-xs"></i></span> Epoxica</td>
                                    <td>
                                        <div class="lh-1"><span class="text-primary fw-semibold">$89</span>
                                        </div>
                                        <small class="text-muted">Fully Paid</small>
                                    </td>
                                    <td><span class="badge bg-label-primary">Completada</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
-->
    </div>