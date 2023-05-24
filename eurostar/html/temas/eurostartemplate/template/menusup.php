<div class="">
    <?php if (isset($_SESSION['typeuser'])) {   ?>
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme d-xl-none" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <!-- Search -->

                <div class="navbar-nav align-items-center">
                    <div class="nav-item d-flex align-items-center">
                    <img class="app-brand-logo demo" style="width:180px; "
                    src="<?php echo ASSETS ?>/img/illustrations/logo-color.png" alt="">
                    </div>
                </div>
                </div>
        </nav>
    <?php } ?>
</div>