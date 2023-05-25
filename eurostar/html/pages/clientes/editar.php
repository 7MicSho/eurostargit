<div class="content-wraper">
    <div class="col-xl">
        <div class="col-12 text-center text-muted titlebanner-cliente" style="margin: 20px 0;">
            <h1 class="display-3 txt-title" style="margin: 0; color: white;"> EDITAR CLIENTE</h1>
        </div>
        <div class="col-sm-12" style="padding: 0 20px;">
            <table id="table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Compañia</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($clientes); $i++) {
                        ?>
                        <tr>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo $clientes[$i]['nombre']; ?>
                            </td>
                            <td data-label="apellidos: " class="text-center font-w600" style="font-size:small;">
                                <?php echo $clientes[$i]['primer_apellido'] . ' ' . $clientes[$i]['segundo_apellido']; ?>
                            </td>
                            <td data-label="telefono: " class="text-center font-w600" style="font-size:small;">
                                <?php echo '+' . $clientes[$i]['codigo_pais'] . ' ' . $clientes[$i]['lada'] . $clientes[$i]['numero_telefono']; ?>
                            </td>
                            <td data-label="correo: " class="text-center font-w600" style="font-size:small;">
                                <?php echo $clientes[$i]['correo']; ?>
                            </td>
                            <td data-label="direccion: " class="text-center font-w600" style="font-size:small;">
                                <?php echo $clientes[$i]['calle'] . ' #' . $clientes[$i]['numero'] . ' ' . $clientes[$i]['numero_int'] . ' ' . $clientes[$i]['colonia']; ?>
                            </td>
                            <td data-label="compañia: " class="text-center font-w600" style="font-size:small;">
                                <?php echo $clientes[$i]['nombre_emp']; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <button type="button" class="btn rounded-pill" onclick="abrirModal(

                                    '<?php echo $clientes[$i]['id_persona'] ?>',
                                    '<?php echo $clientes[$i]['id_cliente'] ?>',
                                    '<?php echo $clientes[$i]['id_empresa'] ?>',
                                    '<?php echo $clientes[$i]['id_correo'] ?>',
                                    '<?php echo $clientes[$i]['id_telefono'] ?>',
                                    '<?php echo $clientes[$i]['id_direccion'] ?>',

                                    '<?php echo $clientes[$i]['nombre'] ?>',
                                    '<?php echo $clientes[$i]['primer_apellido'] ?>',
                                    '<?php echo $clientes[$i]['segundo_apellido'] ?>',
                                    '<?php echo $clientes[$i]['curp'] ?>',
                                    '<?php echo $clientes[$i]['rfc'] ?>',

                                    '<?php echo $clientes[$i]['nombre_emp'] ?>',
                                    '<?php echo $clientes[$i]['rfc_emp'] ?>',
                                    '<?php echo $clientes[$i]['razon_social'] ?>',
                                    '<?php echo $clientes[$i]['giro'] ?>',
                                    '<?php echo $clientes[$i]['tipo'] ?>',
                                    '<?php echo $clientes[$i]['codigo_pais'] ?>',
                                    '<?php echo $clientes[$i]['lada'] ?>',
                                    '<?php echo $clientes[$i]['numero_telefono'] ?>',
                                    '<?php echo $clientes[$i]['calle'] ?>',
                                    '<?php echo $clientes[$i]['numero'] ?>',
                                    '<?php echo $clientes[$i]['numero_int'] ?>',
                                    '<?php echo $clientes[$i]['entre_calles'] ?>',
                                    '<?php echo $clientes[$i]['codigo_postal'] ?>',
                                    '<?php echo $clientes[$i]['colonia'] ?>',
                                    '<?php echo $clientes[$i]['municipio'] ?>',
                                    '<?php echo $clientes[$i]['estado'] ?>',
                                    '<?php echo $clientes[$i]['pais'] ?>',
                                    '<?php echo $clientes[$i]['correo'] ?>',
                                    '<?php isset($clientes[$i]['puesto'])? $txt=$clientes[$i]['puesto']: $txt='cliente'; echo $txt;?>',
                                    '<?php echo $clientes[$i]['codigo_pais'] ?>',
                                    '<?php echo $clientes[$i]['lada'] ?>',
                                    '<?php echo $clientes[$i]['numero_telefono'] ?>'

                                );">
                                    <a href="#">
                                        <span class="fa-solid fa-pen"></span>
                                    </a>
                                </button>
                            </td>
                        </tr>
                        <?php
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

        <div class="modal fade" id="modalCliente" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Name</label>
                                <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name" />
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Email</label>
                                <input type="text" id="emailWithTitle" class="form-control" placeholder="xxxx@xxx.xx" />
                            </div>
                            <div class="col mb-0">
                                <label for="dobWithTitle" class="form-label">DOB</label>
                                <input type="text" id="dobWithTitle" class="form-control" placeholder="DD / MM / YY" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function abrirModal() {
        $('#modalCliente').modal('show');
    }
</script>