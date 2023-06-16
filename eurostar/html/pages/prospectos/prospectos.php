<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="col-12 text-center text-muted titlebanner-prospect">
        <h1 class="display-2 txt-title" style="margin: 0;"> Administrar Prospectos</h1>
    </div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row" style="padding-left: 1.2%;">
            <div class="col-lg-4 col-md-6 order-0" style="margin-bottom: 1.1%;">
                <a href="?modulo=prospectos&accion=agregar">
                    <div class="d-flex align-items-center row" style="padding-right: 4%;">
                        <div class="col-sm-12 bg-primary text-center"
                            style="color: white; border-radius: 10px 10px 10px 10px;">
                            <i class="fa-solid fa-user-plus fa-3x mt-4"></i>
                            <p class="mt-3 pb-1">
                                Agrega un nuevo prospecto
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 order-1" style="margin-bottom: 1.1%;">
                <a href="?modulo=prospectos&accion=consultar">
                    <div class="d-flex align-items-center row" style="padding-right: 4%;">
                        <div class="col-sm-12 bg-danger text-center"
                            style="color: white; border-radius: 10px 10px 10px 10px;">
                            <i class="fa-solid fa-user fa-3x mt-4"></i>
                            <p class="mt-3 pb-1">
                                Consulta los prospectos existentes
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 order-0" style="margin-bottom: 1.1%;">
                <a href="?modulo=prospectos&accion=editar">
                    <div class="d-flex align-items-center row" style="padding-right: 4%;">
                        <div class="col-sm-12 bg-warning text-center"
                            style="color: white; border-radius: 10px 10px 10px 10px;">
                            <i class="fa-solid fa-user-pen fa-3x mt-4"></i>
                            <p class="mt-3 pb-1">
                                Edita la información de un prospecto
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <?php if ($_SESSION["typeuser"] == 'admin') { ?>

            <div class="row mt-4">
                <!-- Order Statistics -->
                <div class="col-lg-6 order-0 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between pb-0"
                            style="margin-bottom: 20px;">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card-title mb-0 align-items-center justify-content-center">
                                        <h5 class="m-0 me-2">Prospectos registrados por mes</h5>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <div class="d-flex flex-column align-items-center gap-1">
                                            <h2 class="mb-0">
                                                <?php
                                                echo count($prospectosOnly);
                                                ?>
                                            </h2>
                                            <span><small class="text-muted"> Total de prospectos </small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-lg-12 col-md-10 d-flex justify-content-center">
                                        <canvas class="p-3" id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h6><small class="text-muted"> Promedio de compra estimado</small></h6>
                            </div>

                            <ul class="p-0 m-0">
                                <?php
                                for ($i = 0; $i < 3; $i++) { ?>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-primary"><i
                                                    class="bx bx-mobile-alt"></i></span>
                                        </div>
                                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="user-progress">
                                                <small class="">
                                                    <?php echo $prospectosOnly[$i]['nombre'].' '.$prospectosOnly[$i]['primer_apellido']; ?>
                                                </small>
                                                <small class="fw-semibold">
                                                <?php if ($prospectosOnly[$i]['fk_id_empresa']!=NULL) {
                                                    for ($j = 0; $j < count($empresas); $j++) {
                                                        if ($prospectosOnly[$i]['fk_id_empresa'] == $empresas[$j]['id_empresa']) {
                                                            echo '<strong class="text-muted d-block mb-1">' . $empresas[$j]['nombre_emp'] . '</strong>';
                                                            $j = count($empresas);
                                                        }
                                                    }
                                                } else {
                                                    echo '<strong class="text-muted d-block mb-1">Sin empresa</strong>';
                                                } ?>
                                                </small>
                                            </div>
                                            <div class="me-2">
                                                <small class="text-muted">
                                                    <?php
                                                    echo $chartInfo[$i]['promedio_compra_mes'] . ' cubetas/mes'
                                                        ?>
                                                </small>
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
                <div class="col-lg-6 order-2 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Visitas más recientes</h5>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <?php
                                if (count($visitas) < 11) {
                                    $cont = count($visitas);
                                } else {
                                    $cont = 11;
                                }
                                for ($i = 0; $i < $cont; $i++) { ?>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-circle-user fa-2x"></i>
                                        </div>
                                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <?php if (isset($visitas[$i]['nombre_emp'])) {
                                                    for ($j = 0; $j < count($empresas); $j++) {
                                                        if ($visitas[$i]['fk_id_empresa'] == $empresas[$j]['id_empresa']) {
                                                            echo '<strong class="text-muted d-block mb-1">' . $visitas[$i]['nombre_emp'] . '</strong>';
                                                            $j = count($empresas);
                                                        }
                                                    }
                                                } else {
                                                    echo '<strong class="d-block mb-1">' . $visitas[$i]['nombre'] . ' ' . $visitas[$i]['primer_apellido'] . '</strong>';
                                                } ?>
                                                <h6 class="mb-0">
                                                    <?php if ($visitas[$i]['puesto'] != '') {
                                                        echo $visitas[$i]['puesto'];
                                                    } else {
                                                        echo '';
                                                    } ?>
                                                </h6>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div
                                                        class="user-progress d-flex align-items-center justify-content-end gap-1">
                                                        <small class="mb-0" style="text-transform: uppercase;">
                                                            <?php if ($visitas[$i]['fk_id_empresa']!='') {
                                                                for ($j = 0; $j < count($empresas); $j++) {
                                                                    if ($visitas[$i]['fk_id_empresa'] == $empresas[$j]['id_empresa']) {
                                                                        echo '<strong class="text-muted d-block mb-1">' . $empresas[$j]['nombre_emp'] . '</strong>';
                                                                        $j = count($empresas);
                                                                    }
                                                                }
                                                            } else {
                                                                echo '<strong class="text-muted d-block mb-1">S/E</strong>';
                                                            } ?>
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div
                                                        class="user-progress d-flex align-items-center justify-content-end gap-1">
                                                        <h6 class="mb-0">
                                                            <?php echo $visitas[$i]['fecha_visita'] . ' - ' . $visitas[$i]['hora_visita'] ?>
                                                        </h6>
                                                    </div>
                                                </div>
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

        <?php } ?>
    </div>
</div>
<!-- / Content -->
<script>
    const ctx = document.getElementById('myChart');
    var labels = meses();
    var data = [];

    data.push('<?php echo $chartInfoMonth[0]['mes3'] ?>');
    data.push('<?php echo $chartInfoMonth[0]['mes2'] ?>');
    data.push('<?php echo $chartInfoMonth[0]['mes1'] ?>');

    console.log(labels);
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [labels[2], labels[1], labels[0]],
            datasets: [{
                label: '# de Nuevos Prospectos',
                data: data,
                borderWidth: 1
            }]
        },
        options: {
        }
    });

    function meses() {
        const fechaHoy = new Date();
        var mesActual = fechaHoy.getMonth() + 1;
        var mesesArray = [];
        for (let i = 0; i < 6; i++) {
            if (mesActual == 0) {
                mesActual = 12;
            }
            switch (mesActual) {
                case 1:
                    mesesArray.push('Ene');
                    break;
                case 2:
                    mesesArray.push('Feb');
                    break;
                case 3:
                    mesesArray.push('Mar');
                    break;
                case 4:
                    mesesArray.push('Abr');
                    break;
                case 5:
                    mesesArray.push('May');
                    break;
                case 6:
                    mesesArray.push('Jun');
                    break;
                case 7:
                    mesesArray.push('Jul');
                    break;
                case 8:
                    mesesArray.push('Ago');
                    break;
                case 9:
                    mesesArray.push('Sep');
                    break;
                case 10:
                    mesesArray.push('Oct');
                    break;
                case 11:
                    mesesArray.push('Nov');
                    break;
                case 12:
                    mesesArray.push('Dic');
                    break;

                default:
                    break;
            }

            mesActual--;

        }
        return mesesArray;
    }

</script>