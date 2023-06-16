<?php define('IMG_RUTE','html/image/personas/prospectos/'); ?>
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class=" d-flex align-items-center flex-column">
                                <img class="img-fluid rounded my-4" src="<?php echo IMG_RUTE.$prospecto[0]['image_name'] ?>" height="110"
                                    width="110" alt="User avatar">
                                <div class="user-info text-center">
                                    <h4 class="mb-2">
                                        <?php echo $prospecto[0]['nombre']; ?>
                                    </h4>
                                    <?php if($prospecto[0]['puesto']!=''){
                                        echo
                                        '
                                        <span class="badge bg-label-secondary">'.$prospecto[0]['puesto'].'</span>
                                        ';
                                    } ?>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around flex-wrap my-4 py-3">

                            <div class="d-flex align-items-start mt-3 gap-3">
                                <span class="badge bg-label-primary p-2 rounded"><i
                                        class="bx bx-customize bx-sm"></i></span>
                                <div>
                                    <h5 class="mb-0"><?php echo count($visitas) ?></h5>
                                    <?php if(count($visitas)<=1){ ?>
                                    <span>Visita</span>
                                    <?php }else{ ?>
                                        <span>Visitas</span>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <h5 class="pb-2 border-bottom mb-4">Información</h5>
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Nombre:</span>
                                    <span>
                                        <?php echo $prospecto[0]['nombre'] . ' ' . $prospecto[0]['primer_apellido'] . ' ' . $prospecto[0]['segundo_apellido']; ?>
                                    </span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Email:</span>
                                    <span>
                                        <?php echo $prospecto[0]['correo']; ?>
                                    </span>
                                </li>
                                <?php if($prospecto[0]['nombre_emp']!=''){ ?>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Empresa:</span>
                                    <span>
                                    <?php echo $prospecto[0]['nombre_emp'];?>
                                    </span>
                                </li>
                                <?php }?>
                                         
                                    
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Teléfono:</span>
                                    <span>
                                        <?php echo '+' . $prospecto[0]['codigo_pais'] . ' ' . $prospecto[0]['lada'] . $prospecto[0]['numero_telefono']; ?>
                                    </span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Dirección:</span>
                                    <span>
                                        <?php echo $prospecto[0]['calle'] . ' #' . $prospecto[0]['numero'] . ' ' . $prospecto[0]['numero_int'] . ' Col.' . $prospecto[0]['colonia'] . ' ' . $prospecto[0]['codigo_postal']; ?>
                                    </span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Entre calles:</span>
                                    <span>
                                        <?php echo $prospecto[0]['entre_calles']; ?>
                                    </span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Ciudad:</span>
                                    <span>
                                        <?php echo $prospecto[0]['municipio'] . ', ' . $prospecto[0]['estado']; ?>
                                    </span>
                                </li>
                            </ul>
                            <!--
                            <div class="d-flex justify-content-center pt-3">
                                <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                                    data-bs-toggle="modal">Edit</a>
                                <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a>
                            </div>
-->
                        </div>
                    </div>
                </div>
                <!-- /User Card -->
            </div>
            <!--/ User Sidebar -->


            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                <!-- User Pills -->
                <ul class="nav nav-pills flex-column flex-md-row mb-3 justify-content-end">
                    <li class="nav-item">
                        <form method="post" action="?modulo=visitas&accion=agregar">
                            <input type="hidden" name="id_persona" value="<?php echo $prospecto[0]['id_persona'] ?>">
                            <input type="hidden" name="id_prospecto"
                                value="<?php echo $prospecto[0]['id_prospecto'] ?>">
                            <input type="hidden" name="id_correo" value="<?php echo $prospecto[0]['id_correo'] ?>">
                            <input type="hidden" name="id_telefono" value="<?php echo $prospecto[0]['id_telefono'] ?>">
                            <input type="hidden" name="id_direccion"
                                value="<?php echo $prospecto[0]['id_direccion'] ?>">
                            <input type="hidden" name="id_empresa" value="<?php echo $prospecto[0]['id_empresa'] ?>">
                            <button type="submit" class="btn rounded-pill">
                                <i class="fa fa-plus me-1 text-primary"></i> Nueva visita
                            </button>
                        </form>
                    </li>
                </ul>
                <!--/ User Pills -->

                <!-- Project table -->
                <div class="card mb-4" style="padding: 0px 15px;">
                    <h5 class="card-header">Visitas registradas</h5>
                    <div class="table-responsive mb-3">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <table id="table" class="table dataTable table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Fecha de visita</th>
                                        <th>Comentarios</th>
                                        <th>Estatus</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($visitas); $i++) { ?>
                                        <tr>
                                            <td data-label="nombre: " class="text-center font-w600"
                                                style="font-size:small;">
                                                <?php echo $visitas[$i]['fecha_visita'].' - '.$visitas[$i]['hora_visita']; ?>
                                            </td>
                                            <td data-label="nombre: " class="text-center font-w600"
                                                style="font-size:small;">
                                                <?php echo $visitas[$i]['observaciones']; ?>
                                            </td>
                                            <td data-label="nombre: " class="text-center font-w600"
                                                style="font-size:small;">
                                                <?php
                                                $estatus=$visitas[$i]['estatus'];
                                                switch ($estatus) {
                                                    case '3':
                                                        $estado='PENDIENTE';
                                                        break;
                                                    case '2':
                                                        $estado='CONCLUIDA';
                                                        break;
                                                    case '1':
                                                        $estado='CANCELADA';
                                                        break;
                                                    
                                                    default:
                                                        $estado='ESTATUS NO DISPONIBLE';
                                                        break;
                                                }
                                                echo $estado;
                                                ?>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Fecha de visita</th>
                                        <th>Comentarios</th>
                                        <th>Estatus</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Project table -->


            </div>
            <!--/ User Content -->
        </div>
    </div>
    <!-- / Content -->
</div>