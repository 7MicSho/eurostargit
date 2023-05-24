<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class=" d-flex align-items-center flex-column">
                                <img class="img-fluid rounded my-4" src="<?php echo $prospecto[0]['ruta_foto'] ?>" height="110"
                                    width="110" alt="User avatar">
                                <div class="user-info text-center">
                                    <h4 class="mb-2">
                                        <?php echo $prospecto[0]['nombre']; ?>
                                    </h4>
                                    <?php if($prospecto[0]['puesto']!=''){
                                        echo
                                        '
                                        <span class="badge bg-label-secondary">'.$prospecto[0]['puesto'].'</span>
                                        ';
                                    } ?>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around flex-wrap my-4 py-3">

                            <div class="d-flex align-items-start mt-3 gap-3">
                                <span class="badge bg-label-primary p-2 rounded"><i
                                        class="bx bx-customize bx-sm"></i></span>
                                <div>
                                    <h5 class="mb-0"><?php echo count($visitas) ?></h5>
                                    <?php if(count($visitas)<=1){ ?>
                                    <span>Visita</span>
                                    <?php }else{ ?>
                                        <span>Visitas</span>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <h5 class="pb-2 border-bottom mb-4">Información</h5>
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Nombre:</span>
                                    <span>
                                        <?php echo $prospecto[0]['nombre'] . ' ' . $prospecto[0]['primer_apellido'] . ' ' . $prospecto[0]['segundo_apellido']; ?>
                                    </span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Email:</span>
                                    <span>
                                        <?php echo $prospecto[0]['correo']; ?>
                                    </span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Empresa:</span>
                                    <span>
                                        <?php echo $prospecto[0]['nombre_emp']; ?>
                                    </span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Teléfono:</span>
                                    <span>
                                        <?php echo '+' . $prospecto[0]['codigo_pais'] . ' ' . $prospecto[0]['lada'] . $prospecto[0]['numero_telefono']; ?>
                                    </span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Dirección:</span>
                                    <span>
                                        <?php echo $prospecto[0]['calle'] . ' #' . $prospecto[0]['numero'] . ' ' . $prospecto[0]['numero_int'] . ' Col.' . $prospecto[0]['colonia'] . ' ' . $prospecto[0]['codigo_postal']; ?>
                                    </span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Entre calles:</span>
                                    <span>
                                        <?php echo $prospecto[0]['entre_calles']; ?>
                                    </span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Ciudad:</span>
                                    <span>
                                        <?php echo $prospecto[0]['municipio'] . ', ' . $prospecto[0]['estado']; ?>
                                    </span>
                                </li>
                            </ul>
                            <!--
                            <div class="d-flex justify-content-center pt-3">
                                <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                                    data-bs-toggle="modal">Edit</a>
                                <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a>
                            </div>
-->
                        </div>
                    </div>
                </div>
                <!-- /User Card -->
            </div>
            <!--/ User Sidebar -->


            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                <!-- User Pills -->
                <ul class="nav nav-pills flex-column flex-md-row mb-3 justify-content-end">
                    <li class="nav-item">
                        <form method="post" action="?modulo=visitas&accion=agregar">
                            <input type="hidden" name="id_persona" value="<?php echo $prospecto[0]['id_persona'] ?>">
                            <input type="hidden" name="id_prospecto"
                                value="<?php echo $prospecto[0]['id_prospecto'] ?>">
                            <input type="hidden" name="id_correo" value="<?php echo $prospecto[0]['id_correo'] ?>">
                            <input type="hidden" name="id_telefono" value="<?php echo $prospecto[0]['id_telefono'] ?>">
                            <input type="hidden" name="id_direccion"
                                value="<?php echo $prospecto[0]['id_direccion'] ?>">
                            <input type="hidden" name="id_empresa" value="<?php echo $prospecto[0]['id_empresa'] ?>">
                            <button type="submit" class="btn rounded-pill">
                                <i class="fa fa-plus me-1 text-primary"></i> Nueva visita
                            </button>
                        </form>
                    </li>
                </ul>
                <!--/ User Pills -->

                <!-- Project table -->
                <div class="card mb-4" style="padding: 0px 15px;">
                    <h5 class="card-header">Visitas registradas</h5>
                    <div class="table-responsive mb-3">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <table id="table" class="table dataTable table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Fecha de visita</th>
                                        <th>Comentarios</th>
                                        <th>Estatus</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($visitas); $i++) { ?>
                                        <tr>
                                            <td data-label="nombre: " class="text-center font-w600"
                                                style="font-size:small;">
                                                <?php echo $visitas[$i]['fecha_visita'].' - '.$visitas[$i]['hora_visita']; ?>
                                            </td>
                                            <td data-label="nombre: " class="text-center font-w600"
                                                style="font-size:small;">
                                                <?php echo $visitas[$i]['observaciones']; ?>
                                            </td>
                                            <td data-label="nombre: " class="text-center font-w600"
                                                style="font-size:small;">
                                                <?php
                                                $estatus=$visitas[$i]['estatus'];
                                                switch ($estatus) {
                                                    case '3':
                                                        $estado='PENDIENTE';
                                                        break;
                                                    case '2':
                                                        $estado='CONCLUIDA';
                                                        break;
                                                    case '1':
                                                        $estado='CANCELADA';
                                                        break;
                                                    
                                                    default:
                                                        $estado='ESTATUS NO DISPONIBLE';
                                                        break;
                                                }
                                                echo $estado;
                                                ?>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Fecha de visita</th>
                                        <th>Comentarios</th>
                                        <th>Estatus</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Project table -->


            </div>
            <!--/ User Content -->
        </div>

        <!-- Modal -->
        <!-- Edit User Modal -->
        <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3>Edit User Information</h3>
                            <p>Updating user details will receive a privacy audit.</p>
                        </div>
                        <form id="editUserForm" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework"
                            onsubmit="return false" novalidate="novalidate">
                            <div class="col-12 col-md-6 fv-plugins-icon-container">
                                <label class="form-label" for="modalEditUserFirstName">First Name</label>
                                <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                                    class="form-control" placeholder="John">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="col-12 col-md-6 fv-plugins-icon-container">
                                <label class="form-label" for="modalEditUserLastName">Last Name</label>
                                <input type="text" id="modalEditUserLastName" name="modalEditUserLastName"
                                    class="form-control" placeholder="Doe">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="col-12 fv-plugins-icon-container">
                                <label class="form-label" for="modalEditUserName">Username</label>
                                <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control"
                                    placeholder="john.doe.007">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserEmail">Email</label>
                                <input type="text" id="modalEditUserEmail" name="modalEditUserEmail"
                                    class="form-control" placeholder="example@domain.com">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserStatus">Status</label>
                                <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select"
                                    aria-label="Default select example">
                                    <option selected="">Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                    <option value="3">Suspended</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTaxID">Tax ID</label>
                                <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                                    class="form-control modal-edit-tax-id" placeholder="123 456 7890">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserPhone">Phone Number</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">+1</span>
                                    <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                                        class="form-control phone-number-mask" placeholder="202 555 0111">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserLanguage">Language</label>
                                <div class="position-relative"><select id="modalEditUserLanguage"
                                        name="modalEditUserLanguage"
                                        class="select2 form-select select2-hidden-accessible" multiple=""
                                        data-select2-id="modalEditUserLanguage" tabindex="-1" aria-hidden="true">
                                        <option value="">Select</option>
                                        <option value="english" selected="" data-select2-id="2">English</option>
                                        <option value="spanish">Spanish</option>
                                        <option value="french">French</option>
                                        <option value="german">German</option>
                                        <option value="dutch">Dutch</option>
                                        <option value="hebrew">Hebrew</option>
                                        <option value="sanskrit">Sanskrit</option>
                                        <option value="hindi">Hindi</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span
                                                class="select2-selection select2-selection--multiple" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                                aria-disabled="false">
                                                <ul class="select2-selection__rendered">
                                                    <li class="select2-selection__choice" title="English"
                                                        data-select2-id="3"><span
                                                            class="select2-selection__choice__remove"
                                                            role="presentation">×</span>English</li>
                                                    <li class="select2-search select2-search--inline"><input
                                                            class="select2-search__field" type="search" tabindex="0"
                                                            autocomplete="off" autocorrect="off" autocapitalize="none"
                                                            spellcheck="false" role="searchbox" aria-autocomplete="list"
                                                            placeholder="" style="width: 0.75em;"></li>
                                                </ul>
                                            </span></span><span class="dropdown-wrapper"
                                            aria-hidden="true"></span></span></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserCountry">Country</label>
                                <div class="position-relative"><select id="modalEditUserCountry"
                                        name="modalEditUserCountry"
                                        class="select2 form-select select2-hidden-accessible" data-allow-clear="true"
                                        data-select2-id="modalEditUserCountry" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="5">Select</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="4" style="width: auto;"><span class="selection"><span
                                                class="select2-selection select2-selection--single" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-disabled="false"
                                                aria-labelledby="select2-modalEditUserCountry-container"><span
                                                    class="select2-selection__rendered"
                                                    id="select2-modalEditUserCountry-container" role="textbox"
                                                    aria-readonly="true"><span
                                                        class="select2-selection__placeholder">Select
                                                        value</span></span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                            </div>
                            <div class="col-12">
                                <label class="switch">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">Use as a billing address?</span>
                                </label>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Cancel</button>
                            </div>
                            <input type="hidden">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Edit User Modal -->

        <!-- Add New Credit Card Modal -->
        <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3>Upgrade Plan</h3>
                            <p>Choose the best plan for user.</p>
                        </div>
                        <form id="upgradePlanForm" class="row g-3" onsubmit="return false">
                            <div class="col-sm-9">
                                <label class="form-label" for="choosePlan">Choose Plan</label>
                                <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                                    <option selected="">Choose Plan</option>
                                    <option value="standard">Standard - $99/month</option>
                                    <option value="exclusive">Exclusive - $249/month</option>
                                    <option value="Enterprise">Enterprise - $499/month</option>
                                </select>
                            </div>
                            <div class="col-sm-3 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary">Upgrade</button>
                            </div>
                        </form>
                    </div>
                    <hr class="mx-md-n5 mx-n3">
                    <div class="modal-body">
                        <h6 class="mb-0">User current plan is standard plan</h6>
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="d-flex justify-content-center me-2 mt-3">
                                <sup class="h5 pricing-currency pt-1 mt-3 mb-0 me-1 text-primary">$</sup>
                                <h1 class="display-3 mb-0 text-primary">99</h1>
                                <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                            </div>
                            <button class="btn btn-label-danger cancel-subscription mt-3">Cancel Subscription</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Add New Credit Card Modal -->

        <!-- /Modal -->

    </div>
    <!-- / Content -->
</div>