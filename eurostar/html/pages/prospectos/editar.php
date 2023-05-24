<div class="content-wraper">
    <div class="col-xl">
        <div class="col-12 text-center text-muted titlebanner-prospect mb-15">
            <h1 class="display-3 txt-title" style="margin-top: 20px;"> Editar Prospecto</h1>
        </div>

        <div class="col-sm-12" style="padding: 0 20px; margin-top: 30px;">
            <div class="col-12 mb-5">
                <h5 class="display-6"><i class="fa-regular fa-user text-primary" style="margin-right: 5px;"></i>
                    Contactos</h3>
            </div>
            <table class=" table dataTable table-striped table-bordered" style="width:100%">
                <thead class="mt-2">
                    <tr>
                        <th>Nombre</th>
                        <th class=" d-none d-sm-table-cell">Apellidos</th>
                        <th class="">Teléfono</th>
                        <th class=" d-sm-table-cell">Email</th>
                        <th class=" d-sm-table-cell">Dirección</th>
                        <th class=" d-sm-table-cell">Compañia</th>
                        <th class=" d-sm-table-cell">Editar</th>
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
                                    <?php echo $prospectos[$i]['numero_telefono']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['correo']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['calle'] . ' ' . $prospectos[$i]['numero'] . ' ' . $prospectos[$i]['numero_int'] . ' ' . $prospectos[$i]['colonia']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['nombre_emp']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <button type="button" class="btn rounded-pill" onclick="abrirModal(
                                    '<?php echo $prospectos[$i]['id_persona'] ?>',
                                    '<?php echo $prospectos[$i]['id_prospecto'] ?>',
                                    '<?php echo $prospectos[$i]['id_correo'] ?>',
                                    '<?php echo $prospectos[$i]['id_telefono'] ?>',
                                    '<?php echo $prospectos[$i]['id_direccion'] ?>',
                                    '<?php echo $prospectos[$i]['id_empresa'] ?>',
                                    '<?php echo $prospectos[$i]['nombre_emp'] ?>',
                                    '<?php echo $prospectos[$i]['rfc_emp'] ?>',
                                    '<?php echo $prospectos[$i]['razon_social'] ?>',
                                    '<?php echo $prospectos[$i]['giro'] ?>',
                                    '<?php echo $prospectos[$i]['tipo'] ?>',
                                    '<?php echo $prospectos[$i]['codigo_pais'] ?>',
                                    '<?php echo $prospectos[$i]['lada'] ?>',
                                    '<?php echo $prospectos[$i]['numero_telefono'] ?>',
                                    '<?php echo $prospectos[$i]['calle'] ?>',
                                    '<?php echo $prospectos[$i]['numero'] ?>',
                                    '<?php echo $prospectos[$i]['numero_int'] ?>',
                                    '<?php echo $prospectos[$i]['entre_calles'] ?>',
                                    '<?php echo $prospectos[$i]['codigo_postal'] ?>',
                                    '<?php echo $prospectos[$i]['colonia'] ?>',
                                    '<?php echo $prospectos[$i]['municipio'] ?>',
                                    '<?php echo $prospectos[$i]['estado'] ?>',
                                    '<?php echo $prospectos[$i]['pais'] ?>',
                                    '<?php echo $prospectos[$i]['nombre'] ?>',
                                    '<?php echo $prospectos[$i]['primer_apellido'] ?>',
                                    '<?php echo $prospectos[$i]['segundo_apellido'] ?>',
                                    '<?php echo $prospectos[$i]['correo'] ?>',
                                    '<?php echo $prospectos[$i]['puesto'] ?>',
                                    '<?php echo $prospectos[$i]['codigo_pais'] ?>',
                                    '<?php echo $prospectos[$i]['lada'] ?>',
                                    '<?php echo $prospectos[$i]['numero_telefono'] ?>',
                                    '<?php echo $prospectos[$i]['id_empleado'] ?>',
                                    '<?php echo $prospectos[$i]['empleado'] ?>'

                                );">
                                        <a href="#">
                                            <span class="fa-solid fa-pen"></span>
                                        </a>
                                    </button>
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
                                    <?php echo $prospectos[$i]['numero_telefono']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['correo']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['calle'] . ' ' . $prospectos[$i]['numero'] . ' ' . $prospectos[$i]['numero_int'] . ' ' . $prospectos[$i]['colonia']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <?php echo $prospectos[$i]['nombre_emp']; ?>
                                </td>
                                <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                    <button type="button" class="btn rounded-pill" onclick="abrirModal(
                                    '<?php echo $prospectos[$i]['id_persona'] ?>',
                                    '<?php echo $prospectos[$i]['id_prospecto'] ?>',
                                    '<?php echo $prospectos[$i]['id_correo'] ?>',
                                    '<?php echo $prospectos[$i]['id_telefono'] ?>',
                                    '<?php echo $prospectos[$i]['id_direccion'] ?>',
                                    '<?php echo $prospectos[$i]['id_empresa'] ?>',
                                    '<?php echo $prospectos[$i]['nombre_emp'] ?>',
                                    '<?php echo $prospectos[$i]['rfc_emp'] ?>',
                                    '<?php echo $prospectos[$i]['razon_social'] ?>',
                                    '<?php echo $prospectos[$i]['giro'] ?>',
                                    '<?php echo $prospectos[$i]['tipo'] ?>',
                                    '<?php echo $prospectos[$i]['codigo_pais'] ?>',
                                    '<?php echo $prospectos[$i]['lada'] ?>',
                                    '<?php echo $prospectos[$i]['numero_telefono'] ?>',
                                    '<?php echo $prospectos[$i]['calle'] ?>',
                                    '<?php echo $prospectos[$i]['numero'] ?>',
                                    '<?php echo $prospectos[$i]['numero_int'] ?>',
                                    '<?php echo $prospectos[$i]['entre_calles'] ?>',
                                    '<?php echo $prospectos[$i]['codigo_postal'] ?>',
                                    '<?php echo $prospectos[$i]['colonia'] ?>',
                                    '<?php echo $prospectos[$i]['municipio'] ?>',
                                    '<?php echo $prospectos[$i]['estado'] ?>',
                                    '<?php echo $prospectos[$i]['pais'] ?>',
                                    '<?php echo $prospectos[$i]['nombre'] ?>',
                                    '<?php echo $prospectos[$i]['primer_apellido'] ?>',
                                    '<?php echo $prospectos[$i]['segundo_apellido'] ?>',
                                    '<?php echo $prospectos[$i]['correo'] ?>',
                                    '<?php echo $prospectos[$i]['puesto'] ?>',
                                    '<?php echo $prospectos[$i]['codigo_pais'] ?>',
                                    '<?php echo $prospectos[$i]['lada'] ?>',
                                    '<?php echo $prospectos[$i]['numero_telefono'] ?>',
                                    '<?php echo $prospectos[$i]['id_empleado'] ?>',
                                    '<?php echo $prospectos[$i]['empleado'] ?>'

                                );">
                                        <a href="#">
                                            <span class="fa-solid fa-pen"></span>
                                        </a>
                                    </button>
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
        <div class="modal fade" id="modalProspecto" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Editar prospecto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="?modulo=prospectos&accion=editarprospecto">
                            <div class="row d-flex mb-2">
                                <div class="col-8 col-md-5 text-center text-primary">Información de la compañía</div>
                                <hr class="mt-2 mb-3 col-4 col-md-7">
                            </div>
                            <input type="hidden" class="form-control" id="idper" name="idper" require />
                            <input type="hidden" class="form-control" id="idpros" name="idpros" require />
                            <input type="hidden" class="form-control" id="idcorr" name="idcorr" require />
                            <input type="hidden" class="form-control" id="idtel" name="idtel" require />
                            <input type="hidden" class="form-control" id="iddir" name="iddir" require />
                            <input type="hidden" class="form-control" id="idemp" name="idemp" require />
                            <div class="row mb-4">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-nombre-compañia">Nombre <strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-nombre-compañia" class="input-group-text"><i
                                                class="fa fa-building text-primary"></i></span>
                                        <input type="text" class="form-control" id="nomemp"
                                            placeholder="Nombre de la compañía" name="nomemp"
                                            aria-label="Nombre de la compañía"
                                            aria-describedby="basic-icon-nombre-compañia" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-nombre-compañia">RFC <strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-nombre-compañia2" class="input-group-text"></span>
                                        <input type="text" class="form-control" id="rfcemp" placeholder="RFC"
                                            name="rfcemp" aria-label="rfc" aria-describedby="basic-icon-rfc" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-nombre-compañia">Razón social <strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-razon-social" class="input-group-text"></span>
                                        <input type="text" class="form-control" id="razonsoc" placeholder="Razon social"
                                            name="razonsoc" aria-label="razon-social"
                                            aria-describedby="basic-icon-razon-social" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-nombre-compañia">Correo electrónico
                                        <strong class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-emailcomp" class="input-group-text"><i
                                                class="bx bx-envelope text-primary"></i></span>
                                        <input type="text" class="form-control" id="correoemp"
                                            placeholder="Correo electrónico" name="correoemp" aria-label="emailcomp"
                                            aria-describedby="basic-icon-emailcomp" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-nombre-compañia">Giro<strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-emailcomp" class="input-group-text"></span>
                                        <input type="text" class="form-control" id="giro" placeholder="Giro" name="giro"
                                            aria-label="giro" aria-describedby="giro" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-nombre-compañia">Tipo<strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-emailcomp" class="input-group-text"></span>
                                        <input type="text" class="form-control" id="tipo" placeholder="Tipo" name="tipo"
                                            aria-label="tipo" aria-describedby="basic-icon-emailcomp" require />
                                    </div>
                                </div>
                                <div class="row tel align-items-center" style="margin: 0; padding: 0;">
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label" for="basic-icon-nombre-compañia">Código<strong
                                                class="text-primary">*</strong></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-codigocomp" class="input-group-text"><i
                                                    class="bx bx-phone-call text-primary"></i></span>
                                            <input type="text" class="form-control" id="cod" placeholder="Código"
                                                name="cod" aria-label="codigocomp"
                                                aria-describedby="basic-icon-codigocomp" require />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label" for="basic-icon-nombre-compañia">LADA<strong
                                                class="text-primary">*</strong></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-ladacomp" class="input-group-text"><i
                                                    class="bx bx-phone-call text-primary"></i></span>
                                            <input type="text" class="form-control" id="lada" placeholder="LADA"
                                                name="lada" aria-label="ladacomp" aria-describedby="basic-icon-ladacomp"
                                                require />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6 pr-0">
                                        <label class="form-label" for="basic-icon-nombre-compañia">Teléfono<strong
                                                class="text-primary">*</strong></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-telcomp" class="input-group-text"><i
                                                    class="bx bx-phone-call text-primary"></i></span>
                                            <input type="text" class="form-control" id="tel" placeholder="teléfono"
                                                name="tel" aria-label="telcomp" aria-describedby="basic-icon-telcomp"
                                                require />
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="row d-flex mt-4">
                                <div class="col-3 text-center text-primary">Dirección</div>
                                <hr class="mt-2 mb-3 col-9">
                            </div>
                            <div class="row mb-4">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Calle <strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-buildings text-primary"></i></span>
                                        <input type="text" class="form-control" id="calle" placeholder="Calle"
                                            name="calle" aria-label="Calle"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-6 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">N exterior<strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-hash text-primary"></i></span>
                                        <input type="text" class="form-control" id="num" aria-label="Numero exterior"
                                            name="num" aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-6 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">N interior</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-hash text-primary"></i></span>
                                        <input type="text" class="form-control" id="numint" aria-label="Numero exterior"
                                            name="numint" aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="exampleFormControlInput" class="form-label">Entre calles <strong
                                            class="text-primary">*</strong></label>
                                    <input type="text" class="form-control" id="entcalles" placeholder="Entre calles"
                                        aria-label="Numero exterior" aria-describedby="basic-icon-default-fullname2"
                                        name="entcalles" />
                                </div>
                                <div class="mb-3 col-6 col-md-4">
                                    <label class="form-label" for="basic-icon-default-fullname">Código postal <strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-hash text-primary"></i></span>
                                        <input type="number" class="form-control" id="cp" placeholder="XXXX" name="cp"
                                            aria-label="Numero exterior"
                                            aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>
                                <div class="mb-3 col-6 col-md-4">
                                    <label class="form-label" for="basic-icon-default-fullname">Colonia <strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="" class="input-group-text"><i
                                                class="bx bx-hash text-primary"></i></span>
                                        <input type="text" class="form-control" id="col" placeholder="Colonia"
                                            name="col" aria-label="Numero exterior"
                                            aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>
                                <div class="mb-3 col-6 col-md-4">
                                    <label class="form-label" for="basic-icon-default-fullname">Municipio <strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="" class="input-group-text"><i
                                                class="bx bx-hash text-primary"></i></span>
                                        <input type="text" class="form-control" id="mun" placeholder="XXXX" name="mun"
                                            aria-label="Numero exterior"
                                            aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>
                                <div class="mb-3 col-6 col-md-">
                                    <label for="exampleFormControlSelect1" class="form-label">Estado <strong
                                            class="text-primary">*</strong></label>
                                    <select class="form-select" id="est" aria-label="Default select example" name="est"
                                        required>
                                        <option value="">Estado</option>
                                        <option value="Aguascalientes">Aguascalientes</option>
                                        <option value="Baja California">Baja California</option>
                                        <option value="Baja California Sur">Baja California Sur</option>
                                        <option value="Campeche">Campeche</option>
                                        <option value="Chiapas">Chiapas</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="CDMX">Ciudad de México</option>
                                        <option value="Coahuila">Coahuila</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Durango">Durango</option>
                                        <option value="Estado de México">Estado de México</option>
                                        <option value="Guanajuato">Guanajuato</option>
                                        <option value="Guerrero">Guerrero</option>
                                        <option value="Hidalgo">Hidalgo</option>
                                        <option value="Jalisco">Jalisco</option>
                                        <option value="Michoacán">Michoacán</option>
                                        <option value="Morelos">Morelos</option>
                                        <option value="Nayarit">Nayarit</option>
                                        <option value="Nuevo León">Nuevo León</option>
                                        <option value="Oaxaca">Oaxaca</option>
                                        <option value="Puebla">Puebla</option>
                                        <option value="Querétaro">Querétaro</option>
                                        <option value="Quintana Roo">Quintana Roo</option>
                                        <option value="San Luis Potosí">San Luis Potosí</option>
                                        <option value="Sinaloa">Sinaloa</option>
                                        <option value="Sonora">Sonora</option>
                                        <option value="Tabasco">Tabasco</option>
                                        <option value="Tamaulipas">Tamaulipas</option>
                                        <option value="Tlaxcala">Tlaxcala</option>
                                        <option value="Veracruz">Veracruz</option>
                                        <option value="Yucatán">Yucatán</option>
                                        <option value="Zacatecas">Zacatecas</option>>
                                    </select>
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label for="exampleFormControlSelect1" class="form-label">País <strong
                                            class="text-primary">*</strong></label>
                                    <input type="text" class="form-control" id="pais" placeholder="País"
                                        aria-label="Numero exterior" aria-describedby="basic-icon-default-fullname2"
                                        name="pais" value="México" />
                                </div>
                            </div>
                            <div class="row d-flex mb-2">
                                <div class="col-6 col-md-3 text-center text-primary">Información de contacto</div>
                                <hr class="mt-2 mb-3 col-6 col-md-9">
                            </div>
                            <div class="row clonarcontact">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Nombre <strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user text-primary"></i></span>
                                        <input type="text" class="form-control" id="nom" placeholder="Nombre(s)"
                                            name="nom" aria-label="Nombre(s)"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3 col-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Primer apellido
                                        <strong class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"></span>
                                        <input type="text" class="form-control" id="pape" placeholder="Primer apellido"
                                            name="pape" aria-label="Primer apellido"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3 col-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Segundo apellido
                                        <strong class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"></span>
                                        <input type="text" class="form-control" id="sape" placeholder="Segundo apellido"
                                            name="sape" aria-label="Segundo apellido"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Correo electrónico
                                        <strong class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-envelope text-primary"></i></span>
                                        <input type="text" class="form-control" id="correo"
                                            placeholder="Correo eléctronico" name="correo"
                                            aria-label="Número de teléfono"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Puesto
                                        <strong class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-puesto" class="input-group-text"></span>
                                        <input type="text" class="form-control" id="puest" placeholder="Puesto"
                                            name="puest" aria-label="puesto"
                                            aria-describedby="basic-icon-default-puesto" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-6 col-sm-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Código país <strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-phone-call text-primary"></i></span>
                                        <input type="text" class="form-control" id="cod2" placeholder="Código"
                                            name="cod2" aria-label="Código"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>


                                <div class="mb-3 col-6 col-sm-3">
                                    <label class="form-label" for="basic-icon-default-fullname">LADA <strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-phone-call text-primary"></i></span>
                                        <input type="text" class="form-control" id="lada2" placeholder="LADA"
                                            name="lada2" aria-label="LADA"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-12 col-sm-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Número de teléfono
                                        <strong class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-phone-call text-primary"></i></span>
                                        <input type="text" class="form-control" id="tel2"
                                            placeholder="Número de teléfono" name="tel2" aria-label="Número de teléfono"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                            </div>
                            <?php if ($_SESSION['typeuser'] == 'admin') { ?>
                                <div class="row d-flex mb-2">
                                    <div class="col-6 col-md-3 text-center text-primary">Vendedor asignado</div>
                                    <hr class="mt-2 mb-3 col-6 col-md-9">
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="basic-icon-default-fullname">Nombre <strong
                                                class="text-primary">*</strong></label>
                                        <select class="form-select" id="id_vendedor" name="id_vendedor"
                                            aria-label="Default select example">
                                            <option selected="">--SELECCIONA UN EMPLEADO--</option>
                                            <?php for ($i = 0; $i < count($vendedores); $i++) {
                                                echo '<option value="' . $vendedores[$i]['id_empleado'] . '">' . $vendedores[$i]['nombre'] . ' ' . $vendedores[$i]['primer_apellido'] . ' ' . $vendedores[$i]['segundo_apellido'] . '</option>';
                                            } ?>

                                        </select>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Vendedor<strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user text-primary"></i></span>
                                        <input type="hidden" id="id_vendedor" name="id_vendedor" value="">
                                        <input type="text" class="form-control" id="vendedor" placeholder="Nombre(s)"
                                            name="vendedor" aria-label="Nombre(s)"
                                            aria-describedby="basic-icon-default-fullname2" require readonly />
                                    </div>
                                </div>
                            <?php } ?>
                            <hr>
                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary d-flex align-items-center mt-5">
                                    <div style="margin-right: 10%;">Guardar</div> <i
                                        class="fa-solid fa-floppy-disk fa-2x" style=""></i>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function abrirModal(idper, idpros, idcorr, idtel, iddir, idemp, nomemp, rfcemp, razonsoc, giro, tipo, cod, lada, tel, calle, num, numint, entcalles, cp, col, mun, est, pais, nom, pape, sape, correo, puest, cod2, lada2, tel2, idemp, empleado) {
        $('#modalProspecto').modal('show');
        document.getElementById('idper').value = idper;
        document.getElementById('idpros').value = idpros;
        document.getElementById('idcorr').value = idcorr;
        document.getElementById('idtel').value = idtel;
        document.getElementById('iddir').value = iddir;
        document.getElementById('idemp').value = idemp;
        document.getElementById('nomemp').value = nomemp;
        document.getElementById('rfcemp').value = rfcemp;
        document.getElementById('razonsoc').value = razonsoc;
        document.getElementById('correoemp').value = correo;
        document.getElementById('giro').value = giro;
        document.getElementById('tipo').value = tipo;
        document.getElementById('cod').value = cod;
        document.getElementById('lada').value = lada;
        document.getElementById('tel').value = tel;
        document.getElementById('calle').value = calle;
        document.getElementById('num').value = num;
        document.getElementById('numint').value = numint;
        document.getElementById('entcalles').value = entcalles;
        document.getElementById('cp').value = cp;
        document.getElementById('col').value = col;
        document.getElementById('mun').value = mun;
        document.getElementById('est').value = est;
        document.getElementById('pais').value = pais;
        document.getElementById('nom').value = nom;
        document.getElementById('pape').value = pape;
        document.getElementById('sape').value = sape;
        document.getElementById('correo').value = correo;
        document.getElementById('puest').value = puest;
        document.getElementById('cod2').value = cod2;
        document.getElementById('lada2').value = lada2;
        document.getElementById('tel2').value = tel2;
        document.getElementById('id_vendedor').value = idemp;
        document.getElementById('vendedor').value = empleado;

    }
</script>