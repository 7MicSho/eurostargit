<div class="col-12 text-center titlebanner-cliente">
    <h1 class="display-3 txt-title" style="margin: 0;"> Cotización</h1>
</div>
<?php 
//print_r($productos);
//$myArrayJSON = json_encode($productos);
?>
<?php
$separated_array = array();
foreach ($productos as $item) {
    $separated_array[$item["nombre"]][] = $item;
}
$myArrayJSON = json_encode($separated_array);
?>
<div class="col-12" style="margin: 0;">

    <div class="col-12" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">

                            <div class="row">

                                <h5 class="mb-3"><a href="?modulo=producto&accion=galeria" class="text-body"><i
                                            class="fas fa-long-arrow-alt-left me-2"></i>Regresar a Productos</a>
                                </h5>
                                <hr>
                                <div class="col-lg-12">




                                    <div class="card mb-3">

                                        <div class="card-body">
                                            <div class="row"  style="text-align: center;">
                                                <div class="col-md-2 col-12">

                                                </div>
                                                <div class="col-md-3 col-12">
                                                    <p>PRODUCTO</p>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <p>CANTIDAD</p>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <p>ENVASE</p>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <p>PRECIO C/U</p>
                                                </div>
                                                <div class="col-md-1 col-12">

                                                </div>
                                                <hr>
                                            </div>




                                            <div class="row product" style="text-align: center;">
                                            <?php
                                            for ($i = 0; $i < count($separated_array); $i++) {
                                                $nombre = array_keys($separated_array)[$i];
                                                $contenido = $separated_array[$nombre];

                                                ?>
                                                <div class="col-md-2 col-12">
                                                    <div class="fotocart product-image mb-3">
                                                        <img src="<?php echo ASSETS ?>/img/elements/p-verde.jpg"
                                                            class="img-fluid rounded-3" alt="Shopping item"
                                                            style="width: 65px;">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-12 product-details mt-2">
                                                    <div class="product-title">

                                                        <h5>
                                                            <?php echo $nombre ?>
                                                        </h5>
                                                    </div>

                                                </div>


                                                <div class="col-md-2 col-12 product-quantity mt-2">
                                                    <input class="form-input" style="width: 90%;" type="number"
                                                        name="product-quantity" id="product-quantity<?php echo $i ?>" value="1" onchange="cambio(this,'<?php echo $i ?>')" />
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <select name="" id="preciochange" class="form-select" onchange="preciochange(this,count($separated_array))" >
                                                        <?php for ($j = 0; $j < count($productos); $j++) {

                                                            if ($contenido[$j]['contenido'] == 'LITRO') {
                                                                echo "<option value='" . $contenido[$j]['precio'] . "'>Litro 1 L</option>";
                                                            } else if ($contenido[$j]['contenido'] == 'GALON') {
                                                                echo "<option value='" . $contenido[$j]['precio'] . "'>Galón 3.787 L</option>";
                                                            } else if ($contenido[$j]['contenido'] == 'CUBETA') {
                                                                echo "<option value='" . $contenido[$j]['precio'] . "'>Cubeta 20 lt</option>";
                                                            } else if ($contenido[$j]['contenido'] == 'TAMBO') {
                                                                echo "<option value='" . $contenido[$j]['precio'] . "'>Tambo 200 lt</option>";
                                                            }
                                                            ?>

                                                        <?php } ?>



                                                    </select>
                                                   
                                                </div>
                                                <div class="col-md-2 col-12 mt-2 ml-6">
                                                <h5 class="mb-0 product-price" id="product-price<?php echo $i ?>">
                                                <?php echo $contenido[$i]['precio'] ?>
                                                    </h5>
                                               
                                                </div>
                                                <div class="col-md-1 col-12 product-removal">
                                                    <a class="btn remove-product" href="?modulo=visitas&accion=carrito&d=roma" style="color: #cecece;">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                                <hr>
                                                
                                                
                                                <?php

}
?>

</div>







                                        </div>
                                    </div>
                                </div>

                                <div class="col-12"></div>
                                <div class="col-lg-6">

                                    <div class="card bg-info text-white rounded-3">
                                        <div class="card-body row">
                                            <div class="col-12">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <h6 class="mb-0" style="color: white;">INFORMACIÓN DEL
                                                        CLIENTE

                                                    </h6>

                                                </div>
                                                <hr>
                                            </div>
                                            <div class="col-5">

                                                <div class="d-flex justify-content-between align-items-center p-4" style="width: 180px"s>

                                                    <img src="<?php echo $prospecto[0]['ruta_foto']; ?>"
                                                        class="img-fluid rounded-3"  alt="Avatar">
                                                </div>
                                            </div>

                                            <div class="col-7 ">
                                                <div class="info-container">
                                                    <ul class="list-unstyled">
                                                        <br>
                                                        <li class="mb-2">
                                                            <span class="fw-bold me-2">Nombre:</span>
                                                            <span>
                                                                <?php echo $prospecto[0]['nombre'] . ' ' . $prospecto[0]['primer_apellido'] . ' ' . $prospecto[0]['segundo_apellido']; ?>
                                                            </span>
                                                        </li>
                                                        <?php if (isset($prospecto[0]['nombre_emp'])) { ?>
                                                            <li class="mb-2">
                                                                <span class="fw-bold me-2">Empresa:</span>
                                                                <span>
                                                                    <?php echo $prospecto[0]['nombre_emp']; ?>
                                                                </span>
                                                            </li>
                                                        <?php } ?>
                                                        <li class="mb-2">
                                                            <span class="fw-bold me-2">Email:</span>
                                                            <span>
                                                                <?php echo $prospecto[0]['correo']; ?>
                                                            </span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="fw-bold me-2">Teléfono:</span>
                                                            <span>
                                                                <?php echo '+' . $prospecto[0]['codigo_pais'] . ' ' . $prospecto[0]['lada'] . ' ' . $prospecto[0]['numero_telefono']; ?>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="ratings">
                                    <i class="bx bxs-star bx-sm text-warning"></i>
                                    <i class="bx bxs-star bx-sm text-warning"></i>
                                    <i class="bx bxs-star bx-sm text-warning"></i>
                                    <i class="bx bxs-star bx-sm text-warning"></i>
                                    <i class="bx bxs-star bx-sm text-warning"></i>
                                </div>
                            </div>



                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="card bg-primary text-white rounded-3">
                                        <div class="card-body">




                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0" style="color: white;">INFORMACIÖN DEL
                                                    CLIENTE

                                                </h6>

                                            </div>
                                            <hr>

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Cantidad</p>
                                                <p class="mb-2" id="cantidad">0 pz</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Subtotal</p>
                                                <p class="mb-2" id="subtotaltxt">$0.00</p>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">IVA (16%)</p>
                                                <p class="mb-2" id="ivatxt">$0.00</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Descuento(%)</p>
                                                <p class="mb-2" id="porcentaje">10</p>
                                            </div>

                                            <div class="d-flex justify-content-between mb-1">
                                                <p class="mb-2">Total</p>
                                                <p class="mb-2" id="totaltxt">$0.00</p>
                                            </div>
                                            <hr>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn btn-success btn-block btn-md">
                                                    <div class="d-flex justify-content-between">
                                                        <span>Enviar cotización<i
                                                                class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                                    </div>
                                                </button>
                                            </div>


                                        </div>
                                    </div>
                                </div>





                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var myArray = <?php echo json_encode($myArrayJSON); ?>;
    //alert(myArray);
    for (let index = 0; index < myArrayJSON.length; index++) {
        const miInput = document.getElementById("product-quantity"+i);
        cambio(miInput,1);
        
    }
    


        function preciochange(n,i){
            for (let index = 0; index < i; index++) {
                const miParrafo = document.getElementById("product-price"+i);
                miParrafo.textContent = n.value;
                cambio(miInput);
                
            }

            
        }

        function cambio(n,m){
        const valor = n.value;
        const miParrafo = document.getElementById("product-price"+m);
        const numero = parseInt(miParrafo.textContent);

        const subtotaltxt = document.getElementById("subtotaltxt");
        subtotaltxt.textContent = "$ " + (valor * numero);

        const cantidadtxt = document.getElementById("cantidad");
        cantidadtxt.textContent = valor + " pz";
        const ivatxt = document.getElementById("ivatxt");
        ivatxt.textContent = '$ '+((valor * numero) * 0.16).toFixed(2);

        const porcentaje = document.getElementById("porcentaje");
        $porcentaje = parseInt(porcentaje.textContent);

        const totaltxt = document.getElementById("totaltxt");
        
        totaltxt.textContent = "$ " + (((valor * numero) + ((valor * numero) * 0.16)) * (1-($porcentaje/100))).toFixed(2) ;
        
        
    };

    function eliminar(n){
        var myArray = {
        n: [1, 2, 3]
        };
    }
</script>