<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pozos</title>
</head>
<body>
  
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
      <h3>Pozos</h3>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active " aria-current="page" href="index.php">Inicio</a></li>
        <li class="nav-item"><a class="nav-link "  href="./add_registro.php">Ingresar mediciones</a></li>
        <li class="nav-item"><a class="nav-link"  href="./pozos.php">Mostrar historico</a></li>

      </ul>
    </div>
  </div>
</nav> 
<div class="container">
  <div>
      <h1 class="text-center ">Pozos registrados</h1>
      </div>
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Registros</th>

    </tr>
  </thead>
  <tbody>
    </div>



<?php

require_once "config.php";

$sql = "SELECT id, nombre FROM pozo";
        
if($stmt = mysqli_prepare($link, $sql)){
    

    
    if(mysqli_stmt_execute($stmt)){

        mysqli_stmt_store_result($stmt);
        
    
        if(mysqli_stmt_num_rows($stmt) > 0){                    

            mysqli_stmt_bind_result($stmt, $id, $nombre);


            while(mysqli_stmt_fetch($stmt)){

              echo("
              <tr>
                <th scope='row'>$id</th>
                <td>$nombre</td>
                <td><a href='grafica.php?idPozo=$id'>Ver registros</a></td>
              </tr>");
            }
        } else{

            echo('No hay valores');
        }
    } else{
        echo "Algo salió mal, por favor vuelve a intentarlo.";
    }
}


mysqli_stmt_close($stmt);



mysqli_close($link);
    
?>

    
    
    
  </tbody>
</table>
      <div> 
         <a class="btn btn-danger " href="./index.php">Regresar</a>
      </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>