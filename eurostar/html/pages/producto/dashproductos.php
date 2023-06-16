<div class="content-wrapper">
    <!-- Content -->
    <div class="col-12 text-center text-muted titlebanner-productos">
        <h1 class="display-2 txt-title" style="margin: 0 auto;">Gestionar productos</h1>
    </div>

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-11 col-md-12" style="margin: 0 auto ">
                <a href="?modulo=producto&accion=agregarproducto">
                    <div class="d-flex align-items-center row">
                        <div class="col-sm-12 bg-success text-center"
                            style="color: white; border-radius: 10px 10px 10px 10px;">
                            <i class="bx bx-brush fa-2x mt-4"></i>
                            <p class="mt-1 pb-1">
                                Nuevo Producto
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card container">
            <h5 class="card-header text-center">Lista de productos</h5>
            <div class="table-responsive text-nowrap">
                <table class="table dataTable table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Contenido</th>
                            <th>Precio</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php   for ($i = 0; $i < count($data); $i++) {  ?>
                        <tr>
                            <td><?php  echo $data[$i]["codigo"] ?></td>
                            <td><i
                                    class="bx bx-brush fa-lg text-danger me-1"></i><strong><?php  echo $data[$i]["nombre"] ?></strong>
                            </td>
                            <td><?php  echo $data[$i]["descripcion"] ?></td>
                            <td><?php  echo $data[$i]["contenido"] ?></td>
                            <td><?php  echo $data[$i]["precio"] ?></td>
                            <td><span
                                    class="badge bg-label-<?php  echo $estatus =  ($data[$i]["estatus"] == "1") ? "primary" : "danger" ?> me-1"><?php  echo $estatus =  ($data[$i]["estatus"] == "1") ? "Activo" : "Descontinuado" ?></span>
                            </td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item"
                                            onclick="verproducto( '<?php echo $data[$i]['id_producto'] ?>',
                                                                    '<?php echo $data[$i]['codigo'] ?>',
                                                                    '<?php echo $data[$i]['nombre'] ?>',
                                                                    '<?php echo $data[$i]['contenido'] ?>',
                                                                    '<?php echo $data[$i]['unidad'] ?>',
                                                                    '<?php echo $data[$i]['descripcion'] ?>',
                                                                    '<?php echo $data[$i]['precio'] ?>',
                                                                    '<?php echo $data[$i]['fecha_alta'] ?>',
                                                                    '<?php echo $data[$i]['estatus'] ?>',
                                                                    '<?php echo $data[$i]['fk_id_compuesto'] ?>',
                                                                    '<?php echo $data[$i]['fk_id_tipo_producto'] ?>',
                                                                    '<?php echo $data[$i]['min'] ?>',
                                                                    '<?php echo $data[$i]['max'] ?>')"><i class="bx bx-bullseye me-1 text-success"></i>Ver más</button>
                                        <button class="dropdown-item" id="borrarproducto" onclick="eliminarproducto(
                                    '<?php echo $data[$i]['id_producto'] ?>')"><i
                                                class="bx bx-trash me-1 text-danger"></i>
                                            Borrar</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php  }   ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- /* Modal ver mas y editar */ -->

<div class="modal fade" id="getinfoproductoModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Información del producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="?modulo=producto&accion=editarproducto" method="POST">
                <div class="modal-body">
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailExLarge" class="form-label">Id Producto</label>
                            <input type="text" id="id_producto" name="id_producto" class="form-control"
                                placeholder="xxxx@xxx.xx" readonly>
                        </div>
                        <div class="col mb-0">
                            <label for="dobExLarge" class="form-label">Codigo</label>
                            <input type="text" id="codigo" name="codigo" class="form-control" placeholder="DD / MM / YY"
                                readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameExLarge" class="form-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailExLarge" class="form-label">Contenido</label>
                            <input type="text" id="contenido" name="contenido" class="form-control"
                                placeholder="xxxx@xxx.xx">
                        </div>
                        <div class="col mb-0">
                            <label for="dobExLarge" class="form-label">Unidad</label>
                            <input type="text" id="unidad" name="unidad" class="form-control"
                                placeholder="DD / MM / YY">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameExLarge" class="form-label">Descripción</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control"
                                placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailExLarge" class="form-label">Precio</label>
                            <input type="number" id="precio" name="precio" class="form-control"
                                placeholder="xxxx@xxx.xx">
                        </div>
                        <div class="col mb-0">
                            <label for="dobExLarge" class="form-label">Fecha alta</label>
                            <input type="text" id="fecha_alta" name="fecha_alta" class="form-control"
                                placeholder="DD / MM / YY" readonly>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailExLarge" class="form-label">Compuesto</label>
                            <select class="form-select" id="id_compuesto" name="id_compuesto"
                                aria-label="Default select example">
                                <?php for ($i = 0; $i < count($tipocompuesto); $i++) {  ?>
                                <option value="<?php echo $tipocompuesto[$i]["id_compuesto"] ?>">
                                    <?php echo $tipocompuesto[$i]["nombre"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="dobExLarge" class="form-label">Tipo Producto</label>
                            <select class="form-select" id="id_tipo_producto" name="id_tipo_producto"
                                aria-label="Default select example">
                                <?php for ($i = 0; $i < count($tipoproductos); $i++) {  ?>
                                <option value="<?php echo $tipoproductos[$i]["id_tipo_producto"] ?>">
                                    <?php echo $tipoproductos[$i]["descripcion_tipo_pro"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailExLarge" class="form-label">Estatus</label>
                            <select class="form-select" id="estatus" name="estatus"
                                aria-label="Default select example">
                                <option value="1">ACTIVO</option>
                                <option value="0">DESCONTINUADO</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailExLarge" class="form-label">Minimo</label>
                            <input type="number" id="min" name="min" class="form-control"
                                placeholder="Tipo de producto">
                        </div>
                        <div class="col mb-0">
                            <label for="dobExLarge" class="form-label">Maximo</label>
                            <input type="number" id="max" name="max" class="form-control"
                                placeholder="Tipo de producto">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" onclick="habilitarcampos()">
                        Editar
                    </button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- /* Modal borrar producto */ -->

<div class="modal fade" id="borrarModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">¿ Esta seguro de borrar el producto ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="?modulo=producto&accion=eliminarproducto" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="_id_producto" name="_id_producto" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        No
                    </button>
                    <button type="submit" class="btn btn-primary">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php 
  
$res = $_GET["res"];

switch($res) {

    case "editado":
     ?>
        <script>
            Swal.fire({
                        icon: 'success',
                        title: 'Listo !',
                        text: 'Datos actualizados con exito !'
                    })
        </script>
    <?php 
    break;

    case "eliminado":
        ?>
           <script>
               Swal.fire({
                           icon: 'success',
                           title: 'Listo !',
                           text: 'Registro borrado con exito !'
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



<script>
function verproducto($id, $codigo, $nombre, $contenido, $unidad, $descripcion, $precio, $fecha_alta, $estatus,
    $id_compuesto, $id_tipo_producto, $min, $max) {
    $('#getinfoproductoModal').modal('toggle');


    document.getElementById('nombre').disabled = true;
    document.getElementById('contenido').disabled = true;
    document.getElementById('unidad').disabled = true;
    document.getElementById('descripcion').disabled = true;
    document.getElementById('precio').disabled = true;
    document.getElementById('estatus').disabled = true;
    document.getElementById('id_compuesto').disabled = true;
    document.getElementById('id_tipo_producto').disabled = true;
    document.getElementById('min').disabled = true;
    document.getElementById('max').disabled = true;

    document.getElementById('id_producto').value = $id;
    document.getElementById('codigo').value = $codigo;
    document.getElementById('nombre').value = $nombre;
    document.getElementById('contenido').value = $contenido;
    document.getElementById('unidad').value = $unidad;
    document.getElementById('descripcion').value = $descripcion;
    document.getElementById('precio').value = $precio;
    document.getElementById('fecha_alta').value = $fecha_alta;
    document.getElementById('estatus').value = $estatus;
    document.getElementById('id_compuesto').value = $id_compuesto;
    document.getElementById('id_tipo_producto').value = $id_tipo_producto;
    document.getElementById('min').value = $min;
    document.getElementById('max').value = $max;


}

function habilitarcampos() {

    document.getElementById('nombre').disabled = false;
    document.getElementById('contenido').disabled = false;
    document.getElementById('unidad').disabled = false;
    document.getElementById('descripcion').disabled = false;
    document.getElementById('precio').disabled = false;
    document.getElementById('estatus').disabled = false;
    document.getElementById('id_compuesto').disabled = false;
    document.getElementById('id_tipo_producto').disabled = false;
    document.getElementById('min').disabled = false;
    document.getElementById('max').disabled = false;


}

function eliminarproducto($id) {
    $('#borrarModal').modal('toggle');

    console.log($id);
    document.getElementById('_id_producto').value = $id;

}
</script>