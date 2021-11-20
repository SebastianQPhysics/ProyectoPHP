<?php 

include ("conexion.php");
$con=conectar();

$sql="SELECT * FROM usuario";
$query=mysqli_query($con,$sql);

//$row=mysqli_fetch_array($query);

echo $query->num_rows;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="../formularioPHP.css" rel="stylesheet">

    <title>Contacto</title>
  </head>

  <div>
      <table class="table">
          <thead class="table-success table-striped">
              <tr>
                  <th>RUT/ID</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Fecha de nacimiento</th>
                  <th>Edad</th>
                  <th>Sexo</th>
                  <th>Dirección</th>
              </tr>
          </thead>

          <tbody>
              <?php
                while ($row=$query->fetch_assoc()){
              ?>
              <tr>
                  <th><?php echo $row['rut']?></th>
                  <th><?php echo $row['nombre']?></th>
                  <th><?php echo $row['apellido']?></th>
                  <th><?php echo $row['nacimiento']?></th>
                  <th><?php echo $row['edad']?></th>
                  <th><?php echo $row['sexo']?></th>
                  <th><?php echo $row['direccion']?></th>
                  <th><a href="actualizar.php?id=<?php echo $row['rut']?>" class="btn btn-info">Editar</a></th>
                  <th><a href="delete.php?id=<?php echo $row['rut']?>" class="btn btn-danger">Eliminar</a></th>
              <?php } ?>
          </tbody>
      </table>
  </div>

</html>