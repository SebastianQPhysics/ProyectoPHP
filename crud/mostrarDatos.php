<?php 

include ("conexion.php");
$con=conectar();

$sql="SELECT * FROM usuario";
$query=mysqli_query($con,$sql);

//$row=mysqli_fetch_array($query);

//echo $query->num_rows;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../indexPHP.css">
    <title>Noticias de ciencia</title>
  </head>
  <body>
    <!--Header-->
    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../assets/logo/fisico.png" alt="Logo personal">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="usuario.php">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--/Header-->

    <!--Main-->
   
    <!--/Main-->
    <div class="px-3 mt-5 mx-auto" style="min-height: 600px;">
       
      <table class="table table table-hover table-dark">
          <thead class="table-striped" style="background-color: #97c93e">
              <tr>
                  <th>Correo</th>
                  <th>Contraseña</th>
                  <th>RUT/ID</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Dirección</th>
                  <th>Sexo</th>
                  <th>Nacimiento</th>
                  <th>Edad</th>
              </tr>
          </thead>

          <tbody>
              <?php
                $sexoArray = ["Masculino", "Femenino", "No binario"];
                while ($row=$query->fetch_assoc()){
              ?>
              <tr>
                  <th><?php echo $row['correo']?></th>
                  <th><?php echo $row['contraseña']?></th>
                  <th><?php echo $row['rut']?></th>
                  <th><?php echo $row['nombre']?></th>
                  <th><?php echo $row['apellido']?></th>
                  <th><?php echo $row['direccion']?></th>
                  <th><?php echo $sexoArray[$row['sexo']-1]?></th>
                  <th><?php echo $row['nacimiento']?></th>
                  <th><?php echo $row['edad']?></th>
                  <th><a href="actualizar.php?rut=<?php echo $row['rut']?>" class="btn btn-info">Editar</a></th>
                  <th><a href="delete.php?rut=<?php echo $row['rut']?>" class="btn btn-danger">Eliminar</a></th>
              <?php } ?>
          </tbody>
      </table>
  </div>
  

    

    <!--Footer-->
    <footer class="footerCrud">
      <p>
        Sebastián Paz - Herramientas de desarrollo web - 2021
      </p>
    </footer>
    <!--/Footer-->

   

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>





























