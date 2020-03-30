


<!--<script type="text/javascript" 
src="/solicitud_salas/libs/boot-4/js/jquery.js">
</script>-->

<script type="text/javascript"
  src="/solicitud_salas/libs/boot-4/js/bootstrap.js">
</script>

<!--<script type="text/javascript" src="/solicitud_salas/libs/boot-4/dt/datatables.js">
</script>-->
<script type="text/javascript"></script>

<script type="text/javascript" src="/solicitud_salas/libs/boot-4/js/dcc.js" >
</script>


<script type="text/javascript" src="libs2/jquery.js"></script>
  <script type="text/javascript" scr="libs2/bt/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="libs2/dt/datatables.js"></script>
  

  <script type="text/javascript">
    $(document).ready( function () {
        $('#mitabla').DataTable();
    } );

    $('#mitabla').DataTable( {
      language: {
          processing:     "Tratamiento en curso...",
          search:         "Buscar&nbsp;:",
          lengthMenu:    "Visualización _MENU_ elementos",
          info:           "Visualización de _START_ a _END_ elementos de _TOTAL_ elementos",
          infoEmpty:      "Visualización de 0 a 0 elementos de 0 elementos",
          infoFiltered:   "(Filtrado de _MAX_ elementos en total)",
          infoPostFix:    "",
          loadingRecords: "Cargando...",
          zeroRecords:    "No hay elementos para mostrar.",
          emptyTable:     "No hay datos disponibles en la tabla.",
          paginate: {
              first:      "Inicio",
              previous:   "Anterior",
              next:       "Siguiente",
              last:       "Final"
          },
          aria: {
              sortAscending:  ": Activar para ordenar la columna en orden ascendente.",
              sortDescending: ": Activar para ordenar la columna en orden descendente."
          }
    }
} );

  </script>

<div class="container">
    <div class="row">
      <div class="col">
        <h3 class=" textofooter">
          Programación Web &copy (2019) A&F
        </h3>
    </div>
  </div>
</div>

</body>
</html>