<div class="col-12 text-center titlebanner-prospect">
    <h1 class="display-3 txt-title" style="margin: 0;"> Nueva visita</h1>
</div>
<form method="post" action="?modulo=visitas&accion=createVisit">
    <div class="content-wraper" style="padding: 3%;">
        <div class="col-xl">
            <div class="row invoice-add">

                <!-- Invoice Add-->
                <div class="col-lg-9 col-12 mb-lg-0 mb-4">
                    <div class="card invoice-preview-card">
                        <div class="card-body">
                            <div class="row p-sm-3 p-0">
                                <div class="col-md-6 mb-md-0 mb-4">
                                    <div class="d-flex svg-illustration mb-4 gap-2">
                                        <span class="app-brand-logo demo">
                                            <i class="fa fa-building-user fa-3x text-primary"></i>
                                        </span>
                                        <span class="app-brand-text demo text-body fw-bolder"
                                            style="text-transform: uppercase">
                                            <?php if ($prospecto[0]['nombre_emp'] == 'N/A') {
                                                echo ($prospecto[0]['nombre'] . ' ' . $prospecto[0]['primer_apellido']);
                                            } else {
                                                echo $prospecto[0]['nombre_emp'];
                                            } ?>
                                        </span>
                                    </div>
                                    <p class="mb-1">
                                        <?php echo '<i class="fa-regular fa-building text-primary"></i>' . ' ' . $prospecto[0]['calle'] . ' ' . $prospecto[0]['numero'] . ' ' . $prospecto[0]['numero_int'] . ', ' . $prospecto[0]['colonia'] ?>
                                    </p>
                                    <p class="mb-1">
                                        <?php echo $prospecto[0]['municipio'] . ', ' . $prospecto[0]['estado'] . ', ' . $prospecto[0]['codigo_postal'] . ', ' . $prospecto[0]['pais'] ?>
                                    </p>
                                    <hr>
                                    <?php $telefonos = '';
                                    for ($i = 0; $i < count($telEmp); $i++) {
                                        $telefonos = $telefonos . '<i class="fa-solid fa-phone text-primary"></i>' . ' +' . $telEmp[$i]['codigo_pais'] . ' (' . $telEmp[$i]['lada'] . ') ' . $telEmp[$i]['numero_telefono'];
                                        if ($i < count($telEmp) - 1) {
                                            $telefonos = $telefonos . ',  ';
                                        }
                                        if ($i % 2 != 0) {
                                            $telefonos = $telefonos . "<br>";
                                        }
                                    }
                                    ?>
                                    <p class="mb-0">
                                        <?php echo $telefonos ?>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <dl class="row mb-2">
                                        <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                                            <span class="h4 text-capitalize mb-0 text-nowrap">No. Visita</span>
                                        </dt>
                                        <dd class="col-sm-6 d-flex justify-content-md-end">
                                            <div class="w-px-150">
                                                <input type="text" class="form-control"
                                                    value="<?php echo count($visitPros) + 1 ?>" id="noVisita"
                                                    name="noVisita" readonly>
                                            </div>
                                        </dd>
                                        <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                                            <span class="fw-normal">Fecha:</span>
                                        </dt>
                                        <dd class="col-sm-6 d-flex justify-content-md-end">
                                            <div class="w-px-150">
                                                <input type="date" class="form-control date-picker flatpickr-input"
                                                    id="fecha" placeholder="YYYY-MM-DD" name="fecha"
                                                    min="<?php echo date('Y-m-d') ?>">
                                            </div>
                                        </dd>
                                        <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                                            <span class="fw-normal">Hora:</span>
                                        </dt>
                                        <dd class="col-sm-6 d-flex justify-content-md-end">
                                            <div class="w-px-150">
                                                <input type="time" class="form-control date-picker flatpickr-input"
                                                    id="hora" placeholder="YYYY-MM-DD" name="hora">
                                            </div>
                                        </dd>
                                        <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                                            <span class="fw-normal">Guardar ubicación:</span>
                                        </dt>
                                        <dd class="col-sm-6 d-flex justify-content-md-end">
                                            <div class="w-px-180">
                                                <button class="btn btn-primary d-grid w-100 mb-3"
                                                    data-bs-toggle="offcanvas" type="button">
                                                    <span
                                                        class="d-flex align-items-center justify-content-center text-nowrap"><i
                                                            class="fa-solid fa-location-crosshairs fa-2x"
                                                            style="margin-right: 5px;"></i>Guardar</span>
                                                </button>
                                            </div>
                                        </dd>


                                    </dl>
                                </div>
                            </div>

                            <hr class="my-4 mx-n4">

                            <div class="row p-sm-3 p-0">
                                <div class="col-md-4 col-sm-5 col-12 mb-sm-0 mb-4">
                                    <h6 class="pb-2">Persona de contacto:</h6>
                                    <p class="mb-1">
                                        <?php echo $prospecto[0]['nombre'] . ' ' . $prospecto[0]['primer_apellido'] . ' ' . $prospecto[0]['segundo_apellido'] ?>
                                    </p>
                                    <p class="mb-1">
                                        <?php if (isset($prospecto[0]['puesto'])) {
                                            echo $prospecto[0]['puesto'];
                                        } ?>
                                    </p>
                                    <p class="mb-1">
                                        <?php echo $prospecto[0]['calle'] . ' ' . $prospecto[0]['numero'] . ' ' . $prospecto[0]['numero_int'] . ', ' . $prospecto[0]['colonia'] ?>
                                    </p>
                                    <p class="mb-1">
                                        <?php echo '+ ' . $prospecto[0]['codigo_pais'] . ' (' . $prospecto[0]['lada'] . ') ' . $prospecto[0]['numero_telefono'] ?>
                                    </p>
                                    <p class="mb-0">
                                        <?php echo $prospecto[0]['correo'] ?>
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-7">
                                    <h6 class="pb-2">Promociones:</h6>
                                    <div class="col-md">
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox"
                                                value="Asesoria personalizada" id="defaultCheck1" name="promo">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Asesoria personalizada
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="Tiempos de entrega garantizados" id="defaultCheck2" name="promo">
                                            <label class="form-check-label" for="defaultCheck2">
                                                Tiempos de entrega garantizados
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="Garantía de productos por dos años" id="defaultCheck3"
                                                name="promo">
                                            <label class="form-check-label" for="defaultCheck3">
                                                Garantía de productos por dos años
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Descuento"
                                                id="disabledCheck1" name="promo">
                                            <label class="form-check-label" for="disabledCheck1">
                                                Descuento
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Crédito"
                                                id="disabledCheck2" name="promo">
                                            <label class="form-check-label" for="disabledCheck2">
                                                Crédito
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Entrega Express"
                                                id="disabledCheck3" name="promo">
                                            <label class="form-check-label" for="disabledCheck3">
                                                Entrega Express
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-7">
                                    <h6 class="pb-2">Productos de interés:</h6>
                                    <?php for ($i = 0; $i < count($productos); $i++) { ?>
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox"
                                                value="<?php echo $productos[$i]['descripcion_tipo_pro']; ?>" id="prod<?php echo $productos[$i]['descripcion_tipo_pro']; ?>"
                                                name="producto">
                                            <label class="form-check-label" for="prod<?php echo $i ?>">
                                                <?php echo $productos[$i]['descripcion_tipo_pro']; ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox"
                                            value="DESARROLLO" id="checkdesarrollo" onclick="enable(this);"
                                            name="producto">
                                        <label class="form-check-label" for="checkdesarrollo">
                                            DESARROLLO
                                        </label>
                                    </div>
                                    <div class="mt-2">
                                        <label class="text-muted">
                                            Especifique desarrollo
                                        </label>
                                        <textarea class="form-control" type="text" rows="5" name="producto" id="txtarea" readonly></textarea>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">
                            <div class="row ">
                                <div class="col-sm-4 d-flex justify-content-center align-items-center">
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="muestra" name="muestra"
                                            value="" onclick="cambiarvalue(this);">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Requiere
                                            muestra</label>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-4 d-flex justify-content-center align-items-center">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="html5-date-input" class="col-form-label">Fecha
                                                compromiso</label>
                                        </div>
                                        <div class="col-12">
                                            <input class="form-control" type="date" id="fechaComp" name="fechaComp"
                                                min="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-4 d-flex justify-content-center align-items-center">
                                    <div class="row">
                                        <label for="html5-date-input" class="col-form-label">Nombre de muestra</label>


                                        <input class="form-control" type="text" id="muestraName" name="muestraName">
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-12 d-flex justify-content-center align-items-center">

                                    <div class="col-md-12">
                                        <label class="text-muted">
                                            Especificaciones de muestra
                                        </label>
                                        <textarea class="form-control" type="text" rows="5" name="especificacion"
                                            id="especificacion" style="resize: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="note" class="form-label fw-semibold">Notas sobre la visita:</label>
                                        <textarea class="form-control" rows="2" id="especificaciones"
                                            style="resize: none;" name="especificaciones"
                                            placeholder="Consideraciones para la visita"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Invoice Add-->

                <!-- Invoice Actions -->
                <div class="col-lg-3 col-12 invoice-actions">
                    <div class="card mb-4">
                        <div class="card-body">
                            <input type="hidden" id="id_prospecto" name="id_prospecto" value="<?php if (isset($prospecto[0]['id_prospecto'])) {
                                echo $prospecto[0]['id_prospecto'];
                            } elseif (isset($prospecto[0]['id_cliente'])) {
                                echo $prospecto[0]['id_cliente'];
                            }
                            ?>">
                            <input type="hidden" id="id_vendedor" name="id_vendedor" value="<?php echo $prospecto[0]['fk_id_vendedor'];
                            ?>">
                            

                            <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas" type="button"
                                onclick="guardarVisita();">
                                <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                        class="fa-regular fa-floppy-disk me-2"></i>Guardar visita</span>
                            </button>
                            <a href="./app-invoice-preview.html"
                                class="btn btn-label-secondary d-grid w-100">Cancelar</a>
                        </div>
                    </div>
                </div>
                <!-- /Invoice Actions -->



            </div>
        </div>
    </div>
</form>

<script type="text/javascript">

    let checkdes=document.getElementById('checkdesarrollo');
    let txtarea= document.getElementById('txtarea');

    function enable(obj){
        if(obj.checked){
            txtarea.removeAttribute( 'readonly');
            
        }else if(!obj.checked){
            txtarea.setAttribute( 'readonly', true );
        }
    }

    function guardarVisita() {
        var arrayPromo = [];
        var arrayProd = [];

        $("input[name='promo']:checked").each(function () {
            arrayPromo.push($(this).attr("value"));
        });
        $("input[name='producto']:checked").each(function () {
            arrayProd.push($(this).attr("value"));

        });
        if(txtarea!=''){
            arrayProd.push(txtarea.value);
        }

        console.log(arrayPromo);
        //company info
        let fecha = document.getElementById('fecha').value;
        let hora = document.getElementById('hora').value;
        let noVisita = document.getElementById('noVisita').value;
        let especificaciones = document.getElementById('especificaciones').value;
        let id_prospecto = document.getElementById('id_prospecto').value;
        let id_vendedor = document.getElementById('id_vendedor').value;

        //muestra info
        let muestra = document.getElementById('muestra').value;
        let nombremuest = document.getElementById('muestraName').value;
        let fechacom = document.getElementById('fechaComp').value;
        let descripcion = document.getElementById('especificacion').value;
        //convert array to string



        if (fecha == '' || hora == '' || noVisita == '' || especificaciones == '' || id_prospecto == '') {

            var faltante = '';
            if (fecha == '') {
                faltante = faltante + '- fecha ';
            }
            if (hora == '') {
                faltante = faltante + '- hora ';
            }
            if (especificaciones == '') {
                faltante = faltante + '- especificaciones ';
            }


            Swal.fire({
                icon: 'error',
                title: 'Faltan datos',
                text: 'Falta de ingresar los siguientes datos: ' + faltante,
                footer: ''
            })

        } else {
            let url = 'http://192.168.21.63/eurostar/?modulo=visitas&accion=createVisit&fecha=' + fecha + '&hora=' + hora + '&noVisita=' + noVisita +'&id_vendedor='+id_vendedor+
                '&promo=' + arrayPromo + '&producto=' + arrayProd + '&especificaciones=' + especificaciones + '&id_prospecto=' + id_prospecto + '&muestra=' + muestra + '&muestraName=' + nombremuest + '&fechaComp=' + fechacom + '&especificacion=' + descripcion;
            const formData = new FormData();
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
                element = element + ", " + array[i].value;
            }
        }
        return element;
    }

    function pausa() {
        location.reload()
        //console.log('espera');
    }

    function cambiarvalue(obj){
        if(obj.checked==true){
            obj.value="true";
        }else{
            obj.value="false";
        }
    }
</script>