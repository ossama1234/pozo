<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registrar Pozo</title>
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

 <div class="fluid container">
      <div>
      <h1 class="center-align text-center ">Añadir Registro</h1>
      </div>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">

                      <form method="post" action="reg_pozo.php">  <div class="input-field form-control-agenc row my-2 mx-auto" id="c-username">
                      <label>Nombre del pozo</label>
  		<input style="width: 70%" required type="text" name="nombre" >  </div>
                    
                    <div class="row">
                        <div class="col">
                             <input  type="submit"class="btn btn-primary" name="submit" id="submit" value="Registrar">
                             <a class="btn btn-success " href="./add_registro.php">Ingresar mediciones </a>
                              <a class="btn btn-danger " href="./pozos.php">Mostrar historico</a>
                               


                        </div>
                    </div>
                 
                  </form>
               </div>
               </div>
               </div>
               <div class="col-2"></div>



</body>
</html>