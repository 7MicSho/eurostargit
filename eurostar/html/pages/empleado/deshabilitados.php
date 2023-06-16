<?php if(isset($_GET['ok'])){  ?>
<script>
    Swal.fire({
                icon: 'success',
                title: 'AGREGADO',
                text: 'El empleado se han guardado correctamente',
                footer: ''
            })
</script>
<?php } ?>
<div class="col-12 text-center titlebanner-seller">
    <h1 class="display-3 txt-title" style="margin: 0;"> Empleados Deshabilitados</h1>
</div>
<div class="content-wraper" style="padding-left: 3%;padding-right: 3%;">
    <div class="col-xl">

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-4 col-md-12" style="width: 32%; margin-right:10px" >
                    
                </div>
                <div class="col-lg-4 col-md-12 " style="width: 32%;  margin-right:10px" >
              
                </div>

                <div class="col-lg-4 col-md-12" style="width: 32%;">
                    <a href="?modulo=empleado&accion=home">
                        <div class="d-flex align-items-center row">
                            <div class="col-sm-12 bg-success text-center"
                                style="color: white; border-radius: 10px 10px 10px 10px;">
                                <i class="fa-solid fa-user-times fa-2x mt-4"></i>
                                <p class="mt-1 pb-1">
                                Empleados habilitados
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <div class="nav-align-top">

            <div class="tab-content">
                <div class="tab-pane fade show active" role="tabpanel">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <h5 style="text-align: center;">EMPLEADOS</h5>
                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table dataTable " style="width:100%">
                            <thead class="table">
                                <tr style="text-align: center;">
                                    
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                    <th>RFC</th>
                                    <th>Telefono(S)</th>

                                    <th style="text-align: center;"> Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">

                                <?php for ($i = 0; $i < count($vendedores); $i++) { ?>

                                    <tr>
                                       
                                        <td>
                                            <i class="bx bx-user-circle"></i> <strong>
                                            <?php echo $vendedores[$i]['nombre'] . ' ' . $vendedores[$i]['primer_apellido'] ?>
                                            </strong>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">
                                                <?php echo $vendedores[$i]['fk_id_tipoempleado'] ?>
                                            </span>
                                        </td>
                                        <td>
                                            <?php echo $vendedores[$i]['rfc'] ?>
                                        </td>
                                        <td >


                                            <?php if (isset($vendedores[$i]['telefonos'])) { ?>
                                                <?php $telefono = explode(",", $vendedores[$i]['telefonos']); ?>
                                                <?php if (isset($telefono[1])) { ?>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="true">
                                                            TELEFONOS 2+
                                                        </button>
                                                        <ul class="dropdown-menu" data-popper-placement="top-start" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(0px, -40px, 0px);">
                                                            
                                                        <?php for ($j = 0; $j < count($telefono); $j++) { ?>
                                                            <?php $telparts = explode("|", $telefono[$j]); ?>


                                                            <li><a class="dropdown-item" href="javascript:void(0);"><?php echo "+" . $telparts[1] . " (" . $telparts[2] . ") - " . $telparts[3] ?></a></li>
                                                        <?php } ?>
                                                            
                                                        </ul>
                                                    </div>



                                                  
                                                <?php } else {
                                                    $telparts = explode("|", $telefono[0]);
                                                    echo "+" . $telparts[1] . " (" . $telparts[2] . ") - " . $telparts[3];
                                                } ?>
                                            <?php } else { ?>
                                                <p>SIN NUMERO</p>
                                            <?php } ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" onclick="abrirModal(
                                                    '<?php echo $vendedores[$i]['id_persona'] ?>',
                                                    '<?php echo $vendedores[$i]['nombre'] ?>',
                                                    '<?php echo $vendedores[$i]['primer_apellido'] ?>',
                                                    '<?php echo $vendedores[$i]['segundo_apellido'] ?>',
                                                    '<?php echo $vendedores[$i]['fk_id_tipoempleado'] ?>',
                                                    '<?php echo $vendedores[$i]['sueldo'] ?>',
                                                    '<?php echo $vendedores[$i]['cuenta_nomina'] ?>',
                                                    '<?php echo $vendedores[$i]['correos'] ?>',
                                                    '<?php echo $vendedores[$i]['telefonos'] ?>',
                                                    '<?php echo $vendedores[$i]['direcciones'] ?>'
                                                    
                                                    );"><i class="bx bx-edit-alt me-1"></i> Editar Empleado</a>

                                                    <a class="dropdown-item" href="?modulo=vendedor&accion=ventas&id=<?php echo $vendedores[$i]['id_persona'] ?>"><i
                                                            class="bx bx-money me-1"></i> Ver ventas</a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="modalVentas" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Editar vendedor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="?modulo=prospectos&accion=editarprospecto">

                            <input type="hidden" class="form-control" id="idper" name="idper" require />
                            <input type="hidden" class="form-control" id="idpros" name="idpros" require />
                            <input type="hidden" class="form-control" id="idcorr" name="idcorr" require />
                            <input type="hidden" class="form-control" id="idtel" name="idtel" require />
                            <input type="hidden" class="form-control" id="iddir" name="iddir" require />
                            <input type="hidden" class="form-control" id="idemp" name="idemp" require />




                            <div class="row d-flex mb-2">
                                <div class="col-6 col-md-3 text-center text-danger" style="text-transform: uppercase;">Información de contacto</div>
                                <hr class="mt-2 mb-3 col-6 col-md-9">
                            </div>
                            <div class="row clonarcontact">
                                <input type="hidden" class="form-control" id="id_persona" name="id_persona" require />
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="basic-icon-default-fullname">Nombre <strong
                                            class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user text-danger"></i></span>
                                        <input type="text" class="form-control p-2" id="nom" placeholder="Nombre(s)"
                                            name="nom" aria-label="Nombre(s)"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4 col-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Primer apellido
                                        <strong class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user text-danger"></i></span>
                                        <input type="text" class="form-control p-2" id="pape" placeholder="Primer apellido"
                                            name="pape" aria-label="Primer apellido"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4 col-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Segundo apellido
                                        <strong class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user text-danger"></i></span>
                                        <input type="text" class="form-control p-2" id="sape" placeholder="Segundo apellido"
                                            name="sape" aria-label="Segundo apellido"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4 col-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Tipo Empleado
                                        <strong class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user text-danger"></i></span>
                                                <select class="form-select" name="" id="temp">
                                                <option value="vendedor movil" selected>Vendedor</option>
                                                <option value="vendedor mostrador">Mostrador</option>
                                                <option value="compras">Compras</option>
                                                <option value="calidad">Calidad</option>
                                                <option value="producción">Producción</option>
                                                <option value="jefe de ventas">Jefe de Ventas</option>
                                                <option value="jefe de mercadotecnia">Jefe de Mercadotecnia</option>
                                                <option value="administrador">Administrador</option>
                                                </select>
                                        
                                        
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4 col-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Sueldo
                                        <strong class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-money text-danger"></i></span>
                                        <input type="text" class="form-control p-2" id="suel" placeholder="Segundo apellido"
                                            name="suel" aria-label="Segundo apellido"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Nomina
                                        <strong class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-credit-card text-danger"></i></span>
                                        <input type="text" class="form-control p-2" id="nomi" placeholder="Segundo apellido"
                                            name="nomi" aria-label="Segundo apellido"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label" for="basic-icon-default-fullname">SELECCIONA Correo
                                        <strong class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-envelope text-danger"></i></span>
                                        <select class="form-select" name="" id="selectemail">
                                            <option value="0" selected disabled>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3  col-md-9 col-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Correo electrónico
                                        <strong class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-envelope text-danger"></i></span>
                                        <input style="text-transform: lowercase;" type="text" class="form-control p-2"
                                            id="correo" placeholder="Correo eléctronico" name="correo"
                                            aria-label="Número de teléfono"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>



                                <div class="mb-2 col-12 col-xl-3">
                                    <label class="form-label" for="basic-icon-default-fullname">SELECCIONA Telefono
                                        <strong class="text-danger"></strong></label>
                                    <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-phone-call text-danger"></i></span>
                                        <select class="form-select" name="" id="selecttel">
                                            <option value="" selected disabled>...</option>
                                        </select>


                                    </div>
                                </div>

                                <div class="mb-2 col-6 col-xl-2">
                                    <label class="form-label" for="basic-icon-default-fullname">Código país <strong
                                            class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-phone-call text-danger"></i></span>
                                        <input type="text" class="form-control p-2" id="cod2" placeholder="Código"
                                            name="cod2" aria-label="Código"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>


                                <div class="mb-2 col-6 col-xl-3">
                                    <label class="form-label" for="basic-icon-default-fullname">LADA <strong
                                            class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-phone-call text-danger"></i></span>
                                        <input type="text" class="form-control p-2" id="lada2" placeholder="LADA"
                                            name="lada2" aria-label="LADA"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-12 col-xl-4">
                                    <label class="form-label" for="basic-icon-default-fullname">Número de teléfono
                                        <strong class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-phone-call text-danger"></i></span>
                                        <input type="text" class="form-control p-2" id="tel2"
                                            placeholder="Número de teléfono" name="tel2" aria-label="Número de teléfono"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="row d-flex mt-4">
                                <div class="col-3 text-center text-danger" style="text-transform: uppercase;">Dirección</div>
                                <hr class="mt-2 mb-3 col-9">
                            </div>
                            <div class="row mb-4">
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">SELECCIONA DIRECCIÓN <strong
                                            class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-buildings text-danger"></i></span>
                                                <select class="form-select" name="" id="selectdireccion">
                                                    <option value="" selected disabled >...</option>
                                                </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-12 col-md-9">
                                    <label class="form-label" for="basic-icon-default-fullname">Calle <strong
                                            class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-buildings text-danger"></i></span>
                                        <input type="text" class="form-control p-2" id="calle" placeholder="Calle"
                                            name="calle" aria-label="Calle"
                                            aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-6 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">N exterior<strong
                                            class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-buildings text-danger"></i></span>
                                        <input type="text" class="form-control p-2" id="num" aria-label="Numero exterior"
                                            name="num" aria-describedby="basic-icon-default-fullname2" require />
                                    </div>
                                </div>
                                <div class="mb-3 col-6 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">N interior</label>
                                    <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-buildings text-danger"></i></span>
                                        <input type="text" class="form-control p-2" id="numint" aria-label="Numero exterior"
                                            name="numint" aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label for="exampleFormControlInput" class="form-label">Entre calles <strong
                                            class="text-danger">*</strong></label>
                                            <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-buildings text-danger"></i></span>
                                    <input type="text" class="form-control p-2" id="entcalles" placeholder="Entre calles"
                                        aria-label="Numero exterior" aria-describedby="basic-icon-default-fullname2"
                                        name="entcalles" />
                                            </div>
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Código postal <strong
                                            class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-buildings text-danger"></i></span>
                                        <input type="number" class="form-control p-2" id="cp" placeholder="XXXX" name="cp"
                                            aria-label="Numero exterior"
                                            aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>
                                <div class="mb-3 col-12 col-md-5">
                                    <label class="form-label" for="basic-icon-default-fullname">Colonia <strong
                                            class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-buildings text-danger"></i></span>
                                        <input type="text" class="form-control p-2" id="col" placeholder="Colonia"
                                            name="col" aria-label="Numero exterior"
                                            aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>
                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label" for="basic-icon-default-fullname">Municipio <strong
                                            class="text-danger">*</strong></label>
                                    <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-buildings text-danger"></i></span>
                                        <input type="text" class="form-control p-2" id="mun" placeholder="XXXX" name="mun"
                                            aria-label="Numero exterior"
                                            aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label for="exampleFormControlSelect1" class="form-label">Estado <strong
                                            class="text-danger">*</strong></label>
                                            <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-buildings text-danger"></i></span>
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
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label for="exampleFormControlSelect1" class="form-label">País <strong
                                            class="text-danger">*</strong></label>
                                            <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fulladdress2" class="input-group-text"><i
                                                class="bx bx-buildings text-danger"></i></span>
                                    <input type="text" class="form-control p-2" id="pais" placeholder="País"
                                        aria-label="Numero exterior" aria-describedby="basic-icon-default-fullname2"
                                        name="pais" value="México" />
                                </div>
                                </div>
            

                            </div>
                            <div class="row d-flex mt-4">
                            <hr class="mt-2 mb-3 col-4">
                                <div class="col-4 text-center text-danger" style="text-transform: uppercase;">Opciones extra</div>
                                <hr class="mt-2 mb-3 col-4">
                            </div><br>
                            <div class="row">

                                <div class="mb-3 col-md-4">
                                    <div class="col-12 d-flex justify-content-center">
                                            <center><label class="form-label" for="basic-icon-default-fullname">Deshabilitar Empleado
                                                <strong class="text-danger">*</strong></label><center>
                                            <a href="" id="adown"  class="btn btn-danger d-flex align-items-center">
                                                <div>DESHABILITAR</div> <i
                                                    class="fa-solid fa-user-times fa-2x"></i> 
                                            </a>
                                            
                                        </div>
                                    
                                </div>
                                <div class="mb-3 col-md-4">
                                   
                                        <div class="col-12 d-flex justify-content-center" id="divedit" >
                                        
                                        </div>

                                        <div class="col-12 d-flex justify-content-center" id="divsave" >
                                        
                                        </div>
                                    
                                </div>
                                <div class="mb-3 col-md-4">
                                    <div class="col-12 d-flex justify-content-center">
                                            <center><label class="form-label" for="basic-icon-default-fullname">HISTORIAL
                                            <strong class="text-info">*</strong></label><center>

                                            <button type="button" onclick="onedit()"  style="margin: 2px;" class="btn btn-info d-flex align-items-center mt-2">
                                            <div style="margin-right: 10%;">HISTORIAL </div> <i
                                                class="fa-solid fa-list fa-2x" ></i>
                                        </button>
                                    </div>
                                    
                                </div>
                            </div>


                           
                        </form>
                    </div>

                </div>
            </div>
        </div>
    
    </div>
</div>


<script>
    function onedit(){
        Swal.fire({
                icon: 'success',
                title: 'AGREGADO',
                text: 'El empleado se han guardado correctamente',
                footer: '',
                toast:true, 
            })
        document.getElementById("divsave").innerHTML=" <center><label class='form-label' for='basic-icon-default-fullname'>GUARDAR CAMBIOS   <strong class='text-info'>*</strong></label><center><button style='margin: 2px;' type='submit'  class='btn btn-success d-flex align-items-center mt-2'><div style='margin-right: 10%;'>GUARDAR </div> <iclass='fa-solid fa-floppy-disk fa-2x' ></i></button>";
        document.getElementById("divedit").innerHTML="";
        document.getElementById("nom").disabled=false;
        document.getElementById("pape").disabled=false;
        document.getElementById("sape").disabled=false;
        document.getElementById("temp").disabled=false;
        document.getElementById("suel").disabled=false;
        document.getElementById("nomi").disabled=false;



        document.getElementById("correo").disabled=false;
        document.getElementById("selectemail").disabled=false;
        document.getElementById("cod2").disabled=false;
        document.getElementById("lada2").disabled=false;
        document.getElementById("tel2").disabled=false;
        document.getElementById("selecttel").disabled=false;
        document.getElementById("selectdireccion").disabled=false;
        document.getElementById("calle").disabled=false;
        document.getElementById("num").disabled=false;
        document.getElementById("numint").disabled=false;
        document.getElementById("entcalles").disabled=false;
        document.getElementById("cp").disabled=false;
        document.getElementById("col").disabled=false;
        document.getElementById("mun").disabled=false;
        document.getElementById("est").disabled=false;
        document.getElementById("pais").disabled=false;
    }
    function abrirModal(i,n, p, s, te, su, no, c, t, d) {
        $('#modalVentas').modal('show');
        document.getElementById("divsave").innerHTML="" ;
        document.getElementById("divedit").innerHTML="<center><label class='form-label' for='basic-icon-default-fullname'>Habilitar edicion<strong class='text-warning'>*</strong></label><center><button type='button' onclick='onedit()'  style='margin: 2px;'  id='btnedit' class='btn btn-warning d-flex align-items-center mt-2'><div style='margin-right: 10%;'>EDITAR </div> <i class='fa-solid fa-pencil fa-2x' ></i></button>";
        document.getElementById("nom").value = n;
        document.getElementById("pape").value = p;
        document.getElementById("sape").value = s;
       
        document.getElementById("suel").value = '$' + su + ".00";
        document.getElementById("nomi").value = no;
        const selecttemp = document.getElementById("temp");
        

        selecttemp.value = te;
        document.getElementById("adown").href = "?modulo=empleado&accion=downvendedor&id="+i;


        

        const selectmails = document.getElementById("selectemail");
        const inputemail = document.getElementById('correo');
        const mails = c.split(",");
        inputemail.value = '';

        if ((mails[0].split("|"))[0] == ' ') {
            selectmails.disabled = true;

        } else {
            selectmails.innerHTML = "";
            selectmails.disabled = false;


            for (let index = 0; index < mails.length; index++) {
                const o = document.createElement("option");
                o.text = (mails[index].split("|"))[0];
                o.value = (mails[index].split("|"))[1];
                selectmails.add(o);
            }
        }

        const valorSeleccionadoInicial = selectmails.value;
        valorSeleccionadoInicial == "undefined" ? (selectmails.disabled = true)
            : (inputemail.value = valorSeleccionadoInicial);

        selectmails.addEventListener("change", function () {
            const valorSeleccionado = selectmails.value;
            valorSeleccionado == "undefined" ? (selectmails.disabled = true)
                : (inputemail.value = valorSeleccionado);
        });

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        const selecttel = document.getElementById("selecttel");
        const inputtelc = document.getElementById('cod2');
        const inputtell = document.getElementById('lada2');
        const inputtelt = document.getElementById('tel2');
        const tels = t.split(",");

        inputtelc.value = '';
        inputtell.value = '';
        inputtelt.value = '';

        if ((tels[0].split("|"))[0] == ' ') {
            selecttel.disabled = true;
        } else {
            selecttel.innerHTML = "";
            selecttel.disabled = false;

            for (let index = 0; index < tels.length; index++) {
                const o = document.createElement("option");
                o.text = (tels[index].split("|"))[0];
                o.value = tels[index];
                selecttel.add(o);
            }
        }

        const valorSeleccionadoTel = selecttel.value;
        selecttel.disabled = false;

        if (typeof (valorSeleccionadoTel.split("|"))[1] === 'undefined') {
            selecttel.disabled = true;
        } else {

            document.getElementById("cod2").value = "+" + (valorSeleccionadoTel.split("|"))[1];
            document.getElementById("lada2").value = (valorSeleccionadoTel.split("|"))[2];
            document.getElementById("tel2").value = (valorSeleccionadoTel.split("|"))[3];
        }

        selecttel.addEventListener("change", function () {
            const valorSeleccionado = selecttel.value;
            if (valorSeleccionado != "") {
                document.getElementById("cod2").value = "+" + (valorSeleccionado.split("|"))[1];
                document.getElementById("lada2").value = (valorSeleccionado.split("|"))[2];
                document.getElementById("tel2").value = (valorSeleccionado.split("|"))[3];
            } else {
                document.getElementById("cod2").value = "";
                document.getElementById("lada2").value = "";
                document.getElementById("tel2").value = "";
            }
        });
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        const selectdireccion = document.getElementById("selectdireccion");
        const inputcalle = document.getElementById('calle');
        const inputnum = document.getElementById('num');
        const inputnumint = document.getElementById('numint');
        const inputcol = document.getElementById('col');
        const inputentre = document.getElementById('entcalles');
        const inputmun = document.getElementById('mun');
        const inputest = document.getElementById('est');
        const inputcp = document.getElementById('cp');
        const inputpais = document.getElementById('pais');

        const direcciones = d.split(",");

        inputcalle.value = '';
        inputnum.value = '';
        inputnumint.value = '';
        inputcol.value = '';
        inputentre.value = '';
        inputmun.value = '';
        inputest.value = '';
        inputcp.value = '';
        inputpais.value = '';

        if ((direcciones[0].split("|"))[0] == ' ') {
            selectdireccion.disabled = true;
        } else {
            selectdireccion.innerHTML = "";
            selectdireccion.disabled = false;

            for (let index = 0; index < direcciones.length; index++) {
                const o = document.createElement("option");
                const direccion = direcciones[index].split("|");
                o.text = (direccion)[1];
                o.value = direcciones[index];
                selectdireccion.add(o);
            }
        }

        const valorSeleccionadoDireccion = selectdireccion.value;
        selectdireccion.disabled = false;

        if (typeof (valorSeleccionadoDireccion.split("|"))[1] === 'undefined') {
            selectdireccion.innerHTML = "";
            selectdireccion.disabled = true;
        } else {
            const direccionSeleccionada = valorSeleccionadoDireccion.split("|");
            inputcalle.value = direccionSeleccionada[1];
            inputnum.value = direccionSeleccionada[2];
            inputcol.value = direccionSeleccionada[3];
            inputentre.value = direccionSeleccionada[4];
            inputmun.value = direccionSeleccionada[5];
            inputest.value = direccionSeleccionada[6];
            inputpais.value = direccionSeleccionada[7];
            inputcp.value = direccionSeleccionada[8];
            inputnumint.value = direccionSeleccionada[9];
        }

        selectdireccion.addEventListener("change", function () {
            const valorSeleccionado = selectdireccion.value;
            if (valorSeleccionado != '') {
                const direccionSeleccionada = valorSeleccionado.split("|");
                inputcalle.value = direccionSeleccionada[1];
                inputnum.value = direccionSeleccionada[2];
                inputcol.value = direccionSeleccionada[3];
                inputentre.value = direccionSeleccionada[4];
                inputmun.value = direccionSeleccionada[5];
                inputest.value = direccionSeleccionada[6];
                inputpais.value = direccionSeleccionada[7];
                inputcp.value = direccionSeleccionada[8];
                inputnumint.value = direccionSeleccionada[9];
            } else {
                inputcalle.value = '';
                inputnum.value = '';
                inputcol.value = '';
                inputentre.value = '';
                inputmun.value = '';
                inputest.value = '';
                inputpais.value = '';
                inputcp.value = '';
                inputnumint.value = '';
            }
        });

        //////////////////////////////////////////////////////////////////////

document.getElementById("nom").disabled=true;
document.getElementById("pape").disabled=true;
document.getElementById("sape").disabled=true;
document.getElementById("temp").disabled=true;
document.getElementById("suel").disabled=true;
document.getElementById("nomi").disabled=true;



document.getElementById("correo").disabled=true;
document.getElementById("cod2").disabled=true;
document.getElementById("lada2").disabled=true;
document.getElementById("tel2").disabled=true;
document.getElementById("calle").disabled=true;
document.getElementById("num").disabled=true;
document.getElementById("numint").disabled=true;
document.getElementById("entcalles").disabled=true;
document.getElementById("cp").disabled=true;
document.getElementById("col").disabled=true;
document.getElementById("mun").disabled=true;
document.getElementById("est").disabled=true;
document.getElementById("pais").disabled=true;




    }
</script>