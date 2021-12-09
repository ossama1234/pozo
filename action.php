
<?php


$url='127.0.0.1';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,'actividad');


$codigo = $_POST['codigo'];
	$userData = count($_POST["valor_name"]);
	
	if ($userData > 0) {
	    for ($i=0; $i < $userData; $i++) { 
		if (trim($_POST['valor_name'] != '') ) {
			$valor_name   = $_POST["valor_name"][$i];
		
            $fecha_pozo = $_POST["fecha_pozo"][$i];
	
			$query  = "INSERT INTO `medicion` (`valor`,`fecha`,`pozo_id`) VALUES ('$valor_name','$fecha_pozo','$codigo')";
			$result = mysqli_query($conn, $query);
          
           
	    }
  
	    echo "Data inserted successfully";
   
	}      }  else{
	    echo "Please Enter user name";
   
    }

?>
