

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Añadir medicion</title>
</head>
<body >

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
        <li class="nav-item"><a class="nav-link  " aria-current="page" href="index.php">Inicio</a></li>
        <li class="nav-item"><a class="nav-link active"  href="./add_registro.php">Ingresar mediciones</a></li>
        <li class="nav-item"><a class="nav-link"  href="./pozos.php">Mostrar historico</a></li>

      </ul>
    </div>
  </div>
</nav>
<?php
  

  
  ?>
  	<div class="card text-center" style="margin-bottom:50px;">
      <div>
      <h1 class="center-align ">Añadir Medicion</h1>
      </div>
  
</div class="red">
  
<div class="container center-align">
  <div class="row">
    <div class="col s6"></div>
      <div class="col-md-10">
        <div class="form-group">
          <form name="add_name" id="add_name">
         
          
     
        
     
            <table class="table table-bordered table-hover" id="dynamic_field">
              <tr>
                <td>  
     
          <?php
          	$mysqli = new mysqli('127.0.0.1', 'root', '', 'actividad');
            $conexion=mysqli_connect('127.0.0.1','root','','actividad');
            ?>
            <select class="form-select col" aria-label="Default select example" id="lista1" name="codigo" >
            <option value="0">Selecciona una opcion</option>
            <?php
        $query = $mysqli -> query ("SELECT * FROM pozo");
        while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores[id].'">'.$valores[nombre].'</option>';
        
        }
        ?>
          </select>
             </td>
                <td><input type="number" step="0.01" name="valor_name[]" placeholder="Valor de la medicion" class="form-control name_list" /></td>
                <td><input type="date" name="fecha_pozo[]"  /></td>    
              </tr>
            </table>  
             <a class="btn btn-danger " href="./index.php">Volver al Menu</a>

            <input  type="submit"class="btn btn-primary" name="submit" id="submit" value="Añadir">

           

          </form>
        </div>
      </div>
    <div class="col-md-1"></div>
  </div>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>
<script type="text/javascript">
  $(document).ready(function(){

    var i = 1;

    $("#add").click(function(){
      i++;
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="number" name="first_name[]" placeholder="Ingresa el valor" class="form-control name_list"/></td><td><input type="datetime-local" name="fecha_naci[]" placeholder="Ingrese su Cedula" /></td>    <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
    });

    $(document).on('click', '.btn_remove', function(){  
      var button_id = $(this).attr("id");   
      $('#row'+button_id+'').remove();  
    });

    $("#submit").on('click',function(){
      var formdata = $("#add_name").serialize();
      $.ajax({
        url   :"action.php",
        type  :"POST",
        data  :formdata,
        cache :false,
        success:function(result){
          alert(result);
          $("#add_name")[0].reset();
        }
      });
    });
  });
</script>

