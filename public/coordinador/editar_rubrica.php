<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<div class = "jumbotron" style="background-image: url(../imagenes/fondo_index.jpg); background-size: 100%;">


<br><br>

<div class="container" style="width: 50rem;">

   <!--la propiedad enctype permite el envío de archivos adjuntos en el formulario. -->    
    <form id="form1" class="well col-lg-12" action="enviar.php" method="post" name="form1" enctype="multipart/form-data">
      <div class="row" >
       <div class="col-lg-12">
  
  
        <label>Tipo</label> <input  id="Nombre" class="form-control" type="text" name="Nombre" />
      <br>
        <label>Criterios</label>
<table class="table table-striped ">
  <thead class="thead-white">
    <tr>

      <th scope="col">Aspecto</th>
      <th scope="col">Puntuacion</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>

    <tr>

      <td>Sin aspectos</td>
      <td></td>
      <td><a href="editar_rubrica.php" type="button" class="btn btn-success">EDITAR</a>
      <a href="#" class="btn btn-warning">UPDATE</a>
<button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar?');">ELIMINAR</button></td>
    </tr>
    <tr>

    <tr>

<td></td>
<td></td>
<td><a href="editar_rubrica.php" type="button" class="btn btn-success">EDITAR</a>
<a href="#" class="btn btn-warning">UPDATE</a>
<button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar?');">ELIMINAR</button></td>
</tr>
<tr>

<tr>

<td></td>
<td></td>
<td><a href="editar_runrica.php" type="button" class="btn btn-success">EDITAR</a>
<a href="#" class="btn btn-warning">UPDATE</a>
<button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar?');">ELIMINAR</button></td>
</tr>
<tr>

<tr>

<td></td>
<td></td>
<td><a href="editar_rubrica.php" type="button" class="btn btn-success">EDITAR</a>
<a href="#" class="btn btn-warning">UPDATE</a>
<button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar?');">ELIMINAR</button></td>
</tr>
<tr>
      
  </tbody>
</table>

<br>

  <button class="btn btn-primary  btn-lg" type="submit">Agregar criterio</button>
  
      </div></div>
      
    </form>
  <br>
  <div>


</div>
<br><br><br>

  </body>
