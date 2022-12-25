<!-- inicio nombre -->
<?php $nombrePagina = 'Contacto'; ?>
<!-- fin nombre -->

<!-- inicio header -->
<?php
include 'includes/header.php';
?>
<!-- fin header -->

<!-- inicio barra de navegacion -->
<?php
include 'includes/navegacion.php';
?>
<!-- fin de barra de navegacion -->

<!-- inicio header -->
<div class="bgimagen-textura">
  <div class="container animated wow zoomIn mt-5">
    <div class="titulo-bgimagen my-5">
      <h1>contactanos</h1>
    </div>
  </div>
</div>
<!-- fin header -->

<!-- Inicio conexión para contacto de nosotros -->
<div class="container mt-5">
  <div class="row text-center">
    <?php
    include "includes/conexion.php";
    $query = "SELECT nombres, apellidos, contacto, subNombre FROM nosotros";
    $resultado = mysqli_query($conectar, $query);
    while ($muestradatosalumnos = mysqli_fetch_array($resultado)) {
    ?>
      <div class="col-md-3 mb-3 animated wow zoomIn">
        <div>
          <h3><?php echo $muestradatosalumnos['nombres'] . '<br>' . $muestradatosalumnos['apellidos'] ?></h3>
          <p><?php echo $muestradatosalumnos['contacto']  ?></p><p class="tituloNuevo"><?php echo $muestradatosalumnos['subNombre'] ?></p>
        </div>
      </div>

    <?php
    } ?>
  </div>
</div>
<!-- Fin conexión para contacto de nosotros -->

<!-- inicio contenido -->
<div class="container unico">
  <center>
    <p>Cualquier duda o sugerencia y comentario, se podra comunicar al correo o numeros proporcionados</p>
  </center>
  <center>
    <h2>correo</h2>
    <p>aklg.itics.2001@gmail.com</p>
  </center>
  <div class="titul text">
    <hr>
    <h2>Desarrollado por</h2>
    <nav class="navbar navbar-expand-md footernav container unico">
      <ul class="navbar nav">
        <li class="nav-item"><a class="nav-link">Kal Leyte</a></li>
        <li class="nav-item"><a class="nav-link">alejandroBR</a></li>
        <li class="nav-item"><a class="nav-link">iveth HB</a></li>
        <li class="nav-item"><a class="nav-link">Angii Bautista</a></li>
      </ul>
      <hr>
      <h2>Contacto de los desarrolladores</h2>
      <nav class="navbar navbar-expand-md footernav">
        <ul class="navbar nav">
          <li class="nav-item"><a class="nav-link">aklg.itics.2001@gmail.com</a></li>
          <li class="nav-item"><a class="nav-link">https://github.com/KalLeyte</a></li>
          <li class="nav-item"><a class="nav-link">https://github.com/AlejandroRBarcenas</a></li>
          </li>
        </ul>
        <hr>
        <h2>dirección</h2>
        <ul class="navbar nav">
          <li class="nav-item"><a class="nav-link">P.º de los Maples S/N, Arbolada Ixtapaluca, 56570 Ixtapaluca, Méx.</a></li>
        </ul>
        <hr>
  </div>
</div>
<!-- fin contenido -->

<!-- inicio footer -->
<br>
<?php
include 'includes/footer.php';
?>
<!-- fin footer -->

<!-- archivos js -->
<?php
include 'includes/scripts.php';
?>
<!-- fin archivos js -->
</body>

</html>