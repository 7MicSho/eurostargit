<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl container-p-y">
    <div class="card">
                <h5 class="card-header">VENDEDORES</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>RFC</th>
                        <th>Telefono</th>
                        <th>Nomina</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                        <td>Albert Cook</td>
                        <td>Albert Cook</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Editar</a>
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Ventas</a>
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Baja</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                        <td>Albert Cook</td>
                        <td>Albert Cook</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Editar</a>
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Ventas</a>
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Baja</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                       
                    </tbody>
                  </table>
                </div>
              </div>
    </div>


    <div class="col-12 text-center text-muted titlebanner-seller">
        <h1 class="display-4 txt-title" style="margin: 0; text-transform: uppercase; " > Administrar Vendedores</h1>
    </div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row" style="padding-left: 1.2%;">
            <div class="col-lg-3 col-md-6 order-0" style="margin-bottom: 1.1%;">
                <a href="?modulo=vendedor&accion=agregar">
                    <div class="d-flex align-items-center row" style="padding-right: 4%;">
                        <div class="col-sm-12 bg-success text-center"
                            style="color: white; border-radius: 10px 10px 10px 10px;">
                            <i class="fa-solid fa-user-plus fa-3x mt-4"></i>
                            <p class="mt-3 pb-1">
                                Nuevo vendedor
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 order-1" style="margin-bottom: 1.1%;">
                <a href="?modulo=vendedor&accion=consultar">
                    <div class="d-flex align-items-center row" style="padding-right: 4%;">
                        <div class="col-sm-12 bg-primary text-center"
                            style="color: white; border-radius: 10px 10px 10px 10px;">
                            <i class="fa-solid fa-users fa-3x mt-4"></i>
                            <p class="mt-3 pb-1">
                                Vendedores existentes
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 order-2" style="margin-bottom: 1.1%;">
                <a href="?modulo=vendedor&accion=editar">
                    <div class="d-flex align-items-center row" style="padding-right: 4%;">
                        <div class="col-sm-12 bg-warning text-center"
                            style="color: white; border-radius: 10px 10px 10px 10px;">
                            <i class="fa-solid fa-user-pen fa-3x mt-4"></i>
                            <p class="mt-3 pb-1">
                                Editar un vendedor
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 order-3" style="margin-bottom: 1.1%;">
                <a href="?modulo=vendedor&accion=editar">
                    <div class="d-flex align-items-center row" style="padding-right: 4%;">
                        <div class="col-sm-12 bg-danger text-center"
                            style="color: white; border-radius: 10px 10px 10px 10px;">
                            <i class="fa-solid fa-user-times fa-3x mt-4"></i>
                            <p class="mt-3 pb-1">
                                Eliminar un vendedor
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>
<!-- / Content -->