<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="<?php echo ASSETS ?>/assets/" data-template="vertical-menu-template-free">

<head>
    <?php require_once $this->_head; ?>
</head>

<body>

    <?php

    if (isset($_GET['modulo']) && ($_GET['modulo'] != 'usuario' OR $_GET['accion'] == 'aprendizaje' OR   $_GET['accion'] == 'profile') && $_GET['accion'] != 'login') {
        ?>
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <?php
                include_once(TEMPLATE . "menulat.php");
                ?>
                <div class="layout-page">
                    <?php
                    include_once(TEMPLATE . "menusup.php");
                    ?>
                    <div class="content-wrapper">
                        <?php
                        require_once $this->_contenido;

                        include_once(TEMPLATE . "footer.php");
                        ?>
                        <div class="content-backdrop fade"></div>
                    </div>
                </div>
            </div>
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <?php
    } else {
        require_once $this->_contenido;
    }
    ?>
</body>
<?php require_once $this->_scripts; ?>

</html>