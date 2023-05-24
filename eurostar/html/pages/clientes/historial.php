<div class="col-12 text-center text-muted titlebanner-cliente">
    <h1 class="display-3 txt-title" style="margin: 0;"> Historial de Clientes</h1>
</div>
<div class="content-wraper">
    <div class="col-xl">
        <div class="col-sm-12" style="margin-top: 30px; padding: 0 22px;">
            <table id="table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Compañia</th>
                        <th>fecha</th>
                        <th>$ total</th>
                        <th>Detalle de venta</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < 2; $i++) {
                        ?>
                        <tr>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo 'nombre'; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo 'apellido'; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo 'compañia'; ?>
                            </td>
                            <td data-label="teléfono: " class="text-center font-w600" style="font-size:small;">
                                <?php echo '4772867800'; ?>
                            </td>

                            <td data-label="email: " class="text-center font-w600" style="font-size:small;">
                                <?php echo 'ejemplo@gmail.com'; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <button type="button" class="btn rounded-pill" onclick="abrirModal();">
                                    <a href="#">
                                        <span class="fa-solid fa-magnifying-glass"></span> Ver más
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
        <div class="modal fade" id="modalHistorial" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel4">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameExLarge" class="form-label">Name</label>
                                <input type="text" id="nameExLarge" class="form-control" placeholder="Enter Name" />
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="emailExLarge" class="form-label">Email</label>
                                <input type="text" id="emailExLarge" class="form-control" placeholder="xxxx@xxx.xx" />
                            </div>
                            <div class="col mb-0">
                                <label for="dobExLarge" class="form-label">DOB</label>
                                <input type="text" id="dobExLarge" class="form-control" placeholder="DD / MM / YY" />
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
        $('#modalHistorial').modal('show');
    }
</script>