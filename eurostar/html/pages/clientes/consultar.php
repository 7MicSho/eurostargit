<div class="content-wraper">
    <div class="col-xl">
        <div class="col-12 text-center text-muted titlebanner-cliente" style="margin: 20px 0;">
            <h1 class="display-3 txt-title" style="margin: 0;"> Consultar Clientes</h1>
        </div>
        <div class="col-sm-12" style="padding: 0 20px;">
        <table id="table" class="table dataTable table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Compañia</th>
                        <th>Ver más</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($clientes); $i++) {
                        ?>
                        <tr>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo $clientes[$i]['nombre']; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo $clientes[$i]['primer_apellido'] . ' ' . $clientes[$i]['segundo_apellido']; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo '+' . $clientes[$i]['codigo_pais'] . ' ' . $clientes[$i]['lada'] . $clientes[$i]['numero_telefono']; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo $clientes[$i]['correo']; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo $clientes[$i]['calle'] . ' ' . $clientes[$i]['numero'] . ' ' . $clientes[$i]['numero_int'] . ' ' . $clientes[$i]['colonia']; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php
                                 if($clientes[$i]['nombre_emp']!=''){
                                 echo $clientes[$i]['nombre_emp'];
                                 }else{
                                    echo 'Sin Empresa';
                                 }
                                 ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <form method="post" action="?modulo=clientes&accion=perfil">
                                    <input type="hidden" name="id_persona"
                                        value="<?php echo $clientes[$i]['id_persona'] ?>">
                                    <input type="hidden" name="id_prospecto"
                                        value="<?php echo $clientes[$i]['id_cliente'] ?>">
                                    <input type="hidden" name="id_correo"
                                        value="<?php echo $clientes[$i]['id_correo'] ?>">
                                    <input type="hidden" name="id_telefono"
                                        value="<?php echo $clientes[$i]['id_telefono'] ?>">
                                    <input type="hidden" name="id_direccion"
                                        value="<?php echo $clientes[$i]['id_direccion'] ?>">
                                    <input type="hidden" name="id_empresa"
                                        value="<?php echo $clientes[$i]['id_empresa'] ?>">
                                    <button type="submit" class="btn rounded-pill">
                                        <span class="fa-solid fa-magnifying-glass"></span> Ver más
                                    </button>
                                </form>
                            </td>

                        </tr>
                        <?php
                    }
                    for ($i = 0; $i < count($clientesSEmp); $i++) {
                        ?>
                        <tr>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo $clientesSEmp[$i]['nombre']; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo $clientesSEmp[$i]['primer_apellido'] . ' ' . $clientesSEmp[$i]['segundo_apellido']; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo '+' . $clientesSEmp[$i]['codigo_pais'] . ' ' . $clientesSEmp[$i]['lada'] . $clientesSEmp[$i]['numero_telefono']; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo $clientesSEmp[$i]['correo']; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php echo $clientesSEmp[$i]['calle'] . ' ' . $clientesSEmp[$i]['numero'] . ' ' . $clientesSEmp[$i]['numero_int'] . ' ' . $clientesSEmp[$i]['colonia']; ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <?php
                                 if($clientesSEmp[$i]['nombre_emp']!=''){
                                 echo $clientesSEmp[$i]['nombre_emp'];
                                 }else{
                                    echo 'Sin Empresa';
                                 }
                                 ?>
                            </td>
                            <td data-label="nombre: " class="text-center font-w600" style="font-size:small;">
                                <form method="post" action="?modulo=clientes&accion=perfil">
                                    <input type="hidden" name="id_persona"
                                        value="<?php echo $clientesSEmp[$i]['id_persona'] ?>">
                                    <input type="hidden" name="id_prospecto"
                                        value="<?php echo $clientesSEmp[$i]['id_cliente'] ?>">
                                    <input type="hidden" name="id_correo"
                                        value="<?php echo $clientesSEmp[$i]['id_correo'] ?>">
                                    <input type="hidden" name="id_telefono"
                                        value="<?php echo $clientesSEmp[$i]['id_telefono'] ?>">
                                    <input type="hidden" name="id_direccion"
                                        value="<?php echo $clientesSEmp[$i]['id_direccion'] ?>">
                                    <input type="hidden" name="id_empresa"
                                        value="<?php echo $clientesSEmp[$i]['id_empresa'] ?>">
                                    <button type="submit" class="btn rounded-pill">
                                        <span class="fa-solid fa-magnifying-glass"></span> Ver más
                                    </button>
                                </form>
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
    </div>
</div>