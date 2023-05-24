<!-- Content wrapper -->
<div class="col-12 text-center titlebanner-seller">
    
    <h3 style="margin: 0; text-transform: uppercase; color: azure; "> Administrar Vendedores</h3>
</div>
<div class="content-wraper" >
    
    <!-- Content -->
    <div class="container-xxl container-p-y">
        <!--<div class="card" style="background: rgba(67, 89, 113, 0.8)"> -->
        <div class="card">

           
                <div class="row">

                    <div class="col-12 col-sm-8">
                        <h5 style="text-align: center;" class="card-header">VENDEDORES</h5>
                    </div>
                    <div class="col-12 col-sm-3" style="margin-right: -50px;" >
                        <a href="?modulo=vendedor&accion=agregar" >
                            <div class="col-sm-12 bg-success text-center"
                                style="color: white;  border-radius: 10px 10px 10px 10px; ">

                                <p class="mt-3"> <strong>Nuevo Vendedor</strong> <i class="bx bx-plus-circle"></i></p>
                            </div>
                        </a>
                    </div>

                </div>
                
                <div class="row">
                <div class="col-12">

                    <table class="table table">
                        <thead class="table">
                            <tr style="text-align: center;">
                                <th>Nombre</th>
                                <th>RFC</th>
                                <th>Telefono</th>
                                <th>ID Empleado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            
                            <?php for ($i=0; $i < count($vendedores) ; $i++) {  ?>
                            
                            <tr>
                                <td><i class="bx bx-user-circle"></i> <strong> <?php echo $vendedores [$i]['nombre'].' '.$vendedores [$i]['primer_apellido'] ?> </strong></td>
                                <td style="text-align: center;"> <?php echo $vendedores [$i]['rfc']?></td>
                                <td style="text-align: center;"><?php echo $vendedores [$i]['telefonos']?></td>
                                <td style="text-align: center;"><span
                                        class="badge bg-label-primary me-1"><?php echo $vendedores [$i]['id_empleado']?></span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-edit-alt me-1"></i> Editar vendedor</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i
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
    <!-- / Content -->