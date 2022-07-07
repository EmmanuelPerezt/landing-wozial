<?php 
    //hacemos conexion
	$conexion=mysqli_connect('localhost','emma','emma','example');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!----bootstrap--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./custom.css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
<body>



<div>
<img src="./img/header.jpg" alt="header" class="encabezado img-fluid">
<div class="d-flex justify-content-center wozial-logo ">
    <img src="./img/wozial.png" alt="logo">
</div>
<div class="d-flex justify-content-center ">
<p class="con-header">Descubre los mejores secretos <br> del marketing</p>
</div>
<div class="d-flex justify-content-center  ">


<form class="formulario ">

<p class="form-args">Aprende las 5 estrategias de <br>marketing mas efectivas</p>
<input class="form-control form-esp" type="text" placeholder="Nombre" aria-label="default input example">
<input class="form-control form-esp" type="text" placeholder="Apellido" aria-label="default input example">
<input class="form-control form-esp" type="email" placeholder="correo" aria-label="default input example">
<input class="form-control" type="text" placeholder="sitio web" aria-label="default input example">  
  
  <div class="d-flex justify-content-center btnform">
  <button type="submit" class="btn btn-primary btn-form">descarga la guia</button>
  </div>
</form>

</div>

</div>
<p style="margin-top: 200px; text-align:center; font-size:30px; font-weight: bold;">Algunos datos importantes</p>
    
    
 

    
    
    
    
    
    
    
    
<div class="d-flex justify-content-evenly">
    <?php 
		$sql="SELECT * from web_textos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
        
        


        <div style="text-align: center; max-width:200px;">
        <span class="material-symbols-outlined bg-icon " style="font-size:60px;">
        <?php echo $mostrar['logo'] ?>
        </span>
        <p class="icon-title"><?php echo $mostrar['textos'] ?></p>
        <p><?php echo $mostrar['parrafo'] ?> </p>
           </div>
        
        
        <?php 
	}
	 ?>
     </div>
     

    


     <!---footer-->
     <div class="bg-footer">
    <div class="d-flex justify-content-center p-footer">
    <div class="card bg-dark text-white m-card" style="text-align:center;">
  <img src="./img/card-image.jpg" class="card-img custom-img" alt="...">
  <div class="card-img-overlay">
  <span class="material-symbols-outlined">
     hub
    </span>
    <h5 class="card-title">Ver nuestras estrategias</h5>
    <p class="card-text">descargala guia para ver como adquirir y retener clientes.</p>
    <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-outline-light">Light</button>
    </div>  
</div>
</div>
<div class="card bg-dark text-white" style="text-align:center;">
  <img src="./img/card-image2.jpg" class="card-img custom-img" alt="...">
  <div class="card-img-overlay">
   <span class="material-symbols-outlined">
    calendar_month
   </span>
    <h5 class="card-title">Agregar una cita</h5>
    <p class="card-text">organicemos una cita para impulsar tu presencia en linea.</p>
    <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-outline-light">Light</button>
    </div>
  </div>
</div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>