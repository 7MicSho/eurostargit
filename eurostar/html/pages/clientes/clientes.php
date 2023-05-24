<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="col-12 text-center text-muted titlebanner-cliente">
        <h1 class="display-2 txt-title" style="margin: 0;"> Administrar Clientes</h1>
    </div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row" style="padding-left: 1.2%;">
            <div class="col-lg-4 col-md-6 order-0" style="margin-bottom: 1.1%;">
                <a href="?modulo=clientes&accion=agregar">
                    <div class="d-flex align-items-center row" style="padding-right: 4%;">
                        <div class="col-sm-12 bg-primary text-center"
                            style="color: white; border-radius: 10px 10px 10px 10px;">
                            <i class="fa-solid fa-user-plus fa-3x mt-4"></i>
                            <p class="mt-3 pb-1">
                                Agrega un nuevo Cliente
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-12 order-1" style="margin-bottom: 1.1%;">
                <a href="?modulo=clientes&accion=consultar">
                    <div class="d-flex align-items-center row" style="padding-right: 4%;">
                        <div class="col-sm-12 bg-danger text-center"
                            style="color: white; border-radius: 10px 10px 10px 10px;">
                            <i class="fa-solid fa-user fa-3x mt-4"></i>
                            <p class="mt-3 pb-1">
                                Consulta los clientes existentes
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 order-0" style="margin-bottom: 1.1%;">
                <a href="?modulo=clientes&accion=editar">
                    <div class="d-flex align-items-center row" style="padding-right: 4%;">
                        <div class="col-sm-12 bg-warning text-center"
                            style="color: white; border-radius: 10px 10px 10px 10px;">
                            <i class="fa-solid fa-user-pen fa-3x mt-4"></i>
                            <p class="mt-3 pb-1">
                                Edita la información de un cliente
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
                        <div class="col-6">
                            <div class="card-title mb-0">
                                <h5 class="m-0 me-2">Ventas mensuales</h5>
                                <small class="text-muted">6 Ventas en el mes</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <div class="d-flex flex-column align-items-center gap-1">
                                    <h2 class="mb-0"><?php echo 16?></h2>
                                    <span><small class="text-muted"> Total de ventas </small></span>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <div class="text-center mb-3">
                            <h5 class="m-0 me-2">Ventas recientes</h5>
                            </div>
                        
                            <?php for ($i=0; $i < 3 ; $i++) { ?>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="bx bx-mobile-alt"></i></span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="user-progress">
                                            <?php 
                                                $ventas='2';
                                            ?>
                                            <small class="text-muted"><?php echo $ventas.' ventas / 2 visitas'?></small><br>
                                            <small class="fw-semibold"><?php
                                            $efectividad=$ventas/2*100;
                                            echo $efectividad.'% productividad'
                                            
                                            ?></small>
                                        </div>
                                        <div class="me-2">
                                            <h6 class="mb-0"><?php echo 'cliente '.($i+1) ?></h6>
                                            <small class="text-muted"><?php echo ''?></small>
                                        </div>
                                        
                                    </div>
                                </li>
                            <?php } ?>
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
                        <h5 class="card-title m-0 me-2">Últimos clientes agregados</h5>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <?php for ($i=0; $i < count($clientes); $i++) { ?>
                                <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-circle-user fa-2x"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1"><?php echo $clientes[$i]['nombre'].' '.$clientes[$i]['primer_apellido'] ?></small>
                                        <h6 class="mb-0"><?php if($clientes[$i]['nombre_emp']==''){
                                            echo 'Sin empresa';
                                        }else{
                                            echo $clientes[$i]['nombre_emp'];
                                        } ?></h6>
                                    </div>
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1"><?php echo 'Productos comprados'?></small>
                                    
                                        <h6 class="mb-0">Vinílica, Sellador</h6>
                                    
                                    </div>
                                    
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">10-02-2023</h6>
                                    </div>

                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->
        </div>
    </div>
</div>
<!-- / Content -->
<script>
    const ctx = document.getElementById('myChart');
    var labels=['cliente1','cliente2','cliente3'];
    var data=[2, 2,2];

    new Chart(ctx, {
        type: 'doughnut',
        data: {
        labels: labels,
        datasets: [{
            label: '# de Ventas',
            data: data,
            borderWidth: 1
        }]
        },
        options: {
        }
    });
    
</script>