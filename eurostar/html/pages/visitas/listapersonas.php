<div class="content-wraper">
    <div class="col-xl">
        <div class="col-12 text-center text-muted titlebanner-prospect">
            <h1 class="display-3 txt-title" style="margin: 0;"> Nueva Visita</h1>
        </div>
        <div class="col-sm-12" style="padding: 0 22px; margin-top: 30px;">
            <h1 class="display-6 text-muted mb-5"> Selecciona una persona para crear nueva visita</h1>
            <table id="table" class="table dataTable table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Compañia</th>
                        <th>Crear visita</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($prospectos); $i++) {
                        if ($_SESSION['typeuser'] == 'empleado' && $_SESSION['id_empleado'] == $prospectos[$i]['fk_id_vendedor']) {
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
                                    <form method="post" action="?modulo=visitas&accion=agregar">
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
                                        <input type="hidden" name="id_vendedor"
                                            value="<?php echo $prospectos[$i]['fk_id_vendedor'] ?>">
                                        <button type="submit" class="btn rounded-pill">
                                            <span class="fa-solid fa-plus"></span> Crear visita
                                        </button>
                                    </form>
                                </td>

                            </tr>
                            <?php
                        } elseif ($_SESSION['typeuser'] == 'admin') {
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
                                    <form method="post" action="?modulo=visitas&accion=agregar">
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
                                        <input type="hidden" name="id_vendedor"
                                            value="<?php echo $prospectos[$i]['fk_id_vendedor'] ?>">
                                        <button type="submit" class="btn rounded-pill">
                                            <span class="fa-solid fa-plus"></span> Crear visita
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        <?php }
                    }
                    for ($i = 0; $i < count($prosSinEmp); $i++) {
                        if ($_SESSION['typeuser'] == 'empleado' && $_SESSION['id_empleado'] == $prosSinEmp[$i]['fk_id_vendedor']) { ?>

                        <?php } else if ($_SESSION['typeuser'] == 'admin') { ?>
                                <tr>
                                    <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prosSinEmp[$i]['nombre']; ?>
                                    </td>
                                    <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prosSinEmp[$i]['primer_apellido'] . ' ' . $prosSinEmp[$i]['segundo_apellido']; ?>
                                    </td>
                                    <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo '+' . $prosSinEmp[$i]['codigo_pais'] . ' ' . $prosSinEmp[$i]['lada'] . $prosSinEmp[$i]['numero_telefono']; ?>
                                    </td>
                                    <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prosSinEmp[$i]['correo']; ?>
                                    </td>
                                    <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prosSinEmp[$i]['calle'] . ' ' . $prosSinEmp[$i]['numero'] . ' ' . $prosSinEmp[$i]['numero_int'] . ' ' . $prosSinEmp[$i]['colonia']; ?>
                                    </td>
                                    <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php
                                        echo 'Sin Empresa';
                                    ?>
                                    </td>
                                    <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <form method="post" action="?modulo=visitas&accion=agregar">
                                        <input type="hidden" name="id_persona"
                                            value="<?php echo $prosSinEmp[$i]['id_persona'] ?>">
                                        <input type="hidden" name="id_prospecto"
                                            value="<?php echo $prosSinEmp[$i]['id_prospecto'] ?>">
                                        <input type="hidden" name="id_correo"
                                            value="<?php echo $prosSinEmp[$i]['id_correo'] ?>">
                                        <input type="hidden" name="id_telefono"
                                            value="<?php echo $prosSinEmp[$i]['id_telefono'] ?>">
                                        <input type="hidden" name="id_direccion"
                                            value="<?php echo $prosSinEmp[$i]['id_direccion'] ?>">
                                        <input type="hidden" name="id_vendedor"
                                            value="<?php echo $prosSinEmp[$i]['fk_id_vendedor'] ?>">
                                        <button type="submit" class="btn rounded-pill">
                                            <span class="fa-solid fa-plus"></span> Crear visita
                                        </button>
                                    </form>
                                </td> 
                                </tr>

                        <?php }

                    }
                    ?>
                    <?php
                    for ($i = 0; $i < count($clientes); $i++) {
                        if ($_SESSION['typeuser'] == 'empleado' && $_SESSION['id_empleado'] == $clientes[$i]['fk_id_vendedor']) {
                            ?>
                            <tr>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientes[$i]['nombre']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientes[$i]['primer_apellido'] . ' ' . $clientes[$i]['segundo_apellido']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo '+' . $clientes[$i]['codigo_pais'] . ' ' . $clientes[$i]['lada'] . $clientes[$i]['numero_telefono']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientes[$i]['correo']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientes[$i]['calle'] . ' ' . $clientes[$i]['numero'] . ' ' . $clientes[$i]['numero_int'] . ' ' . $clientes[$i]['colonia']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php
                                    if ($clientes[$i]['nombre_emp'] != '') {
                                        echo $clientes[$i]['nombre_emp'];
                                    } else {
                                        echo 'Sin Empresa';
                                    }
                                    ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <form method="post" action="?modulo=visitas&accion=agregar">
                                        <input type="hidden" name="id_persona"
                                            value="<?php echo $clientes[$i]['id_persona'] ?>">
                                        <input type="hidden" name="id_cliente"
                                            value="<?php echo $clientes[$i]['id_cliente'] ?>">
                                        <input type="hidden" name="id_correo"
                                            value="<?php echo $clientes[$i]['id_correo'] ?>">
                                        <input type="hidden" name="id_telefono"
                                            value="<?php echo $clientes[$i]['id_telefono'] ?>">
                                        <input type="hidden" name="id_direccion"
                                            value="<?php echo $clientes[$i]['id_direccion'] ?>">
                                        <input type="hidden" name="id_empresa"
                                            value="<?php echo $clientes[$i]['id_empresa'] ?>">
                                        <input type="hidden" name="id_vendedor"
                                            value="<?php echo $clientes[$i]['fk_id_vendedor'] ?>">
                                        <button type="submit" class="btn rounded-pill">
                                            <span class="fa-solid fa-plus"></span> Crear visita
                                        </button>
                                    </form>
                                </td>

                            </tr>
                            <?php
                        } elseif ($_SESSION['typeuser'] == 'admin') {
                            ?>
                            <tr>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientes[$i]['nombre']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientes[$i]['primer_apellido'] . ' ' . $clientes[$i]['segundo_apellido']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo '+' . $clientes[$i]['codigo_pais'] . ' ' . $clientes[$i]['lada'] . $clientes[$i]['numero_telefono']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientes[$i]['correo']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientes[$i]['calle'] . ' ' . $clientes[$i]['numero'] . ' ' . $clientes[$i]['numero_int'] . ' ' . $clientes[$i]['colonia']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php
                                    if ($clientes[$i]['nombre_emp'] != '') {
                                        echo $clientes[$i]['nombre_emp'];
                                    } else {
                                        echo 'Sin Empresa';
                                    }
                                    ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <form method="post" action="?modulo=visitas&accion=agregar">
                                        <input type="hidden" name="id_persona"
                                            value="<?php echo $clientes[$i]['id_persona'] ?>">
                                        <input type="hidden" name="id_cliente"
                                            value="<?php echo $clientes[$i]['id_cliente'] ?>">
                                        <input type="hidden" name="id_correo"
                                            value="<?php echo $clientes[$i]['id_correo'] ?>">
                                        <input type="hidden" name="id_telefono"
                                            value="<?php echo $clientes[$i]['id_telefono'] ?>">
                                        <input type="hidden" name="id_direccion"
                                            value="<?php echo $clientes[$i]['id_direccion'] ?>">
                                        <input type="hidden" name="id_empresa"
                                            value="<?php echo $clientes[$i]['id_empresa'] ?>">
                                        <input type="hidden" name="id_vendedor"
                                            value="<?php echo $clientes[$i]['fk_id_vendedor'] ?>">
                                        <button type="submit" class="btn rounded-pill">
                                            <span class="fa-solid fa-plus"></span> Crear visita
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        <?php }
                    }
                    ?>
                    <?php
                    for ($i = 0; $i < count($clientesSinEmp); $i++) {
                        if ($_SESSION['typeuser'] == 'empleado' && $_SESSION['id_empleado'] == $clientesSinEmp[$i]['fk_id_vendedor']) {
                            ?>
                            <tr>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientesSinEmp[$i]['nombre']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientesSinEmp[$i]['primer_apellido'] . ' ' . $clientesSinEmp[$i]['segundo_apellido']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo '+' . $clientesSinEmp[$i]['codigo_pais'] . ' ' . $clientesSinEmp[$i]['lada'] . $clientesSinEmp[$i]['numero_telefono']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientesSinEmp[$i]['correo']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientesSinEmp[$i]['calle'] . ' ' . $clientesSinEmp[$i]['numero'] . ' ' . $clientesSinEmp[$i]['numero_int'] . ' ' . $clientesSinEmp[$i]['colonia']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php
                                    if ($clientesSinEmp[$i]['nombre_emp'] != '') {
                                        echo $clientesSinEmp[$i]['nombre_emp'];
                                    } else {
                                        echo 'Sin Empresa';
                                    }
                                    ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <form method="post" action="?modulo=visitas&accion=agregar">
                                        <input type="hidden" name="id_persona"
                                            value="<?php echo $clientesSinEmp[$i]['id_persona'] ?>">
                                        <input type="hidden" name="id_cliente"
                                            value="<?php echo $clientesSinEmp[$i]['id_cliente'] ?>">
                                        <input type="hidden" name="id_correo"
                                            value="<?php echo $clientesSinEmp[$i]['id_correo'] ?>">
                                        <input type="hidden" name="id_telefono"
                                            value="<?php echo $clientesSinEmp[$i]['id_telefono'] ?>">
                                        <input type="hidden" name="id_direccion"
                                            value="<?php echo $clientesSinEmp[$i]['id_direccion'] ?>">
                                        <input type="hidden" name="id_empresa"
                                            value="<?php echo $clientesSinEmp[$i]['id_empresa'] ?>">
                                        <input type="hidden" name="id_vendedor"
                                            value="<?php echo $clientesSinEmp[$i]['fk_id_vendedor'] ?>">
                                        <button type="submit" class="btn rounded-pill">
                                            <span class="fa-solid fa-plus"></span> Crear visita
                                        </button>
                                    </form>
                                </td>

                            </tr>
                            <?php
                        } elseif ($_SESSION['typeuser'] == 'admin') {
                            ?>
                            <tr>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientesSinEmp[$i]['nombre']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientesSinEmp[$i]['primer_apellido'] . ' ' . $clientesSinEmp[$i]['segundo_apellido']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo '+' . $clientesSinEmp[$i]['codigo_pais'] . ' ' . $clientesSinEmp[$i]['lada'] . $clientesSinEmp[$i]['numero_telefono']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientesSinEmp[$i]['correo']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $clientesSinEmp[$i]['calle'] . ' ' . $clientesSinEmp[$i]['numero'] . ' ' . $clientesSinEmp[$i]['numero_int'] . ' ' . $clientesSinEmp[$i]['colonia']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php
                                    if ($clientesSinEmp[$i]['nombre_emp'] != '') {
                                        echo $clientesSinEmp[$i]['nombre_emp'];
                                    } else {
                                        echo 'Sin Empresa';
                                    }
                                    ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <form method="post" action="?modulo=visitas&accion=agregar">
                                        <input type="hidden" name="id_persona"
                                            value="<?php echo $clientesSinEmp[$i]['id_persona'] ?>">
                                        <input type="hidden" name="id_cliente"
                                            value="<?php echo $clientesSinEmp[$i]['id_cliente'] ?>">
                                        <input type="hidden" name="id_correo"
                                            value="<?php echo $clientesSinEmp[$i]['id_correo'] ?>">
                                        <input type="hidden" name="id_telefono"
                                            value="<?php echo $clientesSinEmp[$i]['id_telefono'] ?>">
                                        <input type="hidden" name="id_direccion"
                                            value="<?php echo $clientesSinEmp[$i]['id_direccion'] ?>">
                                        <input type="hidden" name="id_empresa"
                                            value="<?php echo $clientesSinEmp[$i]['id_empresa'] ?>">
                                        <input type="hidden" name="id_vendedor"
                                            value="<?php echo $clientesSinEmp[$i]['fk_id_vendedor'] ?>">
                                        <button type="submit" class="btn rounded-pill">
                                            <span class="fa-solid fa-plus"></span> Crear visita
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        <?php }
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