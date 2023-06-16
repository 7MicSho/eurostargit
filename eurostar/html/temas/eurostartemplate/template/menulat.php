<style>
    .lista1 li {
     display:inline;
     padding-left:3px;
     padding-right:3px;
}
</style>
<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu" style="background-color: #13141a;">
    <div class="app-brand demo">
        <a href="?modulo=producto&accion=galeria" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img class="app-brand-logo demo" style="width:180px"
                    src="<?php echo ASSETS ?>/img/illustrations/logo-eurostar.png" alt="">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">



        <?php if (isset($_SESSION['typeuser'])) { ?>


        <li class="menu-header small text-uppercase">

            <div class="sidebar-mini-hidden-b text-center">
                <img class="h-auto rounded-circle"
                    style="background: rgb(229,238,205); object-fit: contain; object-position: top 75%; max-height:100px;margin-bottom: 1em"
                    src="<?php if($_SESSION['foto'] != '' || !file_exists(PUBLICIMG.$_SESSION['foto']) ) {  echo PUBLICIMG.$_SESSION['foto']; }else{ echo PUBLICIMG.'avatar.jpg';} ?>"
                     class="w-px-40 h-auto rounded-circle" alt="">
                <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="sidebar-mini-hide link-effect text-secondary font-size-xs font-w600 text-uppercase"
                            href="?view=profile"><?php echo $_SESSION['nombre'] ?> <?php echo $_SESSION['primer_apellido'] ?></a>
                    </li>
                </ul>
                <div style="margin-top:1em">
                    <ul class="list-inline mt-10 lista1">
                        <li>
                            <a class="text-primary" href="?modulo=usuario&accion=profile">
                                <i class="bx bx-user me-2"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-secondary" href="?modulo=usuario&accion=config">
                                <i class="bx bx-cog me-2"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-danger" href="?modulo=usuario&accion=salir">
                                <i class="bx bx-power-off me-2"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>

        <li class="menu-item ">
            <a href="?modulo=<?php echo $_SESSION['typeuser'] ?>&accion=home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">INICIO</div>
            </a>
        </li>
        <?php if ($_SESSION['typeuser'] == 'admin') { ?>
        <li class="menu ">
            <hr>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="User interface">USUARIOS</div>
            </a>
            <ul class="menu-sub">
                <!-- <li class="menu-item">
                    <a href="?modulo=empleado&accion=home" class="menu-link">
                        <div data-i18n="Accordion">EMPLEADOS</div>
                    </a>
                </li> -->
                <li class="menu-item">
                    <a href="?modulo=empleado&accion=home" class="menu-link">
                        <div data-i18n="Buttons">EMPLEADOS</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="?modulo=clientes&accion=administrar" class="menu-link">
                        <div data-i18n="Buttons">CLIENTES</div>
                    </a>
                </li>
                <!-- <li class="menu-item">
                    <a href="?modulo=proveedor&accion=home" class="menu-link">
                        <div data-i18n="Buttons">PROVEEDORES</div>
                    </a>
                </li> -->
                <li class="menu-item">
                    <a href="?modulo=prospectos&accion=administrar" class="menu-link">
                        <div data-i18n="Buttons">PROSPECTOS</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon bx bx-door-open"></i>
                <div data-i18n="User interface">VISITAS</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="?modulo=visitas&accion=consultar" class="menu-link">
                        <div data-i18n="Alerts">ADMINISTRAR</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="?modulo=visitas&accion=muestras" class="menu-link">
                        <div data-i18n="Alerts">MUESTRAS</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="?modulo=prospectos&accion=promociones" class="menu-link">
                        <div data-i18n="Buttons">PROMOCIONES</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="Misc">PRODUCTOS</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="?modulo=producto&accion=galeria" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">GALERIA</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="?modulo=producto&accion=dashproductos" class="menu-link">
                        <div data-i18n="Text Divider">EDITAR / ACTUALIZAR</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-money"></i>
                <div data-i18n="Authentications">COMPRA / VENTAS</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">COMPRAS</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">VENTAS</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="icons-boxicons.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-test-tube"></i>
                <div data-i18n="Boxicons">FORMULACIÓN</div>
            </a>
        </li>
        <!-- <li class="menu-item">
            <a href="icons-boxicons.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Boxicons">Solicitudes especiales</div>
            </a>
        </li> -->




















        <!--
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text" style="color: gray">__________________________</span>
                </li>


                <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-box"></i>
                        <div data-i18n="User interface">PROSPECTOS</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="?modulo=prospectos&accion=administrar" class="menu-link">
                                <div data-i18n="Accordion">Administrar</div>
                            </a>
                        </li>
                         <li class="menu-item">
                            <a href="?modulo=visitas&accion=consultar" class="menu-link">
                                <div data-i18n="Alerts">Visitas</div>
                            </a>
                        </li> 
                       
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="cards-basic.html" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-box"></i>
                        <div data-i18n="Basic">Clientes</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="?modulo=clientes&accion=administrar" class="menu-link">
                                <div data-i18n="Accordion">Administrar</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-accordion.html" class="menu-link">
                                <div data-i18n="Accordion">Ventas</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="?modulo=clientes&accion=historial" class="menu-link">
                                <div data-i18n="Alerts">Historial</div>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                        <div data-i18n="Misc">Inventario</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="pages-misc-error.html" class="menu-link">
                                <div data-i18n="Error">Materoia prima</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-misc-under-maintenance.html" class="menu-link">
                                <div data-i18n="Under Maintenance">Producto terminado</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-misc-under-maintenance.html" class="menu-link">
                                <div data-i18n="Under Maintenance">Herramienta</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-user-circle"></i>
                        <div data-i18n="Misc">Proveedores</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="pages-misc-error.html" class="menu-link">
                                <div data-i18n="Error">Error</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-misc-under-maintenance.html" class="menu-link">
                                <div data-i18n="Under Maintenance">Under Maintenance</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-copy"></i>
                        <div data-i18n="Extended UI">Formulación</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                                <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="extended-ui-text-divider.html" class="menu-link">
                                <div data-i18n="Text Divider">Text Divider</div>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="menu-item">
                    <a href="icons-boxicons.html" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-crown"></i>
                        <div data-i18n="Boxicons">Solicitudes especiales</div>
                    </a>
                </li>
            
            
            
            
            
            
            
            -->



































        <?php } elseif ($_SESSION['typeuser'] == 'empleado') { ?>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">VENDEDOR</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Misc">PRODUCTOS</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="?modulo=producto&accion=galeria" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">GALERIA</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="?modulo=prospectos&accion=administrar" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Boxicons">PROSPECTOS</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon bx bx-door-open"></i>
                <div data-i18n="User interface">VISITAS</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="?modulo=visitas&accion=consultar" class="menu-link">
                        <div data-i18n="Alerts">ADMINISTRAR</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="?modulo=visitas&accion=muestras" class="menu-link">
                        <div data-i18n="Alerts">MUESTRAS</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="?modulo=prospectos&accion=promociones" class="menu-link">
                        <div data-i18n="Buttons">PROMOCIONES</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- <li class="menu-item">
            <a href="icons-boxicons.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Boxicons">SOLICITUDES ESPECIALES</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="icons-boxicons.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Boxicons">SOLICITUDES ESPECIALES</div>
            </a>
        </li> -->
        <?php } elseif ($_SESSION['typeuser'] == 'prospectos') { ?>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">PROSPECTO</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">PROSPECTOS</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="ui-accordion.html" class="menu-link">
                        <div data-i18n="Accordion">VENTAS</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-alerts.html" class="menu-link">
                        <div data-i18n="Alerts">VISITAS</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-badges.html" class="menu-link">
                        <div data-i18n="Badges">CLIENTES</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-buttons.html" class="menu-link">
                        <div data-i18n="Buttons">PROMOCIONES</div>
                    </a>
                </li>
            </ul>
        </li>

        <?php } ?>








        <?php } else { ?>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">LOGIN</span>
        </li>
        <li class="menu-item">
            <a href="?modulo=usuario&accion=login" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">INICIAR SESIÓN</div>
            </a>
        </li>

        <?php } ?>
    </ul>
</aside>

<!-- / Menu -->