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
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
  <style>
body {
  background-image: url('../imagenes/fondo_index.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<br>


  <div class="container" style="width: 70rem;">
   <h1 class="formuh1">Main_estudiante_02</h1>
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

<div class="col-lg-12">
<div class="row">


        <label>Compromisos</label> 
       

        <div class="col-xs-4" style="margin:-5px 0px 0px 20px;" >
    <input type="text" class="form-control"  type="text">
  </div>
  <div class="col-xs-3" style="margin:-5px 0px 0px 10px;">
    <input type="text" class="form-control" >
  </div>
  <div class="col-xs-4" style="margin:-15px 0px 0px 20px;" >
  <button class="btn"><i class="fa fa-plus"></i></button>
  </div>


  <div class="col-xs-4" style="margin:20px 0px 0px 115px;" >
    <input type="text" class="form-control"  type="text">
    <input type="text" class="form-control"  type="text">
  </div> 
</div>
<br>

<div class="col-lg-12">
<div class="row">
<label>Cronograma</label> 
<div class="col-xs-3" style="margin:-5px 0px 0px 17px;">
    <input type="text" class="form-control" >
  </div>
  <div class="col-xs-4" style="margin:-15px 0px 0px 20px;" >
  <button class="btn"><i class="fa fa-plus"></i></button>
  </div>
</div>

<div  style="margin:10px 0px 0px 85px;" >
<table class="table table-striped table-bordered" style="width: 260px;">
 
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
  </tbody>
</table>



<div style="margin: 0px 0px 0px 350px;">
<a class = "btn btn-primary "  href="#" role = "button">Someter / Modificar</a>
  </div>
  

    </form>
  <br>

</div>


  </body>
</html>