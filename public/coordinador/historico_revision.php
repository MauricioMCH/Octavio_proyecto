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


  <div class="container" style="width: 70rem;">
   <h1 class="formuh1">Historico_01</h1>
   <!--la propiedad enctype permite el envío de archivos adjuntos en el formulario. -->    
    <form id="form1" class="well col-lg-12" action="enviar.php" method="post" name="form1" enctype="multipart/form-data">
      <div class="row" >
       <div class="col-lg-12">
         

        <label>Proyecto</label> 
        <input  id="Nombre" class="form-control" type="text" name="Nombre" />
        <br><br>
    
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>

      <th scope="col">Criterio</th>
      <th scope="col">Rev 1</th>
      <th scope="col">Rev 2</th>
      <th scope="col">Rev 3</th>
      <th scope="col">Rev 4</th>
      <th scope="col">Rev 5</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
<td>Estructura</td>
<td>10</td>
<td>8</td>
<td>9</td>
<td>9</td>
<td>8</td>
</tr>
<tr>
<td>Nivel</td>
<td>9</td>
<td>7</td>
<td>10</td>
<td>8</td>
<td>10</td>
</tr>
<tr>
<td>Apresiacion</td>
<td>9</td>
<td>8</td>
<td>10</td>
<td>9</td>
<td>8</td>
</tr>
<tr>
<td>Claridad</td>
<td>9</td>
<td>7</td>
<td>10</td>
<td>9</td>
<td>9</td>
</tr>
<tr>
<td>Correlacion</td>
<td>9</td>
<td>8</td>
<td>9</td>
<td>9</td>
<td>9</td>
</tr>
<tr>
<td>Promedio</td>
<td>9.8</td>
<td>7.9</td>
<td>10</td>
<td>9.6</td>
<td>9.8</td>
<td>9.8</td>
</tr>
</tbody>
</table>

<br>
<div>
<label>OBSERVACIONES</label> </div>
<label>Revisor 1</label> 
<textarea id="Mensaje" class="form-control" name="Mensaje" rows="4"></textarea>
<br>
<label>Revisor 2</label> 
<textarea id="Mensaje" class="form-control" name="Mensaje" rows="4"></textarea>
<br>

<div  style="margin:0px 0px 0px 550px;" >

<a class = "btn btn-primary"  href="#" role = "button">Regresar</a>
</div>


    </form>
  <br>

</div>


  </body>
</html>