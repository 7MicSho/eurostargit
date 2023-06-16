<div class="content">
    <!-- Content -->
    <div class="col-12 text-center text-muted titlebanner-productos">
        <h1 class="display-2 txt-title" style="margin: 0 auto;">Agregar productos</h1>
    </div>
</div>

<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Detalles del nuevo producto</h5>
            <small class="text-muted float-end">+</small>
        </div>
        <div class="card-body">
            <form method="POST" action="?modulo=producto&accion=productoadd" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Código de producto</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-brush text-primary"></i></span>
                            <input type="text" class="form-control" id="codigo" name="codigo"
                                placeholder="Código de producto" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" required>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Nombre</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-brush text-primary"></i></span>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del producto"
                                aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" required>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Descripción</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-brush text-primary"></i></span>
                            <input type="text" id="descripcion" name="descripcion" class="form-control"
                                placeholder="Descripción" aria-label="ACME Inc."
                                aria-describedby="basic-icon-default-company2" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label" for="basic-icon-default-company">Contenido</label>
                            <div class="col-sm-8">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"><i
                                            class="bx bx-brush text-primary"></i></span>
                                    <input type="text" id="contenido" name="contenido" class="form-control"
                                        placeholder="Contenido." aria-label="ACME Inc."
                                        aria-describedby="basic-icon-default-company2" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label" for="basic-icon-default-company">Unidad</label>
                            <div class="col-sm-8">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"><i
                                            class="bx bx-brush text-primary"></i></span>
                                    <input type="text" id="unidad" name="unidad" class="form-control"
                                        placeholder="Unidad." aria-label="ACME Inc."
                                        aria-describedby="basic-icon-default-company2" required>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label" for="basic-icon-default-company">Precio</label>
                            <div class="col-sm-8">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"><i
                                            class="bx bx-brush text-primary"></i></span>
                                    <input type="number" id="precio" name="precio" class="form-control"
                                        placeholder="$ Precio" aria-label="ACME Inc."
                                        aria-describedby="basic-icon-default-company2" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label" for="basic-icon-default-company">Tipo de
                                producto</label>
                            <div class="col-sm-8">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"><i
                                            class="bx bx-brush text-primary"></i></span>
                                    <select class="form-select" id="tipo_producto" name="tipo_producto"
                                        aria-label="Default select example">
                                        <?php for ($i = 0; $i < count($tipoproductos); $i++) {  ?>
                                        <option value="<?php echo $tipoproductos[$i]["id_tipo_producto"] ?>"><?php echo $tipoproductos[$i]["descripcion_tipo_pro"] ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Tipo de
                        compuesto</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-brush text-primary"></i></span>
                            <select class="form-select" id="tipo_compuesto" name="tipo_compuesto"
                                aria-label="Default select example">
                                <?php for ($i = 0; $i < count($tipocompuesto); $i++) {  ?>
                                        <option value="<?php echo $tipocompuesto[$i]["id_compuesto"] ?>"><?php echo $tipocompuesto[$i]["nombre"] ?></option>
                                      <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label" for="basic-icon-default-company">Stock Minimo</label>
                            <div class="col-sm-8">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"><i
                                            class="bx bx-brush text-primary"></i></span>
                                    <input type="text" id="min" name="min" class="form-control" placeholder="Minimo"
                                        aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label" for="basic-icon-default-company">Stock Máximo</label>
                            <div class="col-sm-8">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"><i
                                            class="bx bx-brush text-primary"></i></span>
                                    <input type="text" id="max" name="max" class="form-control" placeholder="Maximo"
                                        aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" required>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="input-group">
                        <label for="exampleFormControlSelect1" class="form-label">Selecciona una imagen<strong
                                class="text-danger"> *</strong></label>
                        <div class="input-group">
                            <input type="file" class="form-control" name="inputfile" id="inputGroupFile04"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload" >
                            <span id="basic-icon-emailcomp" class="input-group-text"><i
                                    class="fa-solid fa-upload"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
  
$res = $_GET["res"];

switch($res) {

    case "true":
     ?>
        <script>
            Swal.fire({
                        icon: 'success',
                        title: 'Guardado',
                        text: 'Registro guardado con exito !'
                    })
        </script>
    <?php 
    break;
    
    case "false":
    ?>
        <script>
    
            Swal.fire({
                        icon: 'warning',
                        title: 'No guardado',
                        text: 'Revisa que la informacion ingresada sea correcta !'
                    })
    
        </script>
    <?php 
    break;

    }

?>

