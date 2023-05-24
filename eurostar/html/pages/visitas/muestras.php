<div class="col-12 text-center titlebanner-visit">
    <h1 class="display-3 txt-title" style="margin: 0;"> Muestras solicitadas</h1>
</div>
<div class="content-wrapper">

    <!-- Content -->
    <div class="col-12" style="margin-top: 15px;">
        <h4 class="display-4 text-center" style=""> Registro de muestras</h4>
    </div>
    <div class="col-12">
        <div id="calendar"></div>
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
                    <div class="col mb-0 col-4">
                        <label for="emailExLarge" class="form-label"><i class="fa-solid fa-phone text-primary"
                                style="margin-right: 4px;"></i>Numero de teléfono de contacto</label>
                        <input type="text" id="numtelcont" name="numtel" class="form-control" placeholder="" readonly />
                    </div>
                    <div class="col mb-0 col-4">
                        <label for="emailExLarge" class="form-label"><i class="fa-solid fa-at text-primary"
                                style="margin-right: 4px;"></i>Correo Electrónico</label>
                        <input type="text" id="emailcont" name="emailcont" class="form-control" placeholder=""
                            readonly />
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col mb-3 col-4">
                        <label for="nameExLarge" class="form-label"><i class="fa-regular fa-user text-primary"
                                style="margin-right: 4px;"></i>Vendedor</label>
                        <input type="text" id="nameExLarge" class="form-control" placeholder="Enter Name" readonly />
                    </div>
                    <div class="col mb-0 col-4">
                        <label for="emailExLarge" class="form-label"><i class="fa-solid fa-phone text-primary"
                                style="margin-right: 4px;"></i>Teléfono</label>
                        <input type="text" id="emailExLarge" class="form-control" placeholder="" readonly />
                    </div>
                    <div class="col mb-0 col-4">
                        <label for="emailExLarge" class="form-label"><i class="fa-solid fa-at text-primary"
                                style="margin-right: 4px;"></i>Correo Electrónico</label>
                        <input type="text" id="emailExLarge" class="form-control" placeholder="" readonly />
                    </div>
                </div>
                <hr>
                <!--
                <div class="row g-2">
                    <div class="col mb-0 col-sm-4">
                        <label for="dobExLarge" class="form-label">Calle</label>
                        <input type="text" id="dobExLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>
                    <div class="col mb-0 col-sm-2 col-6">
                        <label for="dobExLarge" class="form-label">Número</label>
                        <input type="text" id="dobExLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>
                    <div class="col mb-0 col-sm-2 col-6">
                        <label for="dobExLarge" class="form-label">Número interior</label>
                        <input type="text" id="dobExLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>
                    <div class="col mb-0 col-sm-4">
                        <label for="dobExLarge" class="form-label">Colonia</label>
                        <input type="text" id="dobExLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>
                    <div class="col mb-0 col-sm-2">
                        <label for="dobExLarge" class="form-label">Código Postal</label>
                        <input type="text" id="dobExLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>
                    <div class="col mb-0 col-sm-4">
                        <label for="dobExLarge" class="form-label">Municipio</label>
                        <input type="text" id="dobExLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>
                    <div class="col mb-0 col-sm-4">
                        <label for="dobExLarge" class="form-label">Estado</label>
                        <input type="text" id="dobExLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>
                    <div class="col mb-0 col-sm-2">
                        <label for="dobExLarge" class="form-label">País</label>
                        <input type="text" id="dobExLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>
                </div>
                -->
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
        promociones, prod, obs, generaventa) {
        $('#masDetalle').modal('show');
        document.getElementById('fechavisita').value = fechavisit;
        document.getElementById('horavisita').value = horavisit;
        document.getElementById('novisita').value = numvisit;
        document.getElementById('empresaname').value = nomemp;
        document.getElementById('promociones').value = promociones;
        document.getElementById('nombrecont').value = nombre + ' ' + pap + ' ' + sap;
        document.getElementById('numtelcont').value = '+' + codpais + ' ' + lada + numtel;
        document.getElementById('emailcont').value = correo;
        document.getElementById('observaciones').value = obs;
    }
        // language
        $('#calendar').evoCalendar({
        theme: 'Orange Coral',
        'language': 'es'
        // Supported language: en, es, de..
    });

    $("#calendar").evoCalendar('addCalendarEvent', [
        <?php for ($i=0; $i < count($muestras) ; $i++) { 
            
        ?>
        {
            id: "<?php echo $muestras[$i]['id_muestras'] ?>",
            name: "<?php echo $muestras[$i]['nombre_muestra'] ?>",
            description: "Entregar a "+'<?php echo $muestras[$i]['nombre']?>'+" ,"+'<?php echo $muestras[$i]['nombre_muestra']?>'+" con las siguientes especificaciones: "+'<?php echo $muestras[$i]['descripcion_muestra']?>',
            date: "<?php echo date("Y-m-d",strtotime($muestras[$i]['fecha_compromiso'].'+ 1 days')); ?>",
            type: "event"
        },
        <?php }?>
    ]);

    
</script>