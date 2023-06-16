<style>
    .ocultar {
        display: none;
    }

    .puntero {
        cursor: pointer;
    }
</style>
<div class="col-12 text-center titlebanner-prospect">
    <h1 class="display-3 txt-title" style="margin: 0;"> Agregar Cliente</h1>
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
                        <br><small>Cliente</small>
                    </button>
                </li>
                <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-persona-moral" aria-controls="navs-pills-persona-moral"
                        aria-selected="false">
                        <i class="tf-icons fa-regular fa-building"></i> Persona moral
                        <br><small>Cliente</small>
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-pills-persona-fisica" role="tabpanel">
                    <form method="post" action="?modulo=clientes&accion=createpfisica" enctype="multipart/form-data">
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
                                        aria-label="RFC" aria-describedby="basic-icon-default-fullname2" maxlength="13"
                                        required />
                                </div>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label class="form-label" for="basic-icon-default-fullname">CURP</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-envelope text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtcurp" placeholder="CURP" name="curp"
                                        aria-label="CURP" aria-describedby="basic-icon-default-fullname2" maxlength="18"
                                        required />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="basic-icon-nombre-compañia">Giro<strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-emailcomp" class="input-group-text"></span>
                                    <select id="slcgirof" class="form-select" name="giro">
                                        <option>-- Selecciona una opción--</option>
                                        <?php
                                        for ($i = 0; $i < count($mercados); $i++) {
                                            echo '<option value="' . $mercados[$i]['id_mercado'] . '">' . $mercados[$i]['nombre_mercado'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div id="divtipo">
                                    <label class="form-label" for="basic-icon-nombre-compañia">Tipo<strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <select type="text" class="form-control" id="slctipof" placeholder="Tipo"
                                            name="tipo" aria-label="tipo" require>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
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
                            <div class="mb-3 col-6 col-md-6">
                                <label class="form-label" for="basic-icon-default-fullname">Código postal <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                            class="bx bx-hash text-primary"></i></span>
                                    <input type="number" class="form-control" id="txtcp" placeholder="XXXX" name="cp"
                                        aria-label="Numero exterior" aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-md-6">
                                <label class="form-label" for="basic-icon-default-fullname">Colonia <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="" class="input-group-text"><i class="bx bx-hash text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtcolonia" placeholder="Colonia"
                                        name="colonia" aria-label="Numero exterior"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3 col-6 col-md-">
                                <label for="exampleFormControlSelect1" class="form-label">Estado <strong
                                        class="text-primary">*</strong></label>
                                <select class="form-select" id="slestado" aria-label="Default select example" onchange="cargarMunicipios();"
                                    name="estado" required>
                                    <option value="">Estado</option>
                                    <option value="Aguascalientes">Aguascalientes</option>
                                    <option value="Baja California">Baja California</option>
                                    <option value="Baja California Sur">Baja California Sur</option>
                                    <option value="Campeche">Campeche</option>
                                    <option value="Chiapas">Chiapas</option>
                                    <option value="Chihuahua">Chihuahua</option>
                                    <option value="Ciudad de Mexico">Ciudad de México</option>
                                    <option value="Coahuila">Coahuila</option>
                                    <option value="Colima">Colima</option>
                                    <option value="Durango">Durango</option>
                                    <option value="Estado de Mexico">Estado de México</option>
                                    <option value="Guanajuato">Guanajuato</option>
                                    <option value="Guerrero">Guerrero</option>
                                    <option value="Hidalgo">Hidalgo</option>
                                    <option value="Jalisco">Jalisco</option>
                                    <option value="Michoacan">Michoacán</option>
                                    <option value="Morelos">Morelos</option>
                                    <option value="Nayarit">Nayarit</option>
                                    <option value="Nuevo Leon">Nuevo León</option>
                                    <option value="Oaxaca">Oaxaca</option>
                                    <option value="Puebla">Puebla</option>
                                    <option value="Queretaro">Queretaro</option>
                                    <option value="Quintana Roo">Quintana Roo</option>
                                    <option value="San Luis Potosi">San Luis Potosí</option>
                                    <option value="Sinaloa">Sinaloa</option>
                                    <option value="Sonora">Sonora</option>
                                    <option value="Tabasco">Tabasco</option>
                                    <option value="Tamaulipas">Tamaulipas</option>
                                    <option value="Tlaxcala">Tlaxcala</option>
                                    <option value="Veracruz">Veracruz</option>
                                    <option value="Yucatan">Yucatan</option>
                                    <option value="Zacatecas">Zacatecas</option>>
                                </select>
                            </div>
                            <!--  -->
                            <div class="mb-3 col-6 col-md-6">
                                <label class="form-label" for="basic-icon-default-fullname">Municipio <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="" class="input-group-text"><i class="bx bx-hash text-primary"></i></span>
                                    <select class="form-select" name="municipio" id="txtmunicipio">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <!--  -->
                            <div class="mb-5 col-12 col-md-6">
                                <label for="exampleFormControlSelect1" class="form-label">País <strong
                                        class="text-primary">*</strong></label>
                                <select class="form-control" id="slpais" placeholder="País" aria-label="Pais"
                                    aria-describedby="basic-icon-default-fullname2" name="pais">
                                    <optgroup label="América del Norte">
                                        <option value="canada">Canadá</option>
                                        <option value="estados-unidos">Estados Unidos</option>
                                        <option selected value="mexico">México</option>
                                    </optgroup>
                                    <optgroup label="América Central">
                                        <option value="belice">Belice</option>
                                        <option value="costa-rica">Costa Rica</option>
                                        <option value="el-salvador">El Salvador</option>
                                        <option value="guatemala">Guatemala</option>
                                        <option value="honduras">Honduras</option>
                                        <option value="nicaragua">Nicaragua</option>
                                        <option value="panama">Panamá</option>
                                    </optgroup>
                                    <optgroup label="América del Sur">
                                        <option value="argentina">Argentina</option>
                                        <option value="bolivia">Bolivia</option>
                                        <option value="brasil">Brasil</option>
                                        <option value="chile">Chile</option>
                                        <option value="colombia">Colombia</option>
                                        <option value="ecuador">Ecuador</option>
                                        <option value="guyana">Guyana</option>
                                        <option value="paraguay">Paraguay</option>
                                        <option value="peru">Perú</option>
                                        <option value="surinam">Surinam</option>
                                        <option value="uruguay">Uruguay</option>
                                        <option value="venezuela">Venezuela</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <label for="exampleFormControlSelect1" class="form-label">Selecciona una
                                            imagen<strong class="text-primary">*</strong></label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="inputGroupFile04" name="fotocliente"
                                                aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                                accept="image/jpg, image/jpeg, image/png, image/gif">
                                            <span id="basic-icon-emailcomp" class="input-group-text"><i
                                                    class="fa-solid fa-upload"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <label for="exampleFormControlSelect1" class="form-label">Vendedor Asignado<strong
                                                                    class="text-primary">*</strong></label>
                                        <div class="input-group">
                                            <?php if (isset($_SESSION['typeuser']) && $_SESSION['typeuser'] == 'empleado') { ?>
                                                    <input type="hidden" class="form-control" id="vendedorm" placeholder="vendedor"
                                                        name="vendedor" aria-label="compras" value="<?php echo $_SESSION['id_empleado']; ?>"/>
                                        

                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                                class="bx bx-phone-call text-primary"></i></span>

                                                        <input type="text" class="form-control" id="vendedortext"
                                                            placeholder="vendedortexto" name="vendedor" aria-label="compras"
                                                            value="<?php echo $_SESSION['nombre']; ?>" readonly/>
                                            <?php } elseif (isset($_SESSION['typeuser']) && $_SESSION['typeuser'] == 'admin') { ?>
                                                    <select class="form-control" id="vendedor" placeholder="vendedor" name="vendedor"
                                                        aria-label="vendedor" aria-describedby="basic-icon-default-fullname2" require>
                                                        <option value="">...</option>
                                                        <?php for ($i = 0; $i < count($vendedores); $i++) {
                                                            echo '<option  value="' . $vendedores[$i]['id_empleado'] . '">' . $vendedores[$i]['nombre'] . ' ' . $vendedores[$i]['primer_apellido'] . '</option>';
                                                        } ?>
                                                    </select>
                                            <?php } ?>
                                        </div>
                                    </div>
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
                    <form method="post" id="pmoral" action="?modulo=clientes&accion=createpmoral">
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
                                        aria-label="rfc" aria-describedby="basic-icon-rfc" maxlength="13" require />
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
                                        <option>-- Selecciona una opción--</option>
                                        <?php
                                        for ($i = 0; $i < count($mercados); $i++) {
                                            echo '<option value="' . $mercados[$i]['id_mercado'] . '">' . $mercados[$i]['nombre_mercado'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div id="divtipo">
                                    <label class="form-label" for="basic-icon-nombre-compañia">Tipo<strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <select type="text" class="form-control" id="slctipo" placeholder="Tipo"
                                            name="tipo" aria-label="tipo" require>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row tel align-items-center" style="margin: 0; padding: 0;">
                                <div class="col-sm-4 mb-3">
                                    <label for="material-select">Tipo de teléfono</label>
                                    <div class="form-material">
                                        <select class="form-control" id="rbtipo" name="rbtipo[]">
                                            <option>...</option>
                                            <option value="Celular">Celular</option>
                                            <option value="Oficina">Oficina</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="mb-3 col-6 col-sm-4">
                                    <label class="form-label" for="basic-icon-default-fullname">Código país <strong
                                            class="text-primary">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-phone-call text-primary"></i></span>
                                        <select class="form-control" id="txtcodigo" placeholder="Código"
                                            name="codigocomp[]" aria-label="Código"
                                            aria-describedby="basic-icon-default-fullname2" require>
                                            <?php for ($i = 0; $i < count($prefijos); $i++) {
                                                echo '<option  value="' . $prefijos[$i]['prefijo'] . '">' . $prefijos[$i]['pais'] . '  +' . $prefijos[$i]['prefijo'] . '</option>';
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-4">
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
                                    <label class="form-label" for="basic-icon-nombre-compañia">Teléfono<strong
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
                                    <input type="number" class="form-control" id="txtnexteriorcomp"
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
                            <div class="mb-3 col-6 col-md-6">
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
                            <div class="mb-3 col-6 col-md-6">
                                <label class="form-label" for="basic-icon-default-fullname">Colonia <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="" class="input-group-text"><i class="bx bx-hash text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtcoloniacomp" placeholder="Colonia"
                                        name="colonia" aria-label="Numero exterior"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <!-- <div class="mb-3 col-6 col-md-4">
                                <label class="form-label" for="basic-icon-default-fullname">Municipio <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="" class="input-group-text"><i class="bx bx-hash text-primary"></i></span>
                                    <input type="text" class="form-control" id="txtmunicipiocomp" placeholder="XXXX"
                                        name="municipio" aria-label="Numero exterior"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div> -->
                            <div class="mb-3 col-6 col-md-">
                                <label for="exampleFormControlSelect1" class="form-label">Estado <strong
                                        class="text-primary">*</strong></label>
                                <select class="form-select" id="slestadocomp" aria-label="Default select example" onchange="cargarMunicipiosComp();"
                                    name="estado" required>
                                    <option value="">Estado</option>
                                    <option value="Aguascalientes">Aguascalientes</option>
                                    <option value="Baja California">Baja California</option>
                                    <option value="Baja California Sur">Baja California Sur</option>
                                    <option value="Campeche">Campeche</option>
                                    <option value="Chiapas">Chiapas</option>
                                    <option value="Chihuahua">Chihuahua</option>
                                    <option value="Ciudad de Mexico">Ciudad de Mexico</option>
                                    <option value="Coahuila">Coahuila</option>
                                    <option value="Colima">Colima</option>
                                    <option value="Durango">Durango</option>
                                    <option value="Estado de Mexico">Estado de Mexico</option>
                                    <option value="Guanajuato">Guanajuato</option>
                                    <option value="Guerrero">Guerrero</option>
                                    <option value="Hidalgo">Hidalgo</option>
                                    <option value="Jalisco">Jalisco</option>
                                    <option value="Michoacan">Michoacan</option>
                                    <option value="Morelos">Morelos</option>
                                    <option value="Nayarit">Nayarit</option>
                                    <option value="Nuevo Leon">Nuevo Leon</option>
                                    <option value="Oaxaca">Oaxaca</option>
                                    <option value="Puebla">Puebla</option>
                                    <option value="Queretaro">Queretaro</option>
                                    <option value="Quintana Roo">Quintana Roo</option>
                                    <option value="San Luis Potosi">San Luis Potosi</option>
                                    <option value="Sinaloa">Sinaloa</option>
                                    <option value="Sonora">Sonora</option>
                                    <option value="Tabasco">Tabasco</option>
                                    <option value="Tamaulipas">Tamaulipas</option>
                                    <option value="Tlaxcala">Tlaxcala</option>
                                    <option value="Veracruz">Veracruz</option>
                                    <option value="Yucatan">Yucatan</option>
                                    <option value="Zacatecas">Zacatecas</option>
                                </select>
                            </div>
                            <!--  -->
                            <div class="mb-3 col-6 col-md-6">
                                <label class="form-label" for="basic-icon-default-fullname">Municipio <strong
                                        class="text-primary">*</strong></label>
                                <div class="input-group input-group-merge">
                                    <span id="" class="input-group-text"><i class="bx bx-hash text-primary"></i></span>
                                    <select class="form-select" name="municipio" id="txtmunicipiocomp">
                                           <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <!--  -->
                            <div class="mb-3 col-12 col-md-6">
                                <label for="exampleFormControlSelect1" class="form-label">País <strong
                                        class="text-primary">*</strong></label>
                                <select class="form-control" id="slpaiscomp"
                                    aria-label="Numero exterior" aria-describedby="basic-icon-default-fullname2"
                                    name="pais" value="México" >
                                    <optgroup label="América del Norte">
                                            <option value="canada">Canadá</option>
                                            <option value="estados-unidos">Estados Unidos</option>
                                            <option selected value="mexico">México</option>
                                        </optgroup>
                                        <optgroup label="América Central">
                                            <option value="belice">Belice</option>
                                            <option value="costa-rica">Costa Rica</option>
                                            <option value="el-salvador">El Salvador</option>
                                            <option value="guatemala">Guatemala</option>
                                            <option value="honduras">Honduras</option>
                                            <option value="nicaragua">Nicaragua</option>
                                            <option value="panama">Panamá</option>
                                        </optgroup>
                                        <optgroup label="América del Sur">
                                            <option value="argentina">Argentina</option>
                                            <option value="bolivia">Bolivia</option>
                                            <option value="brasil">Brasil</option>
                                            <option value="chile">Chile</option>
                                            <option value="colombia">Colombia</option>
                                            <option value="ecuador">Ecuador</option>
                                            <option value="guyana">Guyana</option>
                                            <option value="paraguay">Paraguay</option>
                                            <option value="peru">Perú</option>
                                            <option value="surinam">Surinam</option>
                                            <option value="uruguay">Uruguay</option>
                                            <option value="venezuela">Venezuela</option>
                                        </optgroup>
                                </select>
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
                                <span class="badge rounded-pill bg-danger puntero ocultar deletecont"> Eliminar</span>
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
                            <div class="col-sm-6">
                                <label for="exampleFormControlSelect1" class="form-label">Selecciona una imagen<strong
                                                                class="text-primary">*</strong></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="foto" name="imagen"
                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    <span id="basic-icon-emailcomp" class="input-group-text"><i
                                            class="fa-solid fa-upload"></i></span>
                                </div>
                            </div>
                        <div class="col-sm-6">
                            <label for="exampleFormControlSelect1" class="form-label">Vendedor Asignado
                                <strong class="text-primary">*</strong>
                            </label>
                        <?php if (isset($_SESSION['typeuser']) && $_SESSION['typeuser'] == 'empleado') { ?>
                            <input type="hidden" class="form-control" id="vendedorm" placeholder="vendedor"
                                name="vendedor" aria-label="compras" value="<?php echo $_SESSION['id_empleado']; ?>">
                                <div class="input-group input-group-merge">

                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-phone-call text-primary"></i></span>

                                    <input type="text" class="form-control" id="vendedortext"
                                        placeholder="vendedortexto" name="vendedortexto" aria-label="compras"
                                        value="<?php echo $_SESSION['nombre']; ?>" readonly>
                        <?php } elseif (isset($_SESSION['typeuser']) && $_SESSION['typeuser'] == 'admin') { ?>
                                    <select class="form-control" id="vendedorm" placeholder="vendedor" name="vendedor"
                                        aria-label="vendedor" aria-describedby="basic-icon-default-fullname2" require>
                                        <option value="">...</option>
                                        <?php for ($i = 0; $i < count($vendedores); $i++) {
                                            echo '<option  value="' . $vendedores[$i]['id_empleado'] . '">' . $vendedores[$i]['nombre'] . ' ' . $vendedores[$i]['primer_apellido'] . '</option>';
                                        } ?>
                                    </select>
                        <?php } ?>
                                </div>
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
    let giro = document.getElementById('slcgiro');
    let tipo = document.getElementById('slctipo');

    let girof = document.getElementById('slcgirof');
    let tipof = document.getElementById('slctipof');

    giro.addEventListener('change', e => {
        e.preventDefault();
        while (tipo.firstChild) {
            tipo.removeChild(tipo.firstChild);
        }
        let url = '?modulo=clientes&accion=getmercados';
        const formData = new FormData();
        formData.append('idgiro', giro.value);
        fetch(url, {
            method: 'POST',
            body: formData
        }).then(response => response.json())
            .then(data => {
                data.forEach(row => {
                    const option = document.createElement('option');
                    option.text = row.nombre_giro;
                    option.value = row.id_giro_mercado;
                    tipo.appendChild(option);
                });
            });
    });

    girof.addEventListener('change', e => {
        e.preventDefault();
        console.log('entra')
        while (tipof.firstChild) {
            tipof.removeChild(tipof.firstChild);
        }
        let url = '?modulo=clientes&accion=getmercados';
        const formData = new FormData();
        formData.append('idgiro', girof.value);
        fetch(url, {
            method: 'POST',
            body: formData
        }).then(response => response.json())
            .then(data => {
                data.forEach(row => {
                    const option = document.createElement('option');
                    option.text = row.nombre_giro; // Asumiendo que tienes una columna 'nombre' en tu tabla
                    option.value = row.id_giro_mercado; // Asumiendo que tienes una columna 'id' en tu tabla
                    tipof.appendChild(option);
                });
            });
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
        let vendedor = document.getElementById('vendedorm').value;
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
        var imagen = document.getElementById('foto').files[0];


        if (namecomp == '' || razoncomp == '' || mailcomp == '' || giro == '' || tipo == '' || arraycodigo == '' || arraylada == '' || arraytel == '' || arraytipotel == '' || calle == '' || next == '' || ecalles == ''
            || cp == '' || colonia == '' || municipio == '' || estado == '' || pais == '' || arraynombre == '' || arraypapellido == '' || arraysapellido == '' || arrayemail == '' || arraypuesto == '' ||
            arraycodigocont == '' || arrayladacont == '' || arraytelcont == '' || vendedor =='') {

            Swal.fire({
                icon: 'error',
                title: 'Faltan datos',
                text: 'Ingresa todos los campos obligatorios',
                footer: ''
            })

        } else {
            let url = 'http://192.168.0.14/eurostargit/eurostar/?modulo=clientes&accion=createpmoral';
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
            formData.append('vendedor', vendedor);
            formData.append('imagen', imagen);

            let response = fetch(url, {
                method: 'POST',
                body: formData,
            });
            if (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Se ha agregado',
                    text: 'Prospecto agregado con exito',
                    footer: ''
                })
                console.log(strtipotels);
                console.log(strcodigos);
                console.log(strladas);
                console.log(strtels);
                setTimeout(pausa, 900);

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Ha sucedido un error',
                    text: 'Error al registrar prospecto, intenta más tarde',
                    footer: ''
                })
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

    const municipiosPorEstado = {
    "Aguascalientes": ["Aguascalientes", "Asientos", "Calvillo", "Cosio", "El Llano", "Jesus Maria",
        "Pabellon de Arteaga", "Rincon de Romos", "San Francisco de los Romo", "San Jose de Gracia", "Tepezala"
    ],
    "Baja California": ["Ensenada", "Mexicali", "Playas de Rosarito", "Tecate", "Tijuana"],
    "Baja California Sur": ["Comondu", "La Paz", "Loreto", "Los Cabos", "Mulege"],
    "Campeche": ["Calakmul", "Calkini", "Campeche", "Candelaria", "Carmen", "Champoton", "Escarcega", "Hecelchakan",
        "Hopelchen", "Palizada", "Tenabo"
    ],
    "Coahuila": ["Abasolo", "Acuna", "Allende", "Arteaga", "Candela", "Castanos", "Cuatro Cienegas", "Escobedo",
        "Francisco I. Madero", "Frontera", "General Cepeda", "Guerrero", "Hidalgo", "Jimenez", "Juarez",
        "Lamadrid", "Matamoros", "Monclova", "Morelos", "Muzquiz", "Nadadores", "Nava", "Ocampo", "Parras",
        "Piedras Negras", "Progreso", "Ramos Arizpe", "Sabinas", "Sacramento", "Saltillo", "San Buenaventura",
        "San Juan de Sabinas", "San Pedro", "Sierra Mojada", "Torreon", "Viesca", "Villa Union", "Zaragoza"
    ],
    "Colima": ["Armeria", "Colima", "Comala", "Coquimatlan", "Cuauhtemoc", "Ixtlahuacan", "Manzanillo",
        "Minatitlan", "Tecoman", "Villa de Alvarez"
    ],
    "Chiapas": ["Acacoyagua", "Acala", "Acapetahua", "Aldama", "Altamirano", "Amatenango de la Frontera",
        "Amatenango del Valle", "Amatan", "Angel Albino Corzo", "Arriaga", "Bejucal de Ocampo", "Bella Vista",
        "Benemerito de las Americas", "Berriozabal", "Bochil", "Cacahoatan", "Capitan Luis Angel Vidal",
        "Catazaja", "Chalchihuitan", "Chamula", "Chanal", "Chapultenango", "Chenalho", "Chiapa de Corzo",
        "Chiapilla", "Chicoasen", "Chicomuselo", "Chilon", "Cintalapa", "Coapilla", "Comitan de Dominguez",
        "Copainala", "El Bosque", "El Parral", "El Porvenir", "Emiliano Zapata", "Escuintla", "Francisco Leon",
        "Frontera Comalapa", "Frontera Hidalgo", "Huehuetan", "Huitiupan", "Huixtla", "Huixtan", "Ixhuatan",
        "Ixtacomitan", "Ixtapa", "Ixtapangajoya", "Jiquipilas", "Jitotol", "Juarez", "La Concordia",
        "La Grandeza", "La Independencia", "La Libertad", "La Trinitaria", "Larrainzar", "Las Margaritas",
        "Las Rosas", "Mapastepec", "Maravilla Tenejapa", "Marques de Comillas", "Mazapa de Madero", "Mazatan",
        "Metapa", "Mezcalapa", "Mitontic", "Montecristo de Guerrero", "Motozintla", "Nicolas Ruiz", "Ocosingo",
        "Ocotepec", "Ocozocoautla de Espinosa", "Ostuacan", "Osumacinta", "Oxchuc", "Palenque", "Pantelho",
        "Pantepec", "Pichucalco", "Pijijiapan", "Pueblo Nuevo Solistahuacan", "Rayon", "Reforma",
        "Rincon Chamula San Pedro", "Sabanilla", "Salto de Agua", "San Andres Duraznal",
        "San Cristobal de las Casas", "San Fernando", "San Juan Cancuc", "San Lucas", "Santiago el Pinar",
        "Siltepec", "Simojovel", "Sitala", "Socoltenango", "Solosuchiapa", "Soyalo", "Suchiapa", "Suchiate",
        "Sunuapa", "Tapachula", "Tapalapa", "Tapilula", "Tecpatan", "Tenejapa", "Teopisca", "Tila", "Tonala",
        "Totolapa", "Tumbala", "Tuxtla Chico", "Tuxtla Gutierrez", "Tuzantan", "Tzimol", "Union Juarez",
        "Venustiano Carranza", "Villa Comaltitlan", "Villa Corzo", "Villaflores", "Yajalon", "Zinacantan"
    ],
    "Chihuahua": ["Ahumada", "Aldama", "Allende", "Aquiles Serdan", "Ascension", "Bachiniva", "Balleza",
        "Batopilas de Manuel Gomez Morin", "Bocoyna", "Buenaventura", "Camargo", "Carichi", "Casas Grandes",
        "Chihuahua", "Chinipas", "Coronado", "Coyame del Sotol", "Cuauhtemoc", "Cusihuiriachi", "Delicias",
        "Dr. Belisario Dominguez", "El Tule", "Galeana", "Gran Morelos", "Guachochi", "Guadalupe y Calvo",
        "Guadalupe", "Guazapares", "Guerrero", "Gomez Farias", "Hidalgo del Parral", "Huejotitan",
        "Ignacio Zaragoza", "Janos", "Jimenez", "Julimes", "Juarez", "La Cruz", "Lopez", "Madera", "Maguarichi",
        "Manuel Benavides", "Matachi", "Matamoros", "Meoqui", "Morelos", "Moris", "Namiquipa", "Nonoava",
        "Nuevo Casas Grandes", "Ocampo", "Ojinaga", "Praxedis G. Guerrero", "Riva Palacio", "Rosales",
        "Rosario", "San Francisco de Borja", "San Francisco de Conchos", "San Francisco del Oro",
        "Santa Barbara", "Santa Isabel", "Satevo", "Saucillo", "Temosachic", "Urique", "Uruachi",
        "Valle de Zaragoza"
    ],
    "Ciudad de Mexico": ["Alvaro Obregon", "Azcapotzalco", "Benito Juarez", "Coyoacan", "Cuajimalpa de Morelos",
        "Cuauhtemoc", "Gustavo A. Madero", "Iztacalco", "Iztapalapa", "La Magdalena Contreras",
        "Miguel Hidalgo", "Milpa Alta", "Tlalpan", "Tlahuac", "Venustiano Carranza", "Xochimilco"
    ],
    "Durango": ["Canatlan", "Canelas", "Coneto de Comonfort", "Cuencame", "Durango", "El Oro",
        "General Simon Bolivar", "Gomez Palacio", "Guadalupe Victoria", "Guanacevi", "Hidalgo", "Inde", "Lerdo",
        "Mapimi", "Mezquital", "Nazas", "Nombre de Dios", "Nuevo Ideal", "Ocampo", "Otaez",
        "Panuco de Coronado", "Penon Blanco", "Poanas", "Pueblo Nuevo", "Rodeo", "San Bernardo", "San Dimas",
        "San Juan de Guadalupe", "San Juan del Rio", "San Luis del Cordero", "San Pedro del Gallo",
        "Santa Clara", "Santiago Papasquiaro", "Suchil", "Tamazula", "Tepehuanes", "Tlahualilo", "Topia",
        "Vicente Guerrero"
    ],
    "Guanajuato": ["Abasolo", "Acambaro", "Apaseo el Alto", "Apaseo el Grande", "Atarjea", "Celaya", "Comonfort",
        "Coroneo", "Cortazar", "Cueramaro", "Doctor Mora", "Dolores Hidalgo Cuna de la Independencia Nacional",
        "Guanajuato", "Huanimaro", "Irapuato", "Jaral del Progreso", "Jerecuaro", "Leon", "Manuel Doblado",
        "Moroleon", "Ocampo", "Penjamo", "Pueblo Nuevo", "Purisima del Rincon", "Romita", "Salamanca",
        "Salvatierra", "San Diego de la Union", "San Felipe", "San Francisco del Rincon", "San Jose Iturbide",
        "San Luis de la Paz", "San Miguel de Allende", "Santa Catarina", "Santa Cruz de Juventino Rosas",
        "Santiago Maravatio", "Silao de la Victoria", "Tarandacuao", "Tarimoro", "Tierra Blanca", "Uriangato",
        "Valle de Santiago", "Victoria", "Villagran", "Xichu", "Yuriria"
    ],
    "Guerrero": ["Acapulco de Juarez", "Acatepec", "Ahuacuotzingo", "Ajuchitlan del Progreso",
        "Alcozauca de Guerrero", "Alpoyeca", "Apaxtla", "Arcelia", "Atenango del Rio",
        "Atlamajalcingo del Monte", "Atlixtac", "Atoyac de Alvarez", "Ayutla de los Libres", "Azoyu",
        "Benito Juarez", "Buenavista de Cuellar", "Chilapa de Alvarez", "Chilpancingo de los Bravo",
        "Coahuayutla de Jose Maria Izazaga", "Cochoapa el Grande", "Cocula", "Copala", "Copalillo",
        "Copanatoyac", "Coyuca de Benitez", "Coyuca de Catalan", "Cuajinicuilapa", "Cualac", "Cuautepec",
        "Cuetzala del Progreso", "Cutzamala de Pinzon", "Eduardo Neri", "Florencio Villarreal",
        "General Canuto A. Neri", "General Heliodoro Castillo", "Huamuxtitlan", "Huitzuco de los Figueroa",
        "Iguala de la Independencia", "Igualapa", "Iliatenco", "Ixcateopan de Cuauhtemoc",
        "Jose Joaquin de Herrera", "Juan R. Escudero", "Juchitan", "La Union de Isidoro Montes de Oca",
        "Leonardo Bravo", "Malinaltepec", "Marquelia", "Martir de Cuilapan", "Metlatonoc", "Mochitlan",
        "Olinala", "Ometepec", "Pedro Ascencio Alquisiras", "Petatlan", "Pilcaya", "Pungarabato",
        "Quechultenango", "San Luis Acatlan", "San Marcos", "San Miguel Totolapan", "Taxco de Alarcon",
        "Tecoanapa", "Tecpan de Galeana", "Teloloapan", "Tepecoacuilco de Trujano", "Tetipac",
        "Tixtla de Guerrero", "Tlacoachistlahuaca", "Tlacoapa", "Tlalchapa", "Tlalixtaquilla de Maldonado",
        "Tlapa de Comonfort", "Tlapehuala", "Xalpatlahuac", "Xochihuehuetlan", "Xochistlahuaca",
        "Zapotitlan Tablas", "Zihuatanejo de Azueta", "Zirandaro", "Zitlala"
    ],
    "Hidalgo": ["Acatlan", "Acaxochitlan", "Actopan", "Agua Blanca de Iturbide", "Ajacuba", "Alfajayucan",
        "Almoloya", "Apan", "Atitalaquia", "Atlapexco", "Atotonilco de Tula", "Atotonilco el Grande", "Calnali",
        "Cardonal", "Chapantongo", "Chapulhuacan", "Chilcuautla", "Cuautepec de Hinojosa", "El Arenal",
        "Eloxochitlan", "Emiliano Zapata", "Epazoyucan", "Francisco I. Madero", "Huasca de Ocampo", "Huautla",
        "Huazalingo", "Huehuetla", "Huejutla de Reyes", "Huichapan", "Ixmiquilpan", "Jacala de Ledezma",
        "Jaltocan", "Juarez Hidalgo", "La Mision", "Lolotla", "Metepec", "Metztitlan", "Mineral de la Reforma",
        "Mineral del Chico", "Mineral del Monte", "Mixquiahuala de Juarez", "Molango de Escamilla",
        "Nicolas Flores", "Nopala de Villagran", "Omitlan de Juarez", "Pachuca de Soto", "Pacula", "Pisaflores",
        "Progreso de Obregon", "San Agustin Metzquititlan", "San Agustin Tlaxiaca", "San Bartolo Tutotepec",
        "San Felipe Orizatlan", "San Salvador", "Santiago Tulantepec de Lugo Guerrero", "Santiago de Anaya",
        "Singuilucan", "Tasquillo", "Tecozautla", "Tenango de Doria", "Tepeapulco", "Tepehuacan de Guerrero",
        "Tepeji del Rio de Ocampo", "Tepetitlan", "Tetepango", "Tezontepec de Aldama", "Tianguistengo",
        "Tizayuca", "Tlahuelilpan", "Tlahuiltepa", "Tlanalapa", "Tlanchinol", "Tlaxcoapan", "Tolcayuca",
        "Tula de Allende", "Tulancingo de Bravo", "Villa de Tezontepec", "Xochiatipan", "Xochicoatlan",
        "Yahualica", "Zacualtipan de Angeles", "Zapotlan de Juarez", "Zempoala", "Zimapan"
    ],
    "Jalisco": ["Acatic", "Acatlan de Juarez", "Ahualulco de Mercado", "Amacueca", "Amatitan", "Ameca", "Arandas",
        "Atemajac de Brizuela", "Atengo", "Atenguillo", "Atotonilco el Alto", "Atoyac", "Autlan de Navarro",
        "Ayotlan", "Ayutla", "Bolanos", "Cabo Corrientes", "Canadas de Obregon", "Casimiro Castillo", "Chapala",
        "Chimaltitan", "Chiquilistlan", "Cihuatlan", "Cocula", "Colotlan", "Concepcion de Buenos Aires",
        "Cuautitlan de Garcia Barragan", "Cuautla", "Cuquio", "Degollado", "Ejutla", "El Arenal", "El Grullo",
        "El Limon", "El Salto", "Encarnacion de Diaz", "Etzatlan", "Gomez Farias", "Guachinango", "Guadalajara",
        "Hostotipaquillo", "Huejucar", "Huejuquilla el Alto", "Ixtlahuacan de los Membrillos",
        "Ixtlahuacan del Rio", "Jalostotitlan", "Jamay", "Jesus Maria", "Jilotlan de los Dolores", "Jocotepec",
        "Juanacatlan", "Juchitlan", "La Barca", "La Huerta", "La Manzanilla de la Paz", "Lagos de Moreno",
        "Magdalena", "Mascota", "Mazamitla", "Mexticacan", "Mezquitic", "Mixtlan", "Ocotlan",
        "Ojuelos de Jalisco", "Pihuamo", "Poncitlan", "Puerto Vallarta", "Quitupan",
        "San Cristobal de la Barranca", "San Diego de Alejandria", "San Gabriel", "San Ignacio Cerro Gordo",
        "San Juan de los Lagos", "San Juanito de Escobedo", "San Julian", "San Marcos", "San Martin Hidalgo",
        "San Martin de Bolanos", "San Miguel el Alto", "San Pedro Tlaquepaque", "San Sebastian del Oeste",
        "Santa Maria de los Angeles", "Santa Maria del Oro", "Sayula", "Tala", "Talpa de Allende",
        "Tamazula de Gordiano", "Tapalpa", "Tecalitlan", "Techaluta de Montenegro", "Tecolotlan", "Tenamaxtlan",
        "Teocaltiche", "Teocuitatlan de Corona", "Tepatitlan de Morelos", "Tequila", "Teuchitlan",
        "Tizapan el Alto", "Tlajomulco de Zuniga", "Toliman", "Tomatlan", "Tonala", "Tonaya", "Tonila",
        "Totatiche", "Tototlan", "Tuxcacuesco", "Tuxcueca", "Tuxpan", "Union de San Antonio", "Union de Tula",
        "Valle de Guadalupe", "Valle de Juarez", "Villa Corona", "Villa Guerrero", "Villa Hidalgo",
        "Villa Purificacion", "Yahualica de Gonzalez Gallo", "Zacoalco de Torres", "Zapopan", "Zapotiltic",
        "Zapotitlan de Vadillo", "Zapotlan del Rey", "Zapotlan el Grande", "Zapotlanejo"
    ],
    "Estado de Mexico": ["Acambay de Ruiz Castaneda", "Acolman", "Aculco", "Almoloya de Alquisiras",
        "Almoloya de Juarez", "Almoloya del Rio", "Amanalco", "Amatepec", "Amecameca", "Apaxco", "Atenco",
        "Atizapan de Zaragoza", "Atizapan", "Atlacomulco", "Atlautla", "Axapusco", "Ayapango", "Calimaya",
        "Capulhuac", "Chalco", "Chapa de Mota", "Chapultepec", "Chiautla", "Chicoloapan", "Chiconcuac",
        "Chimalhuacan", "Coacalco de Berriozabal", "Coatepec Harinas", "Cocotitlan", "Coyotepec",
        "Cuautitlan Izcalli", "Cuautitlan", "Donato Guerra", "Ecatepec de Morelos", "Ecatzingo", "El Oro",
        "Huehuetoca", "Hueypoxtla", "Huixquilucan", "Isidro Fabela", "Ixtapaluca", "Ixtapan de la Sal",
        "Ixtapan del Oro", "Ixtlahuaca", "Jaltenco", "Jilotepec", "Jilotzingo", "Jiquipilco", "Jocotitlan",
        "Joquicingo", "Juchitepec", "La Paz", "Lerma", "Luvianos", "Malinalco", "Melchor Ocampo", "Metepec",
        "Mexicaltzingo", "Morelos", "Naucalpan de Juarez", "Nextlalpan", "Nezahualcoyotl", "Nicolas Romero",
        "Nopaltepec", "Ocoyoacac", "Ocuilan", "Otumba", "Otzoloapan", "Otzolotepec", "Ozumba", "Papalotla",
        "Polotitlan", "Rayon", "San Antonio la Isla", "San Felipe del Progreso", "San Jose del Rincon",
        "San Martin de las Piramides", "San Mateo Atenco", "San Simon de Guerrero", "Santo Tomas",
        "Soyaniquilpan de Juarez", "Sultepec", "Tecamac", "Tejupilco", "Temamatla", "Temascalapa",
        "Temascalcingo", "Temascaltepec", "Temoaya", "Tenancingo", "Tenango del Aire", "Tenango del Valle",
        "Teoloyucan", "Teotihuacan", "Tepetlaoxtoc", "Tepetlixpa", "Tepotzotlan", "Tequixquiac", "Texcaltitlan",
        "Texcalyacac", "Texcoco", "Tezoyuca", "Tianguistenco", "Timilpan", "Tlalmanalco", "Tlalnepantla de Baz",
        "Tlatlaya", "Toluca", "Tonanitla", "Tonatico", "Tultepec", "Tultitlan", "Valle de Bravo",
        "Valle de Chalco Solidaridad", "Villa Guerrero", "Villa Victoria", "Villa de Allende",
        "Villa del Carbon", "Xalatlaco", "Xonacatlan", "Zacazonapan", "Zacualpan", "Zinacantepec",
        "Zumpahuacan", "Zumpango"
    ],
    "Michoacan": ["Acuitzio", "Aguililla", "Alvaro Obregon", "Angamacutiro", "Angangueo", "Apatzingan", "Aporo",
        "Aquila", "Ario", "Arteaga", "Brisenas", "Buenavista", "Caracuaro", "Charapan", "Charo", "Chavinda",
        "Cheran", "Chilchota", "Chinicuila", "Chucandiro", "Churintzio", "Churumuco", "Coahuayana",
        "Coalcoman de Vazquez Pallares", "Coeneo", "Cojumatlan de Regules", "Contepec", "Copandaro", "Cotija",
        "Cuitzeo", "Ecuandureo", "Epitacio Huerta", "Erongaricuaro", "Gabriel Zamora", "Hidalgo", "Huandacareo",
        "Huaniqueo", "Huetamo", "Huiramba", "Indaparapeo", "Irimbo", "Ixtlan", "Jacona", "Jimenez", "Jiquilpan",
        "Jose Sixto Verduzco", "Juarez", "Jungapeo", "La Huacana", "La Piedad", "Lagunillas", "Lazaro Cardenas",
        "Los Reyes", "Madero", "Maravatio", "Marcos Castellanos", "Morelia", "Morelos", "Mugica", "Nahuatzen",
        "Nocupetaro", "Nuevo Parangaricutiro", "Nuevo Urecho", "Numaran", "Ocampo", "Pajacuaran",
        "Panindicuaro", "Paracho", "Paracuaro", "Patzcuaro", "Penjamillo", "Periban", "Purepero", "Puruandiro",
        "Querendaro", "Quiroga", "Sahuayo", "Salvador Escalante", "San Lucas", "Santa Ana Maya", "Senguio",
        "Susupuato", "Tacambaro", "Tancitaro", "Tangamandapio", "Tangancicuaro", "Tanhuato", "Taretan",
        "Tarimbaro", "Tepalcatepec", "Tingambato", "Tinguindin", "Tiquicheo de Nicolas Romero", "Tlalpujahua",
        "Tlazazalca", "Tocumbo", "Tumbiscatio", "Turicato", "Tuxpan", "Tuzantla", "Tzintzuntzan", "Tzitzio",
        "Uruapan", "Venustiano Carranza", "Villamar", "Vista Hermosa", "Yurecuaro", "Zacapu", "Zamora",
        "Zinaparo", "Zinapecuaro", "Ziracuaretiro", "Zitacuaro"
    ],
    "Morelos": ["Amacuzac", "Atlatlahucan", "Axochiapan", "Ayala", "Coatlan del Rio", "Cuautla", "Cuernavaca",
        "Emiliano Zapata", "Huitzilac", "Jantetelco", "Jiutepec", "Jojutla", "Jonacatepec de Leandro Valle",
        "Mazatepec", "Miacatlan", "Ocuituco", "Puente de Ixtla", "Temixco", "Temoac", "Tepalcingo", "Tepoztlan",
        "Tetecala", "Tetela del Volcan", "Tlalnepantla", "Tlaltizapan de Zapata", "Tlaquiltenango",
        "Tlayacapan", "Totolapan", "Xochitepec", "Yautepec", "Yecapixtla", "Zacatepec", "Zacualpan de Amilpas"
    ],
    "Nayarit": ["Acaponeta", "Ahuacatlan", "Amatlan de Canas", "Bahia de Banderas", "Compostela", "Del Nayar",
        "Huajicori", "Ixtlan del Rio", "Jala", "La Yesca", "Rosamorada", "Ruiz", "San Blas",
        "San Pedro Lagunillas", "Santa Maria del Oro", "Santiago Ixcuintla", "Tecuala", "Tepic", "Tuxpan",
        "Xalisco"
    ],
    "Nuevo Leon": ["Abasolo", "Agualeguas", "Allende", "Anahuac", "Apodaca", "Aramberri", "Bustamante",
        "Cadereyta Jimenez", "Cerralvo", "China", "Cienega de Flores", "Doctor Arroyo", "Doctor Coss",
        "Doctor Gonzalez", "El Carmen", "Galeana", "Garcia", "General Bravo", "General Escobedo",
        "General Teran", "General Trevino", "General Zaragoza", "General Zuazua", "Guadalupe", "Hidalgo",
        "Higueras", "Hualahuises", "Iturbide", "Juarez", "Lampazos de Naranjo", "Linares", "Los Aldamas",
        "Los Herreras", "Los Ramones", "Marin", "Melchor Ocampo", "Mier y Noriega", "Mina", "Montemorelos",
        "Monterrey", "Paras", "Pesqueria", "Rayones", "Sabinas Hidalgo", "Salinas Victoria",
        "San Nicolas de los Garza", "San Pedro Garza Garcia", "Santa Catarina", "Santiago", "Vallecillo",
        "Villaldama"
    ],
    "Oaxaca": ["Abejones", "Acatlan de Perez Figueroa", "Animas Trujano", "Asuncion Cacalotepec",
        "Asuncion Cuyotepeji", "Asuncion Ixtaltepec", "Asuncion Nochixtlan", "Asuncion Ocotlan",
        "Asuncion Tlacolulita", "Ayoquezco de Aldama", "Ayotzintepec", "Calihuala", "Candelaria Loxicha",
        "Capulalpam de Mendez", "Chahuites", "Chalcatongo de Hidalgo", "Chiquihuitlan de Benito Juarez",
        "Cienega de Zimatlan", "Ciudad Ixtepec", "Coatecas Altas", "Coicoyan de las Flores",
        "Concepcion Buenavista", "Concepcion Papalo", "Constancia del Rosario", "Cosolapa", "Cosoltepec",
        "Cuilapam de Guerrero", "Cuna de la Independencia de Oaxaca", "Cuyamecalco Villa de Zaragoza",
        "El Barrio de la Soledad", "El Espinal", "Eloxochitlan de Flores Magon", "Fresnillo de Trujano",
        "Guadalupe Etla", "Guadalupe de Ramirez", "Guelatao de Juarez", "Guevea de Humboldt",
        "Heroica Ciudad de Ejutla de Crespo", "Heroica Ciudad de Huajuapan de Leon",
        "Heroica Ciudad de Juchitan de Zaragoza", "Heroica Ciudad de Tlaxiaco",
        "Heroica Villa Tezoatlan de Segura y Luna", "Huautepec", "Huautla de Jimenez", "Ixpantepec Nieves",
        "Ixtlan de Juarez", "La Compania", "La Pe", "La Reforma", "La Trinidad Vista Hermosa", "Loma Bonita",
        "Magdalena Apasco", "Magdalena Jaltepec", "Magdalena Mixtepec", "Magdalena Ocotlan",
        "Magdalena Penasco", "Magdalena Teitipac", "Magdalena Tequisistlan", "Magdalena Tlacotepec",
        "Magdalena Yodocono de Porfirio Diaz", "Magdalena Zahuatlan", "Mariscala de Juarez",
        "Martires de Tacubaya", "Matias Romero Avendano", "Mazatlan Villa de Flores", "Mesones Hidalgo",
        "Miahuatlan de Porfirio Diaz", "Mixistlan de la Reforma", "Monjas", "Natividad", "Nazareno Etla",
        "Nejapa de Madero", "Nuevo Zoquiapam", "Oaxaca de Juarez", "Ocotlan de Morelos", "Pinotepa de Don Luis",
        "Pluma Hidalgo", "Putla Villa de Guerrero", "Reforma de Pineda", "Reyes Etla", "Rojas de Cuauhtemoc",
        "Salina Cruz", "San Agustin Amatengo", "San Agustin Atenango", "San Agustin Chayuco",
        "San Agustin Etla", "San Agustin Loxicha", "San Agustin Tlacotepec", "San Agustin Yatareni",
        "San Agustin de las Juntas", "San Andres Cabecera Nueva", "San Andres Dinicuiti",
        "San Andres Huaxpaltepec", "San Andres Huayapam", "San Andres Ixtlahuaca", "San Andres Lagunas",
        "San Andres Nuxino", "San Andres Paxtlan", "San Andres Sinaxtla", "San Andres Solaga",
        "San Andres Teotilalpam", "San Andres Tepetlapa", "San Andres Yaa", "San Andres Zabache",
        "San Andres Zautla", "San Antonino Castillo Velasco", "San Antonino Monte Verde",
        "San Antonino el Alto", "San Antonio Acutla", "San Antonio Huitepec", "San Antonio Nanahuatipam",
        "San Antonio Sinicahua", "San Antonio Tepetlapa", "San Antonio de la Cal", "San Baltazar Chichicapam",
        "San Baltazar Loxicha", "San Baltazar Yatzachi el Bajo", "San Bartolo Coyotepec",
        "San Bartolo Soyaltepec", "San Bartolo Yautepec", "San Bartolome Ayautla", "San Bartolome Loxicha",
        "San Bartolome Quialana", "San Bartolome Yucuane", "San Bartolome Zoogocho", "San Bernardo Mixtepec",
        "San Blas Atempa", "San Carlos Yautepec", "San Cristobal Amatlan", "San Cristobal Amoltepec",
        "San Cristobal Lachirioag", "San Cristobal Suchixtlahuaca", "San Dionisio Ocotepec",
        "San Dionisio Ocotlan", "San Dionisio del Mar", "San Esteban Atatlahuca", "San Felipe Jalapa de Diaz",
        "San Felipe Tejalapam", "San Felipe Usila", "San Francisco Cahuacua", "San Francisco Cajonos",
        "San Francisco Chapulapa", "San Francisco Chindua", "San Francisco Huehuetlan",
        "San Francisco Ixhuatan", "San Francisco Jaltepetongo", "San Francisco Lachigolo",
        "San Francisco Logueche", "San Francisco Nuxano", "San Francisco Ozolotepec", "San Francisco Sola",
        "San Francisco Telixtlahuaca", "San Francisco Teopan", "San Francisco Tlapancingo",
        "San Francisco del Mar", "San Gabriel Mixtepec", "San Ildefonso Amatlan", "San Ildefonso Sola",
        "San Ildefonso Villa Alta", "San Jacinto Amilpas", "San Jacinto Tlacotepec", "San Jeronimo Coatlan",
        "San Jeronimo Silacayoapilla", "San Jeronimo Sosola", "San Jeronimo Taviche", "San Jeronimo Tecoatl",
        "San Jeronimo Tlacochahuaya", "San Jorge Nuchita", "San Jose Ayuquila", "San Jose Chiltepec",
        "San Jose Estancia Grande", "San Jose Independencia", "San Jose Lachiguiri", "San Jose Tenango",
        "San Jose del Penasco", "San Jose del Progreso", "San Juan Achiutla", "San Juan Atepec",
        "San Juan Bautista Atatlahuca", "San Juan Bautista Coixtlahuaca", "San Juan Bautista Cuicatlan",
        "San Juan Bautista Guelache", "San Juan Bautista Jayacatlan", "San Juan Bautista Lo de Soto",
        "San Juan Bautista Suchitepec", "San Juan Bautista Tlachichilco", "San Juan Bautista Tlacoatzintepec",
        "San Juan Bautista Tuxtepec", "San Juan Bautista Valle Nacional", "San Juan Cacahuatepec",
        "San Juan Chicomezuchil", "San Juan Chilateca", "San Juan Cieneguilla", "San Juan Coatzospam",
        "San Juan Colorado", "San Juan Comaltepec", "San Juan Cotzocon", "San Juan Diuxi",
        "San Juan Evangelista Analco", "San Juan Guelavia", "San Juan Guichicovi", "San Juan Ihualtepec",
        "San Juan Juquila Mixes", "San Juan Juquila Vijanos", "San Juan Lachao", "San Juan Lachigalla",
        "San Juan Lajarcia", "San Juan Lalana", "San Juan Mazatlan", "San Juan Mixtepec", "San Juan Mixtepec",
        "San Juan Numi", "San Juan Ozolotepec", "San Juan Petlapa", "San Juan Quiahije", "San Juan Quiotepec",
        "San Juan Sayultepec", "San Juan Tabaa", "San Juan Tamazola", "San Juan Teita", "San Juan Teitipac",
        "San Juan Tepeuxila", "San Juan Teposcolula", "San Juan Yaee", "San Juan Yatzona", "San Juan Yucuita",
        "San Juan de los Cues", "San Juan del Estado", "San Juan del Rio", "San Lorenzo Albarradas",
        "San Lorenzo Cacaotepec", "San Lorenzo Cuaunecuiltitla", "San Lorenzo Texmelucan",
        "San Lorenzo Victoria", "San Lorenzo", "San Lucas Camotlan", "San Lucas Ojitlan", "San Lucas Quiavini",
        "San Lucas Zoquiapam", "San Luis Amatlan", "San Marcial Ozolotepec", "San Marcos Arteaga",
        "San Martin Huamelulpam", "San Martin Itunyoso", "San Martin Lachila", "San Martin Peras",
        "San Martin Tilcajete", "San Martin Toxpalan", "San Martin Zacatepec", "San Martin de los Cansecos",
        "San Mateo Cajonos", "San Mateo Etlatongo", "San Mateo Nejapam", "San Mateo Penasco", "San Mateo Pinas",
        "San Mateo Rio Hondo", "San Mateo Sindihui", "San Mateo Tlapiltepec", "San Mateo Yoloxochitlan",
        "San Mateo Yucutindoo", "San Mateo del Mar", "San Melchor Betaza", "San Miguel Achiutla",
        "San Miguel Ahuehuetitlan", "San Miguel Aloapam", "San Miguel Amatitlan", "San Miguel Amatlan",
        "San Miguel Chicahua", "San Miguel Chimalapa", "San Miguel Coatlan", "San Miguel Ejutla",
        "San Miguel Huautla", "San Miguel Mixtepec", "San Miguel Panixtlahuaca", "San Miguel Peras",
        "San Miguel Piedras", "San Miguel Quetzaltepec", "San Miguel Santa Flor", "San Miguel Soyaltepec",
        "San Miguel Suchixtepec", "San Miguel Tecomatlan", "San Miguel Tenango", "San Miguel Tequixtepec",
        "San Miguel Tilquiapam", "San Miguel Tlacamama", "San Miguel Tlacotepec", "San Miguel Tulancingo",
        "San Miguel Yotao", "San Miguel del Puerto", "San Miguel del Rio", "San Miguel el Grande",
        "San Nicolas Hidalgo", "San Nicolas", "San Pablo Coatlan", "San Pablo Cuatro Venados", "San Pablo Etla",
        "San Pablo Huitzo", "San Pablo Huixtepec", "San Pablo Macuiltianguis", "San Pablo Tijaltepec",
        "San Pablo Villa de Mitla", "San Pablo Yaganiza", "San Pedro Amuzgos", "San Pedro Apostol",
        "San Pedro Atoyac", "San Pedro Cajonos", "San Pedro Comitancillo", "San Pedro Coxcaltepec Cantaros",
        "San Pedro Huamelula", "San Pedro Huilotepec", "San Pedro Ixcatlan", "San Pedro Ixtlahuaca",
        "San Pedro Jaltepetongo", "San Pedro Jicayan", "San Pedro Jocotipac", "San Pedro Juchatengo",
        "San Pedro Martir Quiechapa", "San Pedro Martir Yucuxaco", "San Pedro Martir", "San Pedro Mixtepec",
        "San Pedro Mixtepec", "San Pedro Molinos", "San Pedro Nopala", "San Pedro Ocopetatillo",
        "San Pedro Ocotepec", "San Pedro Pochutla", "San Pedro Quiatoni", "San Pedro Sochiapam",
        "San Pedro Tapanatepec", "San Pedro Taviche", "San Pedro Teozacoalco", "San Pedro Teutila",
        "San Pedro Tidaa", "San Pedro Topiltepec", "San Pedro Totolapam", "San Pedro Yaneri", "San Pedro Yolox",
        "San Pedro Yucunama", "San Pedro el Alto", "San Pedro y San Pablo Ayutla",
        "San Pedro y San Pablo Teposcolula", "San Pedro y San Pablo Tequixtepec", "San Raymundo Jalpan",
        "San Sebastian Abasolo", "San Sebastian Coatlan", "San Sebastian Ixcapa", "San Sebastian Nicananduta",
        "San Sebastian Rio Hondo", "San Sebastian Tecomaxtlahuaca", "San Sebastian Teitipac",
        "San Sebastian Tutla", "San Simon Almolongas", "San Simon Zahuatlan", "San Vicente Coatlan",
        "San Vicente Lachixio", "San Vicente Nunu", "Santa Ana Ateixtlahuaca", "Santa Ana Cuauhtemoc",
        "Santa Ana Tavela", "Santa Ana Tlapacoyan", "Santa Ana Yareni", "Santa Ana Zegache",
        "Santa Ana del Valle", "Santa Ana", "Santa Catalina Quieri", "Santa Catarina Cuixtla",
        "Santa Catarina Ixtepeji", "Santa Catarina Juquila", "Santa Catarina Lachatao",
        "Santa Catarina Loxicha", "Santa Catarina Mechoacan", "Santa Catarina Minas", "Santa Catarina Quiane",
        "Santa Catarina Quioquitani", "Santa Catarina Tayata", "Santa Catarina Ticua",
        "Santa Catarina Yosonotu", "Santa Catarina Zapoquila", "Santa Cruz Acatepec", "Santa Cruz Amilpas",
        "Santa Cruz Itundujia", "Santa Cruz Mixtepec", "Santa Cruz Nundaco", "Santa Cruz Papalutla",
        "Santa Cruz Tacache de Mina", "Santa Cruz Tacahua", "Santa Cruz Tayata", "Santa Cruz Xitla",
        "Santa Cruz Xoxocotlan", "Santa Cruz Zenzontepec", "Santa Cruz de Bravo", "Santa Gertrudis",
        "Santa Ines Yatzeche", "Santa Ines de Zaragoza", "Santa Ines del Monte", "Santa Lucia Miahuatlan",
        "Santa Lucia Monteverde", "Santa Lucia Ocotlan", "Santa Lucia del Camino", "Santa Magdalena Jicotlan",
        "Santa Maria Alotepec", "Santa Maria Apazco", "Santa Maria Atzompa", "Santa Maria Camotlan",
        "Santa Maria Chachoapam", "Santa Maria Chilchotla", "Santa Maria Chimalapa", "Santa Maria Colotepec",
        "Santa Maria Cortijo", "Santa Maria Coyotepec", "Santa Maria Ecatepec", "Santa Maria Guelace",
        "Santa Maria Guienagati", "Santa Maria Huatulco", "Santa Maria Huazolotitlan", "Santa Maria Ipalapa",
        "Santa Maria Ixcatlan", "Santa Maria Jacatepec", "Santa Maria Jalapa del Marques",
        "Santa Maria Jaltianguis", "Santa Maria Lachixio", "Santa Maria Mixtequilla", "Santa Maria Nativitas",
        "Santa Maria Nduayaco", "Santa Maria Ozolotepec", "Santa Maria Papalo", "Santa Maria Penoles",
        "Santa Maria Petapa", "Santa Maria Quiegolani", "Santa Maria Sola", "Santa Maria Tataltepec",
        "Santa Maria Tecomavaca", "Santa Maria Temaxcalapa", "Santa Maria Temaxcaltepec",
        "Santa Maria Teopoxco", "Santa Maria Tepantlali", "Santa Maria Texcatitlan",
        "Santa Maria Tlahuitoltepec", "Santa Maria Tlalixtac", "Santa Maria Tonameca",
        "Santa Maria Totolapilla", "Santa Maria Xadani", "Santa Maria Yalina", "Santa Maria Yavesia",
        "Santa Maria Yolotepec", "Santa Maria Yosoyua", "Santa Maria Yucuhiti", "Santa Maria Zacatepec",
        "Santa Maria Zaniza", "Santa Maria Zoquitlan", "Santa Maria del Rosario", "Santa Maria del Tule",
        "Santa Maria la Asuncion", "Santiago Amoltepec", "Santiago Apoala", "Santiago Apostol",
        "Santiago Astata", "Santiago Atitlan", "Santiago Ayuquililla", "Santiago Cacaloxtepec",
        "Santiago Camotlan", "Santiago Chazumba", "Santiago Choapam", "Santiago Comaltepec",
        "Santiago Huajolotitlan", "Santiago Huauclilla", "Santiago Ihuitlan Plumas", "Santiago Ixcuintepec",
        "Santiago Ixtayutla", "Santiago Jamiltepec", "Santiago Jocotepec", "Santiago Juxtlahuaca",
        "Santiago Lachiguiri", "Santiago Lalopa", "Santiago Laollaga", "Santiago Laxopa",
        "Santiago Llano Grande", "Santiago Matatlan", "Santiago Miltepec", "Santiago Minas",
        "Santiago Nacaltepec", "Santiago Nejapilla", "Santiago Niltepec", "Santiago Nundiche", "Santiago Nuyoo",
        "Santiago Pinotepa Nacional", "Santiago Suchilquitongo", "Santiago Tamazola", "Santiago Tapextla",
        "Santiago Tenango", "Santiago Tepetlapa", "Santiago Tetepec", "Santiago Texcalcingo",
        "Santiago Textitlan", "Santiago Tilantongo", "Santiago Tillo", "Santiago Tlazoyaltepec",
        "Santiago Xanica", "Santiago Xiacui", "Santiago Yaitepec", "Santiago Yaveo", "Santiago Yolomecatl",
        "Santiago Yosondua", "Santiago Yucuyachi", "Santiago Zacatepec", "Santiago Zoochila",
        "Santiago del Rio", "Santo Domingo Albarradas", "Santo Domingo Armenta", "Santo Domingo Chihuitan",
        "Santo Domingo Ingenio", "Santo Domingo Ixcatlan", "Santo Domingo Nuxaa", "Santo Domingo Ozolotepec",
        "Santo Domingo Petapa", "Santo Domingo Roayaga", "Santo Domingo Tehuantepec",
        "Santo Domingo Teojomulco", "Santo Domingo Tepuxtepec", "Santo Domingo Tlatayapam",
        "Santo Domingo Tomaltepec", "Santo Domingo Tonala", "Santo Domingo Tonaltepec", "Santo Domingo Xagacia",
        "Santo Domingo Yanhuitlan", "Santo Domingo Yodohino", "Santo Domingo Zanatepec",
        "Santo Domingo de Morelos", "Santo Tomas Jalieza", "Santo Tomas Mazaltepec", "Santo Tomas Ocotepec",
        "Santo Tomas Tamazulapan", "Santos Reyes Nopala", "Santos Reyes Papalo", "Santos Reyes Tepejillo",
        "Santos Reyes Yucuna", "Silacayoapam", "Sitio de Xitlapehua", "Soledad Etla",
        "Tamazulapam del Espiritu Santo", "Tanetze de Zaragoza", "Taniche", "Tataltepec de Valdes",
        "Teococuilco de Marcos Perez", "Teotitlan de Flores Magon", "Teotitlan del Valle", "Teotongo",
        "Tepelmeme Villa de Morelos", "Tlacolula de Matamoros", "Tlacotepec Plumas", "Tlalixtac de Cabrera",
        "Totontepec Villa de Morelos", "Trinidad Zaachila", "Union Hidalgo", "Valerio Trujano",
        "Villa Diaz Ordaz", "Villa Hidalgo", "Villa Sola de Vega", "Villa Talea de Castro",
        "Villa Tejupam de la Union", "Villa de Chilapa de Diaz", "Villa de Etla",
        "Villa de Tamazulapam del Progreso", "Villa de Tututepec", "Villa de Zaachila", "Yaxe", "Yogana",
        "Yutanduchi de Guerrero", "Zapotitlan Lagunas", "Zapotitlan Palmas", "Zimatlan de Alvarez"
    ],
    "Puebla": ["Acajete", "Acateno", "Acatlan", "Acatzingo", "Acteopan", "Ahuacatlan", "Ahuatlan", "Ahuazotepec",
        "Ahuehuetitla", "Ajalpan", "Albino Zertuche", "Aljojuca", "Altepexi", "Amixtlan", "Amozoc", "Aquixtla",
        "Atempan", "Atexcal", "Atlequizayan", "Atlixco", "Atoyatempan", "Atzala", "Atzitzihuacan",
        "Atzitzintla", "Axutla", "Ayotoxco de Guerrero", "Calpan", "Caltepec", "Camocuautla", "Canada Morelos",
        "Caxhuacan", "Chalchicomula de Sesma", "Chapulco", "Chiautla", "Chiautzingo", "Chichiquila",
        "Chiconcuautla", "Chietla", "Chigmecatitlan", "Chignahuapan", "Chignautla", "Chila de la Sal", "Chila",
        "Chilchotla", "Chinantla", "Coatepec", "Coatzingo", "Cohetzala", "Cohuecan", "Coronango", "Coxcatlan",
        "Coyomeapan", "Coyotepec", "Cuapiaxtla de Madero", "Cuautempan", "Cuautinchan", "Cuautlancingo",
        "Cuayuca de Andrade", "Cuetzalan del Progreso", "Cuyoaco", "Domingo Arenas", "Eloxochitlan", "Epatlan",
        "Esperanza", "Francisco Z. Mena", "General Felipe Angeles", "Guadalupe Victoria", "Guadalupe",
        "Hermenegildo Galeana", "Honey", "Huaquechula", "Huatlatlauca", "Huauchinango", "Huehuetla",
        "Huehuetlan el Chico", "Huehuetlan el Grande", "Huejotzingo", "Hueyapan", "Hueytamalco", "Hueytlalpan",
        "Huitzilan de Serdan", "Huitziltepec", "Ixcamilpa de Guerrero", "Ixcaquixtla", "Ixtacamaxtitlan",
        "Ixtepec", "Izucar de Matamoros", "Jalpan", "Jolalpan", "Jonotla", "Jopala", "Juan C. Bonilla",
        "Juan Galindo", "Juan N. Mendez", "La Magdalena Tlatlauquitepec", "Lafragua", "Libres",
        "Los Reyes de Juarez", "Mazapiltepec de Juarez", "Mixtla", "Molcaxac", "Naupan", "Nauzontla",
        "Nealtican", "Nicolas Bravo", "Nopalucan", "Ocotepec", "Ocoyucan", "Olintla", "Oriental", "Pahuatlan",
        "Palmar de Bravo", "Pantepec", "Petlalcingo", "Piaxtla", "Puebla", "Quecholac", "Quimixtlan",
        "Rafael Lara Grajales", "San Andres Cholula", "San Antonio Canada", "San Diego la Mesa Tochimiltzingo",
        "San Felipe Teotlalcingo", "San Felipe Tepatlan", "San Gabriel Chilac", "San Gregorio Atzompa",
        "San Jeronimo Tecuanipan", "San Jeronimo Xayacatlan", "San Jose Chiapa", "San Jose Miahuatlan",
        "San Juan Atenco", "San Juan Atzompa", "San Martin Texmelucan", "San Martin Totoltepec",
        "San Matias Tlalancaleca", "San Miguel Ixitlan", "San Miguel Xoxtla", "San Nicolas Buenos Aires",
        "San Nicolas de los Ranchos", "San Pablo Anicano", "San Pedro Cholula", "San Pedro Yeloixtlahuaca",
        "San Salvador Huixcolotla", "San Salvador el Seco", "San Salvador el Verde", "San Sebastian Tlacotepec",
        "Santa Catarina Tlaltempan", "Santa Ines Ahuatempan", "Santa Isabel Cholula", "Santiago Miahuatlan",
        "Santo Tomas Hueyotlipan", "Soltepec", "Tecali de Herrera", "Tecamachalco", "Tecomatlan", "Tehuacan",
        "Tehuitzingo", "Tenampulco", "Teopantlan", "Teotlalco", "Tepanco de Lopez", "Tepango de Rodriguez",
        "Tepatlaxco de Hidalgo", "Tepeaca", "Tepemaxalco", "Tepeojuma", "Tepetzintla", "Tepexco",
        "Tepexi de Rodriguez", "Tepeyahualco de Cuauhtemoc", "Tepeyahualco", "Tetela de Ocampo",
        "Teteles de Avila Castillo", "Teziutlan", "Tianguismanalco", "Tilapa", "Tlachichuca",
        "Tlacotepec de Benito Juarez", "Tlacuilotepec", "Tlahuapan", "Tlaltenango", "Tlanepantla", "Tlaola",
        "Tlapacoya", "Tlapanala", "Tlatlauquitepec", "Tlaxco", "Tochimilco", "Tochtepec",
        "Totoltepec de Guerrero", "Tulcingo", "Tuzamapan de Galeana", "Tzicatlacoyan", "Venustiano Carranza",
        "Vicente Guerrero", "Xayacatlan de Bravo", "Xicotepec", "Xicotlan", "Xiutetelco", "Xochiapulco",
        "Xochiltepec", "Xochitlan Todos Santos", "Xochitlan de Vicente Suarez", "Yaonahuac", "Yehualtepec",
        "Zacapala", "Zacapoaxtla", "Zacatlan", "Zapotitlan de Mendez", "Zapotitlan", "Zaragoza", "Zautla",
        "Zihuateutla", "Zinacatepec", "Zongozotla", "Zoquiapan", "Zoquitlan"
    ],
    "Queretaro": ["Amealco de Bonfil", "Arroyo Seco", "Cadereyta de Montes", "Colon", "Corregidora", "El Marques",
        "Ezequiel Montes", "Huimilpan", "Jalpan de Serra", "Landa de Matamoros", "Pedro Escobedo", "Penamiller",
        "Pinal de Amoles", "Queretaro", "San Joaquin", "San Juan del Rio", "Tequisquiapan", "Toliman"
    ],
    "Quintana Roo": ["Bacalar", "Benito Juarez", "Cozumel", "Felipe Carrillo Puerto", "Isla Mujeres",
        "Jose Maria Morelos", "Lazaro Cardenas", "Othon P. Blanco", "Puerto Morelos", "Solidaridad", "Tulum"
    ],
    "San Luis Potosí": ["Ahualulco", "Alaquines", "Aquismon", "Armadillo de los Infante", "Axtla de Terrazas",
        "Cardenas", "Catorce", "Cedral", "Cerritos", "Cerro de San Pedro", "Charcas", "Ciudad Fernandez",
        "Ciudad Valles", "Ciudad del Maiz", "Coxcatlan", "Ebano", "El Naranjo", "Guadalcazar", "Huehuetlan",
        "Lagunillas", "Matehuala", "Matlapa", "Mexquitic de Carmona", "Moctezuma", "Rayon", "Rioverde",
        "Salinas", "San Antonio", "San Ciro de Acosta", "San Luis Potosi", "San Martin Chalchicuautla",
        "San Nicolas Tolentino", "San Vicente Tancuayalab", "Santa Catarina", "Santa Maria del Rio",
        "Santo Domingo", "Soledad de Graciano Sanchez", "Tamasopo", "Tamazunchale", "Tampacan",
        "Tampamolon Corona", "Tamuin", "Tancanhuitz", "Tanlajas", "Tanquian de Escobedo", "Tierra Nueva",
        "Vanegas", "Venado", "Villa Hidalgo", "Villa Juarez", "Villa de Arista", "Villa de Arriaga",
        "Villa de Guadalupe", "Villa de Ramos", "Villa de Reyes", "Villa de la Paz", "Xilitla", "Zaragoza"
    ],
    "Sinaloa": ["Ahome", "Angostura", "Badiraguato", "Choix", "Concordia", "Cosala", "Culiacan", "El Fuerte",
        "Elota", "Escuinapa", "Guasave", "Mazatlan", "Mocorito", "Navolato", "Rosario", "Salvador Alvarado",
        "San Ignacio", "Sinaloa"
    ],
    "Sonora": ["Aconchi", "Agua Prieta", "Alamos", "Altar", "Arivechi", "Arizpe", "Atil", "Bacadehuachi",
        "Bacanora", "Bacerac", "Bacoachi", "Bacum", "Banamichi", "Baviacora", "Bavispe", "Benito Juarez",
        "Benjamin Hill", "Caborca", "Cajeme", "Cananea", "Carbo", "Cucurpe", "Cumpas", "Divisaderos", "Empalme",
        "Etchojoa", "Fronteras", "General Plutarco Elias Calles", "Granados", "Guaymas", "Hermosillo",
        "Huachinera", "Huasabas", "Huatabampo", "Huepac", "Imuris", "La Colorada", "Magdalena", "Mazatan",
        "Moctezuma", "Naco", "Nacori Chico", "Nacozari de Garcia", "Navojoa", "Nogales", "Onavas", "Opodepe",
        "Oquitoa", "Pitiquito", "Puerto Penasco", "Quiriego", "Rayon", "Rosario", "Sahuaripa",
        "San Felipe de Jesus", "San Ignacio Rio Muerto", "San Javier", "San Luis Rio Colorado",
        "San Miguel de Horcasitas", "San Pedro de la Cueva", "Santa Ana", "Santa Cruz", "Saric", "Soyopa",
        "Suaqui Grande", "Tepache", "Trincheras", "Tubutama", "Ures", "Villa Hidalgo", "Villa Pesqueira",
        "Yecora"
    ],
    "Tabasco": ["Balancan", "Cardenas", "Centla", "Centro", "Comalcalco", "Cunduacan", "Emiliano Zapata",
        "Huimanguillo", "Jalapa", "Jalpa de Mendez", "Jonuta", "Macuspana", "Nacajuca", "Paraiso", "Tacotalpa",
        "Teapa", "Tenosique", "Villahermosa"
    ],
    "Tamaulipas": ["Abasolo", "Aldama", "Altamira", "Antiguo Morelos", "Burgos", "Bustamante", "Camargo", "Casas",
        "Ciudad Madero", "Cruillas", "El Mante", "Gomez Farias", "Gonzalez", "Guemez", "Guerrero",
        "Gustavo Diaz Ordaz", "Hidalgo", "Jaumave", "Jimenez", "Llera", "Mainero", "Matamoros", "Mendez",
        "Mier", "Miguel Aleman", "Miquihuana", "Nuevo Laredo", "Nuevo Morelos", "Ocampo", "Padilla",
        "Palmillas", "Reynosa", "Rio Bravo", "San Carlos", "San Fernando", "San Nicolas", "Soto la Marina",
        "Tampico", "Tula", "Valle Hermoso", "Victoria", "Villagran", "Xicotencatl"
    ],
    "Tlaxcala": ["Acuamanala de Miguel Hidalgo", "Amaxac de Guerrero", "Apetatitlan de Antonio Carvajal", "Apizaco",
        "Atlangatepec", "Atltzayanca", "Benito Juarez", "Calpulalpan", "Chiautempan", "Contla de Juan Cuamatzi",
        "Cuapiaxtla", "Cuaxomulco", "El Carmen Tequexquitla", "Emiliano Zapata", "Espanita", "Huamantla",
        "Hueyotlipan", "Ixtacuixtla de Mariano Matamoros", "Ixtenco", "La Magdalena Tlaltelulco",
        "Lazaro Cardenas", "Mazatecochco de Jose Maria Morelos", "Munoz de Domingo Arenas",
        "Nanacamilpa de Mariano Arista", "Nativitas", "Panotla", "Papalotla de Xicohtencatl",
        "San Damian Texoloc", "San Francisco Tetlanohcan", "San Jeronimo Zacualpan", "San Jose Teacalco",
        "San Juan Huactzinco", "San Lorenzo Axocomanitla", "San Lucas Tecopilco", "San Pablo del Monte",
        "Sanctorum de Lazaro Cardenas", "Santa Ana Nopalucan", "Santa Apolonia Teacalco",
        "Santa Catarina Ayometla", "Santa Cruz Quilehtla", "Santa Cruz Tlaxcala", "Santa Isabel Xiloxoxtla",
        "Tenancingo", "Teolocholco", "Tepetitla de Lardizabal", "Tepeyanco", "Terrenate",
        "Tetla de la Solidaridad", "Tetlatlahuca", "Tlaxcala", "Tlaxco", "Tocatlan", "Totolac", "Tzompantepec",
        "Xaloztoc", "Xaltocan", "Xicohtzinco", "Yauhquemehcan", "Zacatelco",
        "Ziltlaltepec de Trinidad Sanchez Santos"
    ],
    "Veracruz": ["Acajete", "Acatlan", "Acayucan", "Actopan", "Acula", "Acultzingo", "Agua Dulce",
        "Alamo Temapache", "Alpatlahuac", "Alto Lucero de Gutierrez Barrios", "Altotonga", "Alvarado",
        "Amatitlan", "Amatlan de los Reyes", "Angel R. Cabada", "Apazapan", "Aquila", "Astacinga", "Atlahuilco",
        "Atoyac", "Atzacan", "Atzalan", "Ayahualulco", "Banderilla", "Benito Juarez", "Boca del Rio",
        "Calcahualco", "Camaron de Tejeda", "Camerino Z. Mendoza", "Carlos A. Carrillo", "Carrillo Puerto",
        "Castillo de Teayo", "Catemaco", "Cazones de Herrera", "Cerro Azul", "Chacaltianguis", "Chalma",
        "Chiconamel", "Chiconquiaco", "Chicontepec", "Chinameca", "Chinampa de Gorostiza", "Chocaman",
        "Chontla", "Chumatlan", "Citlaltepetl", "Coacoatzintla", "Coahuitlan", "Coatepec", "Coatzacoalcos",
        "Coatzintla", "Coetzala", "Colipa", "Comapa", "Cordoba", "Cosamaloapan de Carpio",
        "Cosautlan de Carvajal", "Coscomatepec", "Cosoleacaque", "Cotaxtla", "Coxquihui", "Coyutla", "Cuichapa",
        "Cuitlahuac", "El Higo", "Emiliano Zapata", "Espinal", "Filomeno Mata", "Fortin", "Gutierrez Zamora",
        "Hidalgotitlan", "Huatusco", "Huayacocotla", "Hueyapan de Ocampo", "Huiloapan de Cuauhtemoc",
        "Ignacio de la Llave", "Ilamatlan", "Isla", "Ixcatepec", "Ixhuacan de los Reyes", "Ixhuatlan de Madero",
        "Ixhuatlan del Cafe", "Ixhuatlan del Sureste", "Ixhuatlancillo", "Ixmatlahuacan", "Ixtaczoquitlan",
        "Jalacingo", "Jalcomulco", "Jaltipan", "Jamapa", "Jesus Carranza", "Jilotepec", "Jose Azueta",
        "Juan Rodriguez Clara", "Juchique de Ferrer", "La Antigua", "La Perla", "Landero y Coss", "Las Choapas",
        "Las Minas", "Las Vigas de Ramirez", "Lerdo de Tejada", "Los Reyes", "Magdalena", "Maltrata",
        "Manlio Fabio Altamirano", "Mariano Escobedo", "Martinez de la Torre", "Mecatlan", "Mecayapan",
        "Medellin de Bravo", "Miahuatlan", "Minatitlan", "Misantla", "Mixtla de Altamirano", "Moloacan",
        "Nanchital de Lazaro Cardenas del Rio", "Naolinco", "Naranjal", "Naranjos Amatlan", "Nautla", "Nogales",
        "Oluta", "Omealca", "Orizaba", "Otatitlan", "Oteapan", "Ozuluama de Mascarenas", "Pajapan", "Panuco",
        "Papantla", "Paso de Ovejas", "Paso del Macho", "Perote", "Platon Sanchez", "Playa Vicente",
        "Poza Rica de Hidalgo", "Pueblo Viejo", "Puente Nacional", "Rafael Delgado", "Rafael Lucio",
        "Rio Blanco", "Saltabarranca", "San Andres Tenejapan", "San Andres Tuxtla", "San Juan Evangelista",
        "San Rafael", "Santiago Sochiapan", "Santiago Tuxtla", "Sayula de Aleman", "Sochiapa", "Soconusco",
        "Soledad Atzompa", "Soledad de Doblado", "Soteapan", "Tamalin", "Tamiahua", "Tampico Alto", "Tancoco",
        "Tantima", "Tantoyuca", "Tatahuicapan de Juarez", "Tatatila", "Tecolutla", "Tehuipango", "Tempoal",
        "Tenampa", "Tenochtitlan", "Teocelo", "Tepatlaxco", "Tepetlan", "Tepetzintla", "Tequila", "Texcatepec",
        "Texhuacan", "Texistepec", "Tezonapa", "Tierra Blanca", "Tihuatlan", "Tlachichilco", "Tlacojalpan",
        "Tlacolulan", "Tlacotalpan", "Tlacotepec de Mejia", "Tlalixcoyan", "Tlalnelhuayocan", "Tlaltetela",
        "Tlapacoyan", "Tlaquilpa", "Tlilapan", "Tomatlan", "Tonayan", "Totutla", "Tres Valles", "Tuxpan",
        "Tuxtilla", "Ursulo Galvan", "Uxpanapa", "Vega de Alatorre", "Veracruz", "Villa Aldama", "Xalapa",
        "Xico", "Xoxocotla", "Yanga", "Yecuatla", "Zacualpan", "Zaragoza", "Zentla", "Zongolica",
        "Zontecomatlan de Lopez y Fuentes", "Zozocolco de Hidalgo"
    ],
    "Yucatan": ["Abala", "Acanceh", "Akil", "Baca", "Bokoba", "Buctzotz", "Cacalchen", "Calotmul", "Cansahcab",
        "Cantamayec", "Celestun", "Cenotillo", "Chacsinkin", "Chankom", "Chapab", "Chemax", "Chichimila",
        "Chicxulub Pueblo", "Chikindzonot", "Chochola", "Chumayel", "Conkal", "Cuncunul", "Cuzama", "Dzan",
        "Dzemul", "Dzidzantun", "Dzilam Gonzalez", "Dzilam de Bravo", "Dzitas", "Dzoncauich", "Espita",
        "Halacho", "Hocaba", "Hoctun", "Homun", "Huhi", "Hunucma", "Ixil", "Izamal", "Kanasin", "Kantunil",
        "Kaua", "Kinchil", "Kopoma", "Mama", "Mani", "Maxcanu", "Mayapan", "Merida", "Mococha", "Motul", "Muna",
        "Muxupip", "Opichen", "Oxkutzcab", "Panaba", "Peto", "Progreso", "Quintana Roo", "Rio Lagartos",
        "Sacalum", "Samahil", "San Felipe", "Sanahcat", "Santa Elena", "Seye", "Sinanche", "Sotuta", "Sucila",
        "Sudzal", "Suma", "Tahdziu", "Tahmek", "Teabo", "Tecoh", "Tekal de Venegas", "Tekanto", "Tekax",
        "Tekit", "Tekom", "Telchac Pueblo", "Telchac Puerto", "Temax", "Temozon", "Tepakan", "Tetiz", "Teya",
        "Ticul", "Timucuy", "Tinum", "Tixcacalcupul", "Tixkokob", "Tixmehuac", "Tixpehual", "Tizimin", "Tunkas",
        "Tzucacab", "Uayma", "Ucu", "Uman", "Valladolid", "Xocchel", "Yaxcaba", "Yaxkukul", "Yobain"
    ],
    "Zacatecas": ["Apozol", "Apulco", "Atolinga", "Benito Juarez", "Calera", "Canitas de Felipe Pescador",
        "Chalchihuites", "Concepcion del Oro", "Cuauhtemoc", "El Plateado de Joaquin Amaro", "El Salvador",
        "Fresnillo", "Genaro Codina", "General Enrique Estrada", "General Francisco R. Murguia",
        "General Panfilo Natera", "Guadalupe", "Huanusco", "Jalpa", "Jerez", "Jimenez del Teul", "Juan Aldama",
        "Juchipila", "Loreto", "Luis Moya", "Mazapil", "Melchor Ocampo", "Mezquital del Oro", "Miguel Auza",
        "Momax", "Monte Escobedo", "Morelos", "Moyahua de Estrada", "Nochistlan de Mejia", "Noria de Angeles",
        "Ojocaliente", "Panuco", "Pinos", "Rio Grande", "Sain Alto", "Santa Maria de la Paz", "Sombrerete",
        "Susticacan", "Tabasco", "Tepechitlan", "Tepetongo", "Teul de Gonzalez Ortega",
        "Tlaltenango de Sanchez Roman", "Trancoso", "Trinidad Garcia de la Cadena", "Valparaiso", "Vetagrande",
        "Villa Garcia", "Villa Gonzalez Ortega", "Villa Hidalgo", "Villa de Cos", "Villanueva", "Zacatecas"
    ]
}


function cargarMunicipios() {
    const estadoSeleccionado = document.getElementById('slestado').value;
    const municipios = municipiosPorEstado[estadoSeleccionado] || [];

    const municipiosSelect = document.getElementById('txtmunicipio');
    municipiosSelect.innerHTML = '';

    if (municipios.length) {
        municipiosSelect.disabled = false;

        municipios.forEach((municipio) => {
            const option = document.createElement('option');
            option.value = municipio;
            option.textContent = municipio;
            municipiosSelect.appendChild(option);
        });
    } else {
        municipiosSelect.disabled = true;

        const option = document.createElement('option');
        option.value = '';
        option.textContent = 'No hay municipios disponibles';
        municipiosSelect.appendChild(option);
    }
}
function cargarMunicipiosComp() {
    const estadoSeleccionado = document.getElementById('slestadocomp').value;
    const municipios = municipiosPorEstado[estadoSeleccionado] || [];

    const municipiosSelect = document.getElementById('txtmunicipiocomp');
    municipiosSelect.innerHTML = '';

    if (municipios.length) {
        municipiosSelect.disabled = false;

        municipios.forEach((municipio) => {
            const option = document.createElement('option');
            option.value = municipio;
            option.textContent = municipio;
            municipiosSelect.appendChild(option);
        });
    } else {
        municipiosSelect.disabled = true;

        const option = document.createElement('option');
        option.value = '';
        option.textContent = 'No hay municipios disponibles';
        municipiosSelect.appendChild(option);
    }
}
</script>