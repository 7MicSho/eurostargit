<div class="content-wraper">
    <div class="col-xl">
        <div class="col-12 text-center text-muted titlebanner-prospect">
            <h1 class="display-3 txt-title" style="margin: 0;"> Consultar Prospectos</h1>
        </div>
        <div class="col-sm-12" style="padding: 0 22px; margin-top: 30px;">
            <h1 class="display-6 text-muted mb-5"> Selecciona un prospecto para ver detalles y crear visitas</h1>
            <table id="table" class="table dataTable table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Compañia</th>
                        <th>Ver más</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($prospectos); $i++) {
                        if ($_SESSION['typeuser'] == 'empleado' && $_SESSION['id_empleado'] == $prospectos[$i]['id_empleado']) {
                            ?>
                            <tr>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['nombre']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['primer_apellido'] . ' ' . $prospectos[$i]['segundo_apellido']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo '+' . $prospectos[$i]['codigo_pais'] . ' ' . $prospectos[$i]['lada'] . $prospectos[$i]['numero_telefono']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['correo']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['calle'] . ' ' . $prospectos[$i]['numero'] . ' ' . $prospectos[$i]['numero_int'] . ' ' . $prospectos[$i]['colonia']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php
                                    if ($prospectos[$i]['nombre_emp'] != '') {
                                        echo $prospectos[$i]['nombre_emp'];
                                    } else {
                                        echo 'Sin Empresa';
                                    }
                                    ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <form method="post" action="?modulo=visitas&accion=carrito&p=<?php echo $_GET['p']; ?>">
                                        <input type="hidden" name="id_persona"
                                            value="<?php echo $prospectos[$i]['id_persona'] ?>">
                                        <input type="hidden" name="id_prospecto"
                                            value="<?php echo $prospectos[$i]['id_prospecto'] ?>">
                                        <input type="hidden" name="id_correo"
                                            value="<?php echo $prospectos[$i]['id_correo'] ?>"> 
                                        <input type="hidden" name="id_telefono"
                                            value="<?php echo $prospectos[$i]['id_telefono'] ?>">
                                        <input type="hidden" name="id_direccion"
                                            value="<?php echo $prospectos[$i]['id_direccion'] ?>">
                                        <input type="hidden" name="id_empresa"
                                            value="<?php echo $prospectos[$i]['id_empresa'] ?>">
                                        <input type="hidden" name="producto" 
                                            value="<?php echo $_GET['p']; ?>">
                                        <button type="submit" class="btn rounded-pill">
                                            <span class="fa-solid fa-circle-check"></span> Seleccionar
                                        </button>
                                    </form>
                                </td>

                            </tr>
                            <?php
                        } elseif ($_SESSION['typeuser'] == 'admin') { ?>
                            <tr>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['nombre']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['primer_apellido'] . ' ' . $prospectos[$i]['segundo_apellido']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo '+' . $prospectos[$i]['codigo_pais'] . ' ' . $prospectos[$i]['lada'] . $prospectos[$i]['numero_telefono']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['correo']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['calle'] . ' ' . $prospectos[$i]['numero'] . ' ' . $prospectos[$i]['numero_int'] . ' ' . $prospectos[$i]['colonia']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php
                                    if ($prospectos[$i]['nombre_emp'] != '') {
                                        echo $prospectos[$i]['nombre_emp'];
                                    } else {
                                        echo 'Sin Empresa';
                                    }
                                    ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <form method="post" action="?modulo=visitas&accion=carrito&p=<?php echo $_GET['p'] ?>">
                                        <input type="hidden" name="id_persona"
                                            value="<?php echo $prospectos[$i]['id_persona'] ?>">
                                        <input type="hidden" name="id_prospecto"
                                            value="<?php echo $prospectos[$i]['id_prospecto'] ?>">
                                        <input type="hidden" name="id_correo"
                                            value="<?php echo $prospectos[$i]['id_correo'] ?>">
                                        <input type="hidden" name="id_telefono"
                                            value="<?php echo $prospectos[$i]['id_telefono'] ?>">
                                        <input type="hidden" name="id_direccion"
                                            value="<?php echo $prospectos[$i]['id_direccion'] ?>">
                                        <input type="hidden" name="id_empresa"
                                            value="<?php echo $prospectos[$i]['id_empresa'] ?>">
                                        <input type="hidden" name="producto" value="<?php echo $_GET['p'] ?>">
                                        <button type="submit" class="btn rounded-pill">
                                            <span class="fa-solid fa-circle-check"></span> Seleccionar
                                        </button>
                                    </form>
                                </td>

                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Compañia</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>