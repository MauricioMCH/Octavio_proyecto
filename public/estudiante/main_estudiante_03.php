<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">    
    <meta name="author" content="Innoweb - Peterson F.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/jumbotron.css" rel="stylesheet">

  </head>

  <body>
  
  <style>
body {
  background-image: url('../imagenes/fondo_index.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<br>


  <div class="container" style="width: 80rem;">
   <h1 class="formuh1">Main_estudiante_03</h1>
   <!--la propiedad enctype permite el envío de archivos adjuntos en el formulario. -->    
    <form id="form1" class="well col-lg-12" action="enviar.php" method="post" name="form1" enctype="multipart/form-data">
      <div class="row" >
       <div class="col-lg-12">
         

        <label>Proyecto</label> 
        
  <a href="#">
<img src="../imagenes/baucher.png" style="height: 50px;"/>
</a>
        <input  id="Nombre" class="form-control" type="text" name="Nombre" />
<br><br>

<div class="col-lg-14">
<div class="row">
<label>Cronograma</label> 
<div class="col-xs-3" style="margin:-5px 0px 0px 5px;">
    <input type="text" class="form-control" >
  </div>
</div>

<div  style="margin:10px 0px 0px 75px;" >
<table class="table table-striped table-bordered" style="width: 195px;">
 
  <tbody>

    <tr>
    <td >1</td>  

      <td ><input  id="Nombre" class="form-control" type="text" name="Nombre" /></td>  
</tr>
<tr>
    <td >2</td>  

      <td ><input  id="Nombre" class="form-control" type="text" name="Nombre" /></td>  
</tr>
<tr>
    <td >3</td>  

      <td ><input  id="Nombre" class="form-control" type="text" name="Nombre" /></td>  
</tr>
<tr>
    <td >4</td>  

      <td ><input  id="Nombre" class="form-control" type="text" name="Nombre" /></td>  
</tr>
  </tbody>
</table>



<label>Compromisos adquiridos</label> 

<div  style="margin:10px 0px 0px 0px;" >
<table class="table table-striped table-bordered" style="width: 650px;">
<thead class="thead-dark">
    <tr>

      <th scope="col">Actividad</th>
      <th scope="col">C</th>
      <th scope="col">R</th>
      <th scope="col">Evidencias</th>
    </tr>
  </thead>
  <tbody>

    <tr>
    <td >Articulos JCR sometidos</td>  
      <td >2</td>  
      <td >1</td>  
      <td ><a class = "btn btn-success "  href="#" role = "button">Subir</a>
</td>  
</tr>

<tr>
    <td >Articulos JCR aceptados</td>  
      <td >1</td>  
      <td >1</td>  
      <td ><a class = "btn btn-success "  href="#" role = "button">Subir</a>
</td>  
</tr>

<tr>
    <td >Conferencias nacionales</td>  
      <td >3</td>  
      <td >2</td>  
      <td ><a class = "btn btn-success "  href="#" role = "button">Subir</a>
</td>  
</tr>

  </tbody>
</table>



<label>Protocolo</label> 
<table class="table table-striped table-bordered" style="width: 540px;">
<tbody>
<tr>
  <td ><a class = "btn btn-success "  href="#" role = "button">Subir</a>
</td>  
</div>
  
    </form>
    
    
  <br>

</div>

  </body>
  
</html>