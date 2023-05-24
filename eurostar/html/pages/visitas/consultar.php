<div class="col-12 text-center titlebanner-visit">
    <h1 class="display-3 txt-title" style="margin: 0;"> Consultar visitas</h1>
</div>
<div class="content-wrapper">

    <!-- Content -->
    <div class="col-12">
        <div id="calendarvisit"></div>
    </div>
    <div class="container-xxl flex-grow-1 mt-3">
        <div class="col-12 d-flex justify-content-end">
            <a href="?modulo=visitas&accion=listapersonas">
                <button type="button" class="btn rounded-pill">
                    <i class="fa fa-plus me-1 text-primary" aria-hidden="true"></i> Nueva visita
                </button>
            </a>

        </div>

        <div class="col-sm-12" style="padding: 0 15px; margin-top: 30px;">
            <table id="table" class="table dataTable table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Empresa</th>
                        <th>Contacto</th>
                        <th>Vendedor</th>
                        <th>Observaciones</th>
                        <th>Más detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($visitas); $i++) {
                        $arrayEmpleado = explode('|', $visitas[$i]['empleado']);
                        $arrayTelefono = explode('|', $visitas[$i]['telefono_empleado']);
                        if ($_SESSION['typeuser'] == 'empleado') {
                            if ($_SESSION['id_empleado'] == $arrayEmpleado[0]) { ?>
                                <tr>
                                    <td data-label="fecha: " class="text-center font-w600" style="font-size:small;">
                                        <?php echo $visitas[$i]['fecha_visita'] . ' - ' . $visitas[$i]['hora_visita']; ?>
                                    </td>
                                    <td data-label="empresa: " class="text-center font-w600" style="font-size:small;">
                                        <?php
                                        if ($visitas[$i]['nombre_emp'] != '') {
                                            echo $visitas[$i]['nombre_emp'];
                                        } else {
                                            echo 'Sin empresa';
                                        }

                                        ?>
                                    </td>
                                    <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                        <?php echo $visitas[$i]['nombre'] . ' ' . $visitas[$i]['primer_apellido']; ?>
                                    </td>
                                    <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                        <?php echo $arrayEmpleado[1] ?>
                                    </td>
                                    <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                        <?php echo $visitas[$i]['observaciones'] ?>
                                    </td>
                                    <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                        <button type="button" class="btn rounded-pill" onclick="verMas(
                                    '<?php echo $visitas[$i]['id_persona']; ?>',
                                    '<?php echo $visitas[$i]['nombre'] ?>',
                                    '<?php echo $visitas[$i]['primer_apellido'] ?>',
                                    '<?php echo $visitas[$i]['segundo_apellido'] ?>',
                                    '<?php echo $visitas[$i]['curp'] ?>',
                                    '<?php echo $visitas[$i]['rfc'] ?>',
                                    '<?php echo $visitas[$i]['id_prospecto'] ?>',
                                    '<?php echo $visitas[$i]['puesto'] ?>',
                                    '<?php echo $visitas[$i]['id_correo'] ?>',
                                    '<?php echo $visitas[$i]['correo'] ?>',
                                    '<?php echo $visitas[$i]['tipo_correo_contacto'] ?>',
                                    '<?php echo $visitas[$i]['id_telefono'] ?>',
                                    '<?php echo $visitas[$i]['codigo_pais'] ?>',
                                    '<?php echo $visitas[$i]['lada'] ?>',
                                    '<?php echo $visitas[$i]['numero_telefono'] ?>',
                                    '<?php echo $visitas[$i]['tipo_telefono'] ?>',
                                    '<?php echo $visitas[$i]['id_direccion'] ?>',
                                    '<?php echo $visitas[$i]['calle'] ?>',
                                    '<?php echo $visitas[$i]['numero'] ?>',
                                    '<?php echo $visitas[$i]['numero_int'] ?>',
                                    '<?php echo $visitas[$i]['colonia'] ?>',
                                    '<?php echo $visitas[$i]['entre_calles'] ?>',
                                    '<?php echo $visitas[$i]['municipio'] ?>',
                                    '<?php echo $visitas[$i]['estado'] ?>',
                                    '<?php echo $visitas[$i]['pais'] ?>',
                                    '<?php echo $visitas[$i]['codigo_postal'] ?>',
                                    '<?php echo $visitas[$i]['id_empresa'] ?>',
                                    '<?php echo $visitas[$i]['nombre_emp'] ?>',
                                    '<?php echo $visitas[$i]['razon_social'] ?>',
                                    '<?php echo $visitas[$i]['rfc_emp'] ?>',
                                    '<?php echo $visitas[$i]['id_visitas'] ?>',
                                    '<?php echo $visitas[$i]['no_visita'] ?>',
                                    '<?php echo $visitas[$i]['fecha_visita'] ?>',
                                    '<?php echo $visitas[$i]['hora_visita'] ?>',
                                    '<?php echo $visitas[$i]['promociones'] ?>',
                                    '<?php echo $visitas[$i]['productos'] ?>',
                                    '<?php echo $visitas[$i]['observaciones'] ?>',
                                    '<?php echo $visitas[$i]['genera_venta'] ?>',
                                    '<?php echo $visitas[$i]['nombre_muestra'] ?>',
                                    '<?php echo $visitas[$i]['descripcion_muestra'] ?>',
                                    '<?php echo $visitas[$i]['fecha_compromiso'] ?>',
                                    '<?php echo $arrayEmpleado[1] ?>',
                                    '<?php echo '+' . $arrayTelefono[0] . ' ' . $arrayTelefono[1] . $arrayTelefono[2] ?>',
                                    '<?php echo $visitas[$i]['correo_empleado'] ?>'



                                );">
                                            <a href="#">
                                                <span class="fa-solid fa-magnifying-glass"></span>
                                            </a>
                                        </button>
                                        <button type="button" class="btn rounded-pill" onclick="verMas(
                                    '<?php echo $visitas[$i]['id_visitas'] ?>');">
                                            <a href="#">
                                                <span class="fa-solid fa-xmark"></span>
                                            </a>
                                        </button>
                                    </td>
                                    </td>

                                </tr>
                            <?php }
                        } elseif ($_SESSION['typeuser'] == 'admin') { ?>
                            <tr>
                                <td data-label="fecha: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $visitas[$i]['fecha_visita'] . ' - ' . $visitas[$i]['hora_visita']; ?>
                                </td>
                                <td data-label="empresa: " class="text-center font-w600" style="font-size:small;">
                                    <?php
                                    if ($visitas[$i]['nombre_emp'] != '') {
                                        echo $visitas[$i]['nombre_emp'];
                                    } else {
                                        echo 'Sin empresa';
                                    }

                                    ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $visitas[$i]['nombre'] . ' ' . $visitas[$i]['primer_apellido']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $arrayEmpleado[1] ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $visitas[$i]['observaciones'] ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <button type="button" class="btn rounded-pill" onclick="verMas(
                                    '<?php echo $visitas[$i]['id_persona']; ?>',
                                    '<?php echo $visitas[$i]['nombre'] ?>',
                                    '<?php echo $visitas[$i]['primer_apellido'] ?>',
                                    '<?php echo $visitas[$i]['segundo_apellido'] ?>',
                                    '<?php echo $visitas[$i]['curp'] ?>',
                                    '<?php echo $visitas[$i]['rfc'] ?>',
                                    '<?php echo $visitas[$i]['id_prospecto'] ?>',
                                    '<?php echo $visitas[$i]['puesto'] ?>',
                                    '<?php echo $visitas[$i]['id_correo'] ?>',
                                    '<?php echo $visitas[$i]['correo'] ?>',
                                    '<?php echo $visitas[$i]['tipo_correo_contacto'] ?>',
                                    '<?php echo $visitas[$i]['id_telefono'] ?>',
                                    '<?php echo $visitas[$i]['codigo_pais'] ?>',
                                    '<?php echo $visitas[$i]['lada'] ?>',
                                    '<?php echo $visitas[$i]['numero_telefono'] ?>',
                                    '<?php echo $visitas[$i]['tipo_telefono'] ?>',
                                    '<?php echo $visitas[$i]['id_direccion'] ?>',
                                    '<?php echo $visitas[$i]['calle'] ?>',
                                    '<?php echo $visitas[$i]['numero'] ?>',
                                    '<?php echo $visitas[$i]['numero_int'] ?>',
                                    '<?php echo $visitas[$i]['colonia'] ?>',
                                    '<?php echo $visitas[$i]['entre_calles'] ?>',
                                    '<?php echo $visitas[$i]['municipio'] ?>',
                                    '<?php echo $visitas[$i]['estado'] ?>',
                                    '<?php echo $visitas[$i]['pais'] ?>',
                                    '<?php echo $visitas[$i]['codigo_postal'] ?>',
                                    '<?php echo $visitas[$i]['id_empresa'] ?>',
                                    '<?php echo $visitas[$i]['nombre_emp'] ?>',
                                    '<?php echo $visitas[$i]['razon_social'] ?>',
                                    '<?php echo $visitas[$i]['rfc_emp'] ?>',
                                    '<?php echo $visitas[$i]['id_visitas'] ?>',
                                    '<?php echo $visitas[$i]['no_visita'] ?>',
                                    '<?php echo $visitas[$i]['fecha_visita'] ?>',
                                    '<?php echo $visitas[$i]['hora_visita'] ?>',
                                    '<?php echo $visitas[$i]['promociones'] ?>',
                                    '<?php echo $visitas[$i]['productos'] ?>',
                                    '<?php echo $visitas[$i]['observaciones'] ?>',
                                    '<?php echo $visitas[$i]['genera_venta'] ?>',
                                    '<?php echo $visitas[$i]['nombre_muestra'] ?>',
                                    '<?php echo $visitas[$i]['descripcion_muestra'] ?>',
                                    '<?php echo $visitas[$i]['fecha_compromiso'] ?>',
                                    '<?php echo $arrayEmpleado[1] ?>',
                                    '<?php echo '+' . $arrayTelefono[0] . ' ' . $arrayTelefono[1] . $arrayTelefono[2] ?>',
                                    '<?php echo $visitas[$i]['correo_empleado'] ?>'



                                );">
                                        <a href="#">
                                            <span class="fa-solid fa-magnifying-glass"></span>
                                        </a>
                                    </button>


                            </tr>

                        <?php } ?>

                    <?php } ?>
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
    <!-- / Content -->
</div>

<!-- Modal 1-->
<div class="modal fade" id="masDetalle" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row md-3 d-flex justify-content-end">
                    <div class="col-6">
                        <div class="text-center mb-4"
                            style="display: flex; align-items: center; justify-content: center;">
                            <h3 class="address-title pt-2 text-primary">Información de la visita</h3>
                        </div>
                    </div>
                    <div class="col mb-3 col-2">
                        <label for="emailExLarge" class="form-label"><i class="fa-regular fa-calendar text-primary"
                                style="margin-right: 4px;"></i>Fecha de visita</label>
                        <input type="text" id="fechavisita" name="fechavisita" class="form-control"
                            placeholder="DD-MM-YYYY" readonly />
                    </div>
                    <div class="col mb-0 col-2">
                        <label for="emailExLarge" class="form-label"><i class="fa-regular fa-clock text-primary"
                                style="margin-right: 4px;"></i>Hora de visita</label>
                        <input type="text" id="horavisita" name="horavisita" class="form-control" placeholder="HH:MM"
                            readonly />
                    </div>
                    <div class="col mb-0 col-2">
                        <label for="emailExLarge" class="form-label"><i class="fa-solid fa-hashtag text-primary"
                                style="margin-right: 4px;"></i>No de visita</label>
                        <input type="number" id="novisita" name="novisita" class="form-control" readonly />
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col mb-3 col-8">
                        <label for="nameExLarge" class="form-label"> <i class="fa-regular fa-building text-primary"
                                style="margin-right: 4px;"></i> Empresa </label>
                        <input type="text" id="empresaname" name="empresaname" class="form-control"
                            placeholder="Enter Name" readonly />
                        <label for="emailExLarge" class="form-label"><i class="fa-solid fa-hashtag text-primary"
                                style="margin-right: 4px; margin-top: 9px;"></i> Productos de interés</label>
                        <textarea type="text" id="productos" name="productos" class="form-control" rows="4"
                            style="resize: none;" readonly>
                        </textarea>
                    </div>
                    <div class="col mb-0 col-4">
                        <label for="emailExLarge" class="form-label"><i class="fa-solid fa-hashtag text-primary"
                                style="margin-right: 4px;"></i> Promociones aplicables</label>
                        <textarea type="text" id="promociones" name="promociones" class="form-control" rows="7"
                            style="resize: none;" readonly>
                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3 col-4">
                        <label for="nameExLarge" class="form-label"><i class="fa-regular fa-user text-primary"
                                style="margin-right: 4px;"></i> Contacto</label>
                        <input type="text" id="nombrecont" name="nombrecont" class="form-control"
                            placeholder="Enter Name" readonly />
                    </div>
                    <div class="col mb-0 col-sm-4">
                        <label for="emailExLarge" class="form-label"><i class="fa-solid fa-phone text-primary"
                                style="margin-right: 4px;"></i>Numero de teléfono de contacto</label>
                        <input type="text" id="numtelcont" name="numtel" class="form-control" placeholder="" readonly />
                    </div>
                    <div class="col mb-0 col-sm-4">
                        <label for="emailExLarge" class="form-label"><i class="fa-solid fa-at text-primary"
                                style="margin-right: 4px;"></i>Correo Electrónico</label>
                        <input type="text" id="emailcont" name="emailcont" class="form-control" placeholder=""
                            readonly />
                    </div>
                    <hr>
                    <div class="col mb-3 col-sm-4">
                        <label for="emailExLarge" class="form-label"><i class="fa-regular fa-calendar text-primary"
                                style="margin-right: 4px;"></i>Fecha de entrega muestra</label>
                        <input type="text" id="fechacomp" name="fechacomp" class="form-control" placeholder="DD-MM-YYYY"
                            readonly />
                    </div>
                    <div class="col mb-3 col-sm-8">
                        <label for="emailExLarge" class="form-label"><i class="fa-solid fa-hashtag text-primary"
                                style="margin-right: 4px; margin-top: 9px;"></i> Indicaciones de muestra</label>
                        <textarea type="text" id="indicaciones" name="indicaciones" class="form-control" rows="4"
                            style="resize: none;" readonly>
                        </textarea>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col mb-3 col-4">
                        <label for="nameExLarge" class="form-label"><i class="fa-regular fa-user text-primary"
                                style="margin-right: 4px;"></i>Vendedor</label>
                        <input type="text" id="namevendedor" class="form-control" placeholder="Enter Name" readonly />
                    </div>
                    <div class="col mb-0 col-4">
                        <label for="emailExLarge" class="form-label"><i class="fa-solid fa-phone text-primary"
                                style="margin-right: 4px;"></i>Teléfono</label>
                        <input type="text" id="telvendedor" class="form-control" placeholder="" readonly />
                    </div>
                    <div class="col mb-0 col-4">
                        <label for="emailExLarge" class="form-label"><i class="fa-solid fa-at text-primary"
                                style="margin-right: 4px;"></i>Correo Electrónico</label>
                        <input type="text" id="emailvendedor" class="form-control" placeholder="" readonly />
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameExLarge" class="form-label">Observaciones</label>
                        <textarea id="observaciones" name="observaciones" class="form-control" placeholder="Enter Name"
                            style="resize: none;" readonly>
                        </textarea>
                    </div>

                </div>
            </div>
            <hr>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="html\temas\eurostartemplate\assets\js\js-evo-calendar\evo-calendar.js"></script>
<script>
    function verMas(id_per, nombre, pap, sap, curp, rfc, id_pros, puesto, id_correo, correo, tcorreo, id_tel, codpais, lada, numtel, tipotel,
        id_dir, calle, num, numint, colonia, entcalles, municipio, estado, pais, cp, id_emp, nomemp, razonsoc, rfcemp, id_visita, numvisit, fechavisit, horavisit,
        promociones, prod, obs, generaventa, namemuestra, desc_muestra, fecha_comp, nombre_empleado, tel_vendedor, email_vendedor) {
        $('#masDetalle').modal('show');
        document.getElementById('fechavisita').value = fechavisit;
        document.getElementById('horavisita').value = horavisit;
        document.getElementById('novisita').value = numvisit;
        document.getElementById('empresaname').value = nomemp;
        document.getElementById('promociones').value = promociones;
        document.getElementById('productos').value = prod;
        document.getElementById('nombrecont').value = nombre + ' ' + pap + ' ' + sap;
        document.getElementById('numtelcont').value = '+' + codpais + ' ' + lada + numtel;
        document.getElementById('emailcont').value = correo;
        document.getElementById('observaciones').value = obs;
        document.getElementById('fechacomp').value = fecha_comp;
        document.getElementById('indicaciones').value = desc_muestra;
        document.getElementById('namevendedor').value = nombre_empleado;
        document.getElementById('telvendedor').value = tel_vendedor;
        document.getElementById('emailvendedor').value = email_vendedor;

    }

    // language
    $('#calendarvisit').evoCalendar({
        theme: 'Orange Coral',
        'language': 'es'
        // Supported language: en, es, de..
    });

    $("#calendarvisit").evoCalendar('addCalendarEvent', [
        <?php for ($i = 0; $i < count($visitas); $i++) {
            $arrayEmpleado = explode('|', $visitas[$i]['empleado']);
            ?>
                    <?php if ($_SESSION['typeuser'] == 'empleado') {
                        if ($_SESSION['id_empleado'] == $arrayEmpleado[0]) {
                            ?>
                                        {
                        id: '<?php echo $visitas[$i]['id_visitas'] ?>',
                        <?php if ($visitas[$i]['nombre_emp'] == 'N/A') {
                            echo 'name: "Visita ' . $visitas[$i]['nombre'] . ' ' . $visitas[$i]['primer_apellido'] . '",';
                        } else {
                            echo 'name: "Visita ' . strtoupper($visitas[$i]['nombre_emp']) . '",';
                        } ?>
            
                                            description: "Visitar a <?php echo $visitas[$i]['nombre'] . ' ' . $visitas[$i]['primer_apellido'] ?> a las <?php echo $visitas[$i]['hora_visita'] ?> hrs",
                        date: "<?php echo date("Y-m-d", strtotime($visitas[$i]['fecha_visita'] . '+ 1 days')); ?>",
                        type: "event"
                    },
                <?php }
                    } elseif ($_SESSION['typeuser'] == 'admin') { ?>
                            {
                    id: '<?php echo $visitas[$i]['id_visitas'] ?>',
                    <?php if ($visitas[$i]['nombre_emp'] == 'N/A') {
                        echo 'name: "Visita ' . $visitas[$i]['nombre'] . ' ' . $visitas[$i]['primer_apellido'] . '",';
                    } else {
                        echo 'name: "Visita ' . strtoupper($visitas[$i]['nombre_emp']) . '",';
                    } ?>
            
                                    description: "Visitar a <?php echo $visitas[$i]['nombre'] . ' ' . $visitas[$i]['primer_apellido'] ?> a las <?php echo $visitas[$i]['hora_visita'] ?> hrs",
                    date: "<?php echo date("Y-m-d", strtotime($visitas[$i]['fecha_visita'] . '+ 1 days')); ?>",
                    type: "event"
                },
            <?php } ?>
        <?php } ?>
    ]);
</script>