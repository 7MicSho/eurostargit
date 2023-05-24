<style>
    .ocultar {
        display: none;
    }

    .puntero {
        cursor: pointer;
    }
</style>
<div class="col-12 text-center titlebanner-prospect">
    <h1 class="display-3 txt-title" style="margin: 0;"> Agregar Prospecto</h1>
</div>
<div class="content-wraper" style="padding: 3%;">
    <div class="col-xl">

        <h6 class="text-muted">Selecciona una opción</h6>
        <div class="nav-align-top mb-4">
            <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-persona-fisica" aria-controls="navs-pills-persona-fisica"
                        aria-selected="true">
                        <i class="tf-icons bx bx-user"></i> Persona Física
                        <br><small>Prospecto</small>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-persona-moral" aria-controls="navs-pills-persona-moral"
                        aria-selected="false">
                        <i class="tf-icons fa-regular fa-building"></i> Persona moral
                        <br><small>Prospecto</small>
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-pills-persona-fisica" role="tabpanel">
                    <form method="post" action="?modulo=prospectos&accion=createpfisica" enctype="multipart/form-data">
                        <div class="card-header d-flex justify-content-center align-items-center">
                            <h5 class="text-primary text-uppercase">Persona Física</h5>
                        </div>
                        <div class="row d-flex mb-2">
                            <div class="col-6 col-md-3 text-center text-primary">Información de contacto</div>
                            <hr class="mt-2 mb-3 col-6 col-md-9">
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="basic-icon-default-fullname">Nombre <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtnombre" placeholder="Nombre(s)"
                                        name="nombre" aria-label="Nombre(s)"
                                        aria-describedby="basic-icon-default-fullname2" require />
                                </div>
                            </div>
                            <div class="mb-3 col-md-3 col-6">
                                <label class="form-label" for="basic-icon-default-fullname">Primer apellido
                                    <strong class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"></span>
                                    <input type="text" class="form-control" id="txtpapellido"
                                        placeholder="Primer apellido" name="pApellido" aria-label="Primer apellido"
                                        aria-describedby="basic-icon-default-fullname2" require />
                                </div>
                            </div>
                            <div class="mb-3 col-md-3 col-6">
                                <label class="form-label" for="basic-icon-default-fullname">Segundo apellido
                                    <strong class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"></span>
                                    <input type="text" class="form-control" id="txtsapellido"
                                        placeholder="Segundo apellido" name="sApellido" aria-label="Segundo apellido"
                                        aria-describedby="basic-icon-default-fullname2" require />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-sm-3">
                                <label class="form-label" for="basic-icon-default-fullname">Código país <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-phone-call text-primary"></i></span>
                                    <select class="form-control" id="txtcodigo" placeholder="Código" name="codigo"
                                        aria-label="Código" aria-describedby="basic-icon-default-fullname2" require>
                                        <?php for ($i = 0; $i < count($prefijos); $i++) {
                                            echo '<option  value="' . $prefijos[$i]['prefijo'] . '">' . $prefijos[$i]['pais'] . '  +' . $prefijos[$i]['prefijo'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-sm-3">
                                <label class="form-label" for="basic-icon-default-fullname">LADA <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-phone-call text-primary"></i></span>
                                    <input type="number" class="form-control" id="txtlada" placeholder="LADA"
                                        name="lada" aria-label="LADA" aria-describedby="basic-icon-default-fullname2"
                                        require />
                                </div>
                            </div>
                            <div class="mb-3 col-12 col-sm-6">
                                <label class="form-label" for="basic-icon-default-fullname">Número de teléfono
                                    <strong class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-phone-call text-primary"></i></span>
                                    <input type="number" class="form-control" id="txttel"
                                        placeholder="Número de teléfono" name="telefono" aria-label="Número de teléfono"
                                        aria-describedby="basic-icon-default-fullname2" require />
                                </div>
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label" for="basic-icon-default-fullname">Correo electrónico
                                    <strong class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-envelope text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtemail"
                                        placeholder="Correo eléctronico" name="email" aria-label="Número de teléfono"
                                        aria-describedby="basic-icon-default-fullname2" require />
                                </div>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label class="form-label" for="basic-icon-default-fullname">RFC</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-envelope text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtrfc" placeholder="RFC" name="rfc"
                                        aria-label="RFC" aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label class="form-label" for="basic-icon-default-fullname">CURP</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-envelope text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtcurp" placeholder="CURP" name="curp"
                                        aria-label="CURP" aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex mt-4">
                            <div class="col-3 text-center text-primary">Dirección</div>
                            <hr class="mt-2 mb-3 col-9">
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="basic-icon-default-fullname">Calle <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                            class="bx bx-buildings text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtcalle" placeholder="Calle"
                                        name="calle" aria-label="Calle" aria-describedby="basic-icon-default-fullname2"
                                        require />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-md-3">
                                <label class="form-label" for="basic-icon-default-fullname">N exterior<strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                            class="bx bx-hash text-primary"></i></span>
                                    <input type="number" class="form-control" id="txtnexterior"
                                        aria-label="Numero exterior" name="nExt"
                                        aria-describedby="basic-icon-default-fullname2" require />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-md-3">
                                <label class="form-label" for="basic-icon-default-fullname">N interior</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                            class="bx bx-hash text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtninterior"
                                        aria-label="Numero exterior" name="nInt"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="exampleFormControlInput" class="form-label">Entre calles <strong
                                        class="text-primary">*</strong></label>
                                <input type="text" class="form-control" id="txtcalles" placeholder="Entre calles"
                                    name="entreCalles" />
                            </div>
                            <div class="mb-3 col-6 col-md-4">
                                <label class="form-label" for="basic-icon-default-fullname">Código postal <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                            class="bx bx-hash text-primary"></i></span>
                                    <input type="number" class="form-control" id="txtcp" placeholder="XXXX" name="cp"
                                        aria-label="Numero exterior" aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-md-4">
                                <label class="form-label" for="basic-icon-default-fullname">Colonia <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="" class="input-group-text"><i class="bx bx-hash text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtcolonia" placeholder="Colonia"
                                        name="colonia" aria-label="Numero exterior"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-md-4">
                                <label class="form-label" for="basic-icon-default-fullname">Municipio <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="" class="input-group-text"><i class="bx bx-hash text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtmunicipio" placeholder="XXXX"
                                        name="municipio" aria-label="Numero exterior"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-md-">
                                <label for="exampleFormControlSelect1" class="form-label">Estado <strong
                                        class="text-primary">*</strong></label>
                                <select class="form-select" id="slestado" aria-label="Default select example"
                                    name="estado" required>
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
                            <div class="mb-5 col-12 col-md-6">
                                <label for="exampleFormControlSelect1" class="form-label">País <strong
                                        class="text-primary">*</strong></label>
                                <input type="text" class="form-control" id="slpais" placeholder="País" aria-label="Pais"
                                    aria-describedby="basic-icon-default-fullname2" name="pais" value="México"
                                    readonly />
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="exampleFormControlSelect1" class="form-label">Cubetas por mes<strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="promediocompra" name="promcompras"
                                            aria-describedby="compras" aria-label="compras">
                                        <span id="basic-icon-emailcomp" class="input-group-text"><i
                                                class="fa-solid fa-cart-shopping"></i></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="exampleFormControlSelect1" class="form-label">Selecciona una
                                        imagen<strong class="text-primary">*</strong></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04"
                                            name="fotoprospecto" aria-describedby="inputGroupFileAddon04"
                                            aria-label="Upload" accept="image/jpg, image/jpeg">
                                        <span id="basic-icon-emailcomp" class="input-group-text"><i
                                                class="fa-solid fa-upload"></i></span>
                                    </div>
                                </div>
                                 <!-- Agregado 18-4 -->
                                <div class="col-sm-4">
                                <label class="form-label" for="basic-icon-default-fullname">Vendedor Asignado <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-phone-call text-primary"></i></span>
                                    <select class="form-control" id="vendedor" placeholder="Vendedor" name="vendedor"
                                        aria-label="Vendedor" aria-describedby="basic-icon-default-fullname2" require>
                                        <option value="">...</option>
                                        <?php for ($i = 0; $i < count($empleados); $i++) {
                                            echo '<option  value="' . $empleados[$i]['id_empleado'] . '">' . $empleados[$i]['nombre'] .' '. $empleados[$i]['primer_apellido'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                                 <!-- Agregado 18-4 -->
                            </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary d-flex align-items-center mt-5">
                                <div style="margin-right: 10%;">Guardar</div> <i class="fa-solid fa-floppy-disk fa-2x"
                                    style=""></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="navs-pills-persona-moral" role="tabpanel">
                    <form method="post" id="pmoral" action="?modulo=prospectos&accion=createpmoral">
                        <div class="card-header d-flex justify-content-center align-items-center">
                            <h5 class="text-primary text-uppercase">Persona Moral</h5>
                        </div>
                        <div class="row d-flex mb-2">
                            <div class="col-6 col-md-3 text-center text-primary">Información de la compañía</div>
                            <hr class="mt-2 mb-3 col-6 col-md-9">
                        </div>
                        <div class="row mb-4">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="basic-icon-nombre-compañia">Nombre <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-nombre-compañia" class="input-group-text"><i
                                            class="fa fa-building text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtnombrecomp"
                                        placeholder="Nombre de la compañía" name="nombrecom"
                                        aria-label="Nombre de la compañía" aria-describedby="basic-icon-nombre-compañia"
                                        require />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="basic-icon-nombre-compañia">RFC <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-nombre-compañia2" class="input-group-text"></span>
                                    <input type="text" class="form-control" id="txtrfccomp" placeholder="RFC" name="rfc"
                                        aria-label="rfc" aria-describedby="basic-icon-rfc" require />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="basic-icon-nombre-compañia">Razón social <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-razon-social" class="input-group-text"></span>
                                    <input type="text" class="form-control" id="txtrazonsocial"
                                        placeholder="Razon social" name="razonsocial" aria-label="razon-social"
                                        aria-describedby="basic-icon-razon-social" require />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="basic-icon-nombre-compañia">Correo electrónico <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-emailcomp" class="input-group-text"><i
                                            class="bx bx-envelope text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtemailcomp"
                                        placeholder="Correo electrónico" name="emailcomp" aria-label="emailcomp"
                                        aria-describedby="basic-icon-emailcomp" require />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="basic-icon-nombre-compañia">Giro<strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-emailcomp" class="input-group-text"></span>
                                    <select id="slcgiro" class="form-select" name="giro">
                                        <option>Giro</option>
                                        <option value="Gobierno">Gobierno</option>
                                        <option value="Privada">Privada</option>
                                        <option value="ONG">Organización no Gubernamental</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div id="divtipo">
                                    <label class="form-label" for="basic-icon-nombre-compañia">Tipo<strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" id="slctipo" placeholder="Tipo"
                                            name="tipo" aria-label="tipo" require />
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row tel align-items-center" style="margin: 0; padding: 0;">
                                <div class="col-2 mb-3">
                                    <label for="material-select">Tipo de teléfono</label>
                                    <div class="form-material">
                                        <select class="form-control" id="rbtipo" name="rbtipo[]">
                                            <option>...</option>
                                            <option value="Celular">Celular</option>
                                            <option value="Oficina">Oficina</option>
                                        </select>

                                    </div>
                                </div>


                                <div class="mb-3 col-md-2">
                                    <label class="form-label" for="basic-icon-nombre-compañia">Código<strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-codigocomp" class="input-group-text"><i
                                                class="bx bx-phone-call text-primary"></i></span>
                                        <select class="form-control" id="txtcodigocomp" placeholder="Código"
                                            name="codigocomp[]" aria-label="codigocomp"
                                            aria-describedby="basic-icon-codigocomp" require>
                                            <?php for ($i = 0; $i < count($prefijos); $i++) {
                                                echo '<option value="' . $prefijos[$i]['prefijo'] . '">' . $prefijos[$i]['pais'] . '  +' . $prefijos[$i]['prefijo'] . '</option>';
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label class="form-label" for="basic-icon-nombre-compañia">LADA<strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-ladacomp" class="input-group-text"><i
                                                class="bx bx-phone-call text-primary"></i></span>
                                        <input type="text" class="form-control" id="txtladacomp" placeholder="LADA"
                                            name="ladacomp[]" aria-label="ladacomp"
                                            aria-describedby="basic-icon-ladacomp" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6 pr-0">
                                    <label class="form-label" for="basic-icon-nombre-compañia">teléfono<strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-telcomp" class="input-group-text"><i
                                                class="bx bx-phone-call text-primary"></i></span>
                                        <input type="text" class="form-control" id="txttelcomp" placeholder="teléfono"
                                            name="telcomp[]" aria-label="telcomp" aria-describedby="basic-icon-telcomp"
                                            require />
                                    </div>
                                </div>
                                <div class="col-2 pt-2 d-flex justify-content-center">
                                    <span class="badge rounded-pill bg-danger puntero ocultar"> Eliminar</span>
                                </div>
                                <hr>
                            </div>

                            <div class="row" id="contenedor" style="padding-right: 0;"></div>

                            <div class="row d-flex justify-content-center mb-3">
                                <div class="col-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary d-flex align-items-center mt-5"
                                        id="agregar">
                                        <div style="margin-right: 10%;">Número de teléfono adicional</div> <i
                                            class="fa-solid fa-circle-plus fa-2x" style=""></i>
                                    </button>
                                </div>
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
                                    <input type="text" class="form-control" id="txtcallecomp" placeholder="Calle"
                                        name="calle" aria-label="Calle" aria-describedby="basic-icon-default-fullname2"
                                        require />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-md-3">
                                <label class="form-label" for="basic-icon-default-fullname">N exterior<strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                            class="bx bx-hash text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtnexteriorcomp"
                                        aria-label="Numero exterior" name="nExt"
                                        aria-describedby="basic-icon-default-fullname2" require />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-md-3">
                                <label class="form-label" for="basic-icon-default-fullname">N interior</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                            class="bx bx-hash text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtninteriorcomp"
                                        aria-label="Numero exterior" name="nInt"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="exampleFormControlInput" class="form-label">Entre calles <strong
                                        class="text-primary">*</strong></label>
                                <input type="text" class="form-control" id="txtecallescomp" placeholder="Entre calles"
                                    aria-label="Numero exterior" aria-describedby="basic-icon-default-fullname2"
                                    name="entreCallesM" />
                            </div>
                            <div class="mb-3 col-6 col-md-4">
                                <label class="form-label" for="basic-icon-default-fullname">Código postal <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                            class="bx bx-hash text-primary"></i></span>
                                    <input type="number" class="form-control" id="txtcpcomp" placeholder="XXXX"
                                        name="cp" aria-label="Numero exterior"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-md-4">
                                <label class="form-label" for="basic-icon-default-fullname">Colonia <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="" class="input-group-text"><i class="bx bx-hash text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtcoloniacomp" placeholder="Colonia"
                                        name="colonia" aria-label="Numero exterior"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-md-4">
                                <label class="form-label" for="basic-icon-default-fullname">Municipio <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="" class="input-group-text"><i class="bx bx-hash text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtmunicipiocomp" placeholder="XXXX"
                                        name="municipio" aria-label="Numero exterior"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-md-">
                                <label for="exampleFormControlSelect1" class="form-label">Estado <strong
                                        class="text-primary">*</strong></label>
                                <select class="form-select" id="slestadocomp" aria-label="Default select example"
                                    name="estado" required>
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
                                    <option value="Zacatecas">Zacatecas</option>
                                </select>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="exampleFormControlSelect1" class="form-label">País <strong
                                        class="text-primary">*</strong></label>
                                <input type="text" class="form-control" id="slpaiscomp" placeholder="País"
                                    aria-label="Numero exterior" aria-describedby="basic-icon-default-fullname2"
                                    name="pais" value="México" readonly />
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
                                    <input type="text" class="form-control" id="txtnombrecont" placeholder="Nombre(s)"
                                        name="nombrecont[]" aria-label="Nombre(s)"
                                        aria-describedby="basic-icon-default-fullname2" require />
                                </div>
                            </div>
                            <div class="mb-3 col-md-3 col-6">
                                <label class="form-label" for="basic-icon-default-fullname">Primer apellido
                                    <strong class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"></span>
                                    <input type="text" class="form-control" id="txtpapellidocont"
                                        placeholder="Primer apellido" name="pApellidocont[]"
                                        aria-label="Primer apellido" aria-describedby="basic-icon-default-fullname2"
                                        require />
                                </div>
                            </div>
                            <div class="mb-3 col-md-3 col-6">
                                <label class="form-label" for="basic-icon-default-fullname">Segundo apellido
                                    <strong class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"></span>
                                    <input type="text" class="form-control" id="txtsapellidocont"
                                        placeholder="Segundo apellido" name="sApellidocont[]"
                                        aria-label="Segundo apellido" aria-describedby="basic-icon-default-fullname2"
                                        require />
                                </div>
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-icon-default-fullname">Correo electrónico
                                    <strong class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-envelope text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtemailcont"
                                        placeholder="Correo eléctronico" name="emailcont[]"
                                        aria-label="Número de teléfono" aria-describedby="basic-icon-default-fullname2"
                                        require />
                                </div>
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-icon-default-fullname">Puesto
                                    <strong class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-puesto" class="input-group-text"></span>
                                    <input type="text" class="form-control" id="txtpuestocont" placeholder="Puesto"
                                        name="puestocont[]" aria-label="puesto"
                                        aria-describedby="basic-icon-default-puesto" require />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-sm-3">
                                <label class="form-label" for="basic-icon-default-fullname">Código país <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-phone-call text-primary"></i></span>
                                    <select class="form-control" id="txtcodigocont" placeholder="Código"
                                        name="codigocont[]" aria-label="Código"
                                        aria-describedby="basic-icon-default-fullname2" require>
                                        <?php for ($i = 0; $i < count($prefijos); $i++) {
                                            echo '<option  value="' . $prefijos[$i]['prefijo'] . '">' . $prefijos[$i]['pais'] . '  +' . $prefijos[$i]['prefijo'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                            </div>


                            <div class="mb-3 col-6 col-sm-3">
                                <label class="form-label" for="basic-icon-default-fullname">LADA <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-phone-call text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtladacont" placeholder="LADA"
                                        name="ladacont[]" aria-label="LADA"
                                        aria-describedby="basic-icon-default-fullname2" require />
                                </div>
                            </div>
                            <div class="mb-3 col-12 col-sm-6">
                                <label class="form-label" for="basic-icon-default-fullname">Número de teléfono
                                    <strong class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-phone-call text-primary"></i></span>
                                    <input type="text" class="form-control" id="txttelcont"
                                        placeholder="Número de teléfono" name="telefonocont[]"
                                        aria-label="Número de teléfono" aria-describedby="basic-icon-default-fullname2"
                                        require />
                                </div>
                            </div>
                            <div class="col-2 pt-2 d-flex justify-content-center">
                                <span class="badge rounded-pill bg-danger puntero ocultar deletecont">
                                    Eliminar</span>
                            </div>
                            <hr>
                        </div>

                        <div class="row" id="contenedorcontact" style="padding-right: 0;"></div>

                        <div class="row d-flex justify-content-center mb-5">
                            <div class="col-4 d-flex justify-content-center">
                                <button type="button" class="btn btn-primary d-flex align-items-center mt-5"
                                    id="agregarcontact">
                                    <div style="margin-right: 10%;">Contacto adicional</div> <i
                                        class="fa-solid fa-circle-plus fa-2x" style=""></i>
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="exampleFormControlSelect1" class="form-label">Cubetas por mes<strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="promcompra"
                                        aria-describedby="compras" aria-label="compras">
                                    <span id="basic-icon-emailcomp" class="input-group-text"><i
                                            class="fa-solid fa-upload"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="exampleFormControlSelect1" class="form-label">Selecciona una
                                    imagen<strong class="text-primary">*</strong></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="fotomoral" name="fotomoral"
                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    <span id="basic-icon-emailcomp" class="input-group-text"><i
                                            class="fa-solid fa-upload"></i></span>
                                </div>
                            </div>
                            <!-- Agregado 18-4 -->
                            <div class="col-sm-4">
                                <label class="form-label" for="basic-icon-default-fullname">Vendedor Asignado <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-phone-call text-primary"></i></span>
                                    <select class="form-control" id="vendedorm" placeholder="vendedor" name="vendedor"
                                        aria-label="vendedor" aria-describedby="basic-icon-default-fullname2" require>
                                        <option value="">...</option>
                                        <?php for ($i = 0; $i < count($empleados); $i++) {
                                            echo '<option  value="' . $empleados[$i]['id_empleado'] . '">' . $empleados[$i]['nombre'] .' '. $empleados[$i]['primer_apellido'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                            </div>
                             <!-- Agregado 18-4 -->
                        </div>

                        <div class="col-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-primary d-flex align-items-center mt-5"
                                onclick="guardarPM();">
                                <div style="margin-right: 10%;">Guardar</div> <i class="fa-solid fa-floppy-disk fa-2x"
                                    style=""></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    let agregar = document.getElementById('agregar');
    let contenido = document.getElementById('contenedor');

    let agregarcontacto = document.getElementById('agregarcontact');
    let contenidocontacto = document.getElementById('contenedorcontact');

    let selectfisica = document.getElementById('txtcodigo');
    let giro = document.getElementById('slcgiro');
    let alter = 1;


    giro.addEventListener('change', e => {
        e.preventDefault();
        if (giro.value == 'Gobierno') {
            var div = document.getElementById('divtipo');
            while (div.firstChild) {
                div.removeChild(div.firstChild);
            }
            div.innerHTML =
                `
            <div class="input-group input-group-merge mt-10">
                <label class="form-label" for="basic-icon-nombre-compañia">Tipo<strong
                        class="text-primary">*</strong></label>
                <div class="input-group input-group-merge">
                    <select id="slctipo" class="form-select" name="tipo">
                        <option>Tipo</option>
                        <option value="Federal">Federal</option>
                        <option value="Estatal">Estatal</option>
                        <option value="Municipal">Municipal</option>
                        <option value="Organismo descentralizado">Organismo descentralizado</option>
                    </select>
                </div>
            </div>
            `;
            alter = 0;
        } else {
            if (alter != 1) {
                var div = document.getElementById('divtipo');
                while (div.firstChild) {
                    div.removeChild(div.firstChild);
                }
                div.innerHTML=
                `
                <label class="form-label" for="basic-icon-nombre-compañia">Tipo<strong
                        class="text-primary">*</strong></label>
                <div class="input-group input-group-merge">
                    <input type="text" class="form-control" id="slctipo" placeholder="Tipo"
                        name="tipo" aria-label="tipo" require />
                </div>
                `;
            }
        }

    });

    agregar.addEventListener('click', e => {
        e.preventDefault();
        let clonado = document.querySelector('.tel');
        let clon = clonado.cloneNode(true);

        contenido.appendChild(clon).classList.remove('.tel');
        console.log(contenido.lastChild.childNodes[7].querySelectorAll('span'));
        let remover = contenido.lastChild.childNodes[7].querySelectorAll('span');

        remover[0].classList.remove('ocultar');
    });
    contenido.addEventListener('click', e => {
        e.preventDefault();
        if (e.target.classList.contains('puntero')) {
            let contenedor = e.target.parentNode.parentNode;
            contenedor.parentNode.removeChild(contenedor);

        }
    });

    agregarcontacto.addEventListener('click', e => {
        e.preventDefault();

        let clonadocont = document.querySelector('.clonarcontact');
        let clon = clonadocont.cloneNode(true);
        contenidocontacto.appendChild(clon).classList.remove('.contact');


        let removercontacto = contenidocontacto.lastChild.childNodes[17].querySelectorAll('span');

        removercontacto[0].classList.remove('ocultar');

    });

    contenidocontacto.addEventListener('click', e => {
        e.preventDefault();
        if (e.target.classList.contains('puntero')) {
            let contenedor = e.target.parentNode.parentNode;
            contenedor.parentNode.removeChild(contenedor);

        }
    });

    function guardarPM() {
        //company info
        let namecomp = document.getElementById('txtnombrecomp').value;
        let rfccomp = document.getElementById('txtrfccomp').value;
        let razoncomp = document.getElementById('txtrazonsocial').value;
        let mailcomp = document.getElementById('txtemailcomp').value;
        let giro = document.getElementById('slcgiro').value;
        let tipo = document.getElementById('slctipo').value;
        //array extra phones number
        var arraycodigo = document.getElementsByName('codigocomp[]');
        var arraylada = document.getElementsByName('ladacomp[]');
        var arraytel = document.getElementsByName('telcomp[]');
        var arraytipotel = document.getElementsByName('rbtipo[]');
        //address info
        let calle = document.getElementById('txtcallecomp').value;
        let next = document.getElementById('txtnexteriorcomp').value;
        let nint = document.getElementById('txtninteriorcomp').value;
        let ecalles = document.getElementById('txtecallescomp').value;
        let cp = document.getElementById('txtcpcomp').value;
        let colonia = document.getElementById('txtcoloniacomp').value;
        let municipio = document.getElementById('txtmunicipiocomp').value;
        let estado = document.getElementById('slestadocomp').value;
        let pais = document.getElementById('slpaiscomp').value;
        //array extra contact
        var arraynombre = document.getElementsByName('nombrecont[]');
        var arraypapellido = document.getElementsByName('pApellidocont[]');
        var arraysapellido = document.getElementsByName('sApellidocont[]');
        var arrayemail = document.getElementsByName('emailcont[]');
        var arraypuesto = document.getElementsByName('puestocont[]');
        var arraycodigocont = document.getElementsByName('codigocont[]');
        var arrayladacont = document.getElementsByName('ladacont[]');
        var arraytelcont = document.getElementsByName('telefonocont[]');
        //convert array to string
        var strcodigos = crearString(arraycodigo);
        var strladas = crearString(arraylada);
        var strtels = crearString(arraytel);
        var strtipotels = crearString(arraytipotel);

        var strnombres = crearString(arraynombre);
        var strpapellido = crearString(arraypapellido);
        var strsapellido = crearString(arraysapellido);
        var stremail = crearString(arrayemail);
        var strpuestos = crearString(arraypuesto);
        var strcodigosc = crearString(arraycodigocont);
        var strladac = crearString(arrayladacont);
        var strtelc = crearString(arraytelcont);
        //foto
        var imagen = document.getElementById('fotomoral').files[0];
        let pcompra = document.getElementById('promcompra').value;
        let vendedor = document.getElementById('vendedorm').value;

        if (namecomp == '' || razoncomp == '' || mailcomp == '' || giro == '' || tipo == '' || arraycodigo == '' || arraylada == '' || arraytel == '' || arraytipotel == '' || calle == '' || next == '' || ecalles == ''
            || cp == '' || colonia == '' || municipio == '' || estado == '' || pais == '' || arraynombre == '' || arraypapellido == '' || arraysapellido == '' || arrayemail == '' || arraypuesto == '' ||
            arraycodigocont == '' || arrayladacont == '' || arraytelcont == '' || vendedor == '') {

            Swal.fire({
                icon: 'error',
                title: 'Faltan datos',
                text: 'Ingresa todos los campos obligatorios',
                footer: ''
            })

            
        } else {
            let url = '?modulo=prospectos&accion=createpmoral';
            const formData = new FormData();
            formData.append('nombrecomp', namecomp);
            formData.append('razonsocial', razoncomp);
            formData.append('rfc', rfccomp);
            formData.append('emailcomp', mailcomp);
            formData.append('giro', giro);
            formData.append('codigocomp', strcodigos);
            formData.append('ladacomp', strladas);
            formData.append('telcomp', strtels);
            formData.append('rbtipo', strtipotels);
            formData.append('calle', calle);
            formData.append('nExt', next);
            formData.append('nInt', nint);
            formData.append('cp', cp);
            formData.append('colonia', colonia);
            formData.append('municipio', municipio);
            formData.append('estado', estado);
            formData.append('pais', pais);
            formData.append('entreC', ecalles);
            formData.append('tipo', tipo);
            formData.append('puesto', strpuestos);
            formData.append('nombre', strnombres);
            formData.append('pApellido', strpapellido);
            formData.append('sApellido', strsapellido);
            formData.append('email', stremail);
            formData.append('codigo', strcodigosc);
            formData.append('lada', strladac);
            formData.append('telefono', strtelc);
            formData.append('pcompra', pcompra);
            formData.append('vendedor', vendedor);
            formData.append('imagen', imagen);

            let response = fetch(url, {
                method: 'POST',
                body: formData,
            });
            console.log(response);
            if (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Se ha agregado',
                    text: 'Prospecto agregado con exito',
                    footer: ''
                })
                
                

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Ha sucedido un error',
                    text: 'Error al registrar prospecto, intenta más tarde',
                    footer: ''
                })
                setTimeout(pausa,900);
            }
        }


    }

    function crearString(array) {
        var element = "";
        for (let i = 0; i < array.length; i++) {
            if (i == 0) {
                element = array[i].value;
            } else {
                element = element + "," + array[i].value;
            }
        }
        return element;
    }

    function pausa() {
        location.reload()
        //console.log('espera');
    }
</script>