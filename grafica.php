

<?php

if(!isset($_GET['idPozo'])){
  header("location: add_pozo.php");
}else{
  $idPozo = $_GET['idPozo'];
}

?>

<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

     google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

const datosPozo = [];

<?php

require_once"config.php";

$sql = "SELECT valor, fecha FROM medicion WHERE pozo_id = $idPozo ORDER BY fecha";
        
if($stmt = mysqli_prepare($link, $sql)){
    

    
    if(mysqli_stmt_execute($stmt)){

        mysqli_stmt_store_result($stmt);
        
    
        if(mysqli_stmt_num_rows($stmt) > 0){                    

            mysqli_stmt_bind_result($stmt, $valor, $fecha);


            while(mysqli_stmt_fetch($stmt)){
                echo("datosPozo.push([new Date('".$fecha."'),".$valor."]);\n");
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



function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Fecha');
      data.addColumn('number', 'Manometros');

      data.addRows(datosPozo);

      var options = {
        hAxis: {
          title: 'Fecha'
        },
        vAxis: {
          title: 'Manometros'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
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
    <div id="chart_div" style="width: 100vw; height: 70vh">
      
    </div>

    <a class="btn btn-danger ms-3" href="index.php">Volver al menu</a>
    <a class="btn btn-danger " href="./pozos.php">Ver otros pozos</a>


  </body>
</html>
