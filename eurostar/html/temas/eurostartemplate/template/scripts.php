<script src="<?php echo ASSETS ?>/vendor/libs/jquery/jquery.js"></script>
<script src="<?php echo ASSETS ?>/vendor/libs/popper/popper.js"></script>
<script src="<?php echo ASSETS ?>/vendor/js/bootstrap.js"></script>
<script src="<?php echo ASSETS ?>/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>


<script src="<?php echo ASSETS ?>/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Datatables -->
<script type="text/javascript" charset="utf8" src="<?php echo ASSETS ?>/datatables/datatables.js"></script>

<!-- Add the evo-calendar.js for.. obviously, functionality! -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<!-- <script src="html/temas/eurostartemplate/assets/js/js-evo-calendar/evo-calendar.js"></script> -->

<script>
    /*
    $(document).ready(function () {
    $('#table').DataTable();
    });
    */

    $(document).ready(function () {
        $('.dataTable').DataTable({
            //cambia el lenguaje a español
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Ultimo",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing": "Procesando...",
            }
        });
    });

/*             // language
            $('#calendar').evoCalendar({
        theme: 'Orange Coral',
        'language': 'es'
        // Supported language: en, es, de..
    });
    
    $("#calendar").evoCalendar('addCalendarEvent', [
    {
      id: '09nk7Ts',
      name: "Muestra Pirelli",
      description: "Entregar a Manuel Ramirez Pirelli muestra tonalidad amarillo especial a las 13:00 hrs",
      date: "April/10/2023",
      type: "birthday"
    },
    {
      id: '09nk7Tw',
      name: "Muestra Bimbo",
      description: "Entregar a contacto Bimbo muestra pintura antifungica a las 17:00 hrs",
      date: "April/14/2023",
      type: "birthday",
      color: "#098938"
    }
  ]); */
</script>

<!-- Vendors JS -->
<script src="<?php echo ASSETS ?>/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?php echo ASSETS ?>/js/main.js"></script>

<!-- Page JS -->
<script src="<?php echo ASSETS ?>/js/dashboards-analytics.js"></script>
<script src="<?php echo ASSETS ?>/js/boton.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>