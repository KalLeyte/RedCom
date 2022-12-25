<!-- Inicio de titulo de la página -->
<?php $nombrePagina = 'RedCom Principal'; ?>
<!-- Fin de titulo de la página -->

<!-- Inicio de header -->
<?php
include 'includes/header.php';
?>
<!-- Fin de header -->

<!-- Inicio barra de navegacion -->
<?php
include 'includes/navegacion.php';
?>
<!-- Fin de barra de navegacion -->

<!-- Inicio header -->
<div class="bgimagen-textura">
  <div class="container animated wow zoomIn mt-5">
    <div class="titulo-bgimagen my-5">
      <h1>Bienvenidos</h1>
    </div>
  </div>
</div>
<div class="text">
  <p>En está página podras aprender los conceptos basicos de redes y arquitectura de computadoras(PC'S)</p>
</div>
<div class="container cbta">
  <p>A continuación se te mostraran los siguientes apartados, donde podras
    seleccionar a tú propio criterio, lo que es los 2 cursos informativos
    sobre "La arquitectura de computadoras" y "Los Fundamentos de redes"
  </p>
  <img src="img/RedCom.jpg">
</div>
<!-- Fin header -->
<!-- inicio grid -->
<div>
  <h2 class="Nosotros tituloNuevo">Cursos</h2>
  <div class="row centradoDiv">
    <div class="col-md-3">
      <div class="card mb-4 text-white table-hover table-dark border border-primary aso1">
        <div class="card-body">
          <center>
            <h3><a href="redes.php" href="redes.php">Curso de redes</a></h3>
          </center>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card mb-4 text-white table-hover table-dark border border-primary aso1">
        <div class="card-body">
          <center>
            <h3><a href="arquitecturaPC.php" href="arquitecturaPC.php">Arquitectura de PC´s</a></h3>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- fin grid  -->

<br>
<!-- Inicio footer -->
<?php
include 'includes/footer.php';
?>
<!-- Fin footer -->

<!-- Inicio archivos js -->
<?php
include 'includes/scripts.php';
?>
<!-- Fin archivos js -->
</body>

</html>