
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
   
   <div class = "container">
   <div class="text-white text-center py-5 px-4">


      <h1  >Lista de proyectos</h1>
    
         <a class = "btn btn-primary btn-lg"  href="index.php" role = "button">Regresar</a>
      </p>
   </div>
</div>



<br>

<div class="container">
<div class="mx-auto" style="width: 800px;">
<a href="agregar_proyecto.php" class="btn btn-info btn-lg btn-block"  >AGREGAR PROYECTO</a>


<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>

      <th scope="col">Proyecto</th>
      <th scope="col">Estudiante</th>
      <th scope="col">Asesor</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>

    <tr>

      <td>1</td>
      <td>Hugo</td>
      <td>Jorge</td>

      <td><a href="editar_proyecto.php" type="button" class="btn btn-success">EDITAR</a>
      <a href="mostrar_proyecto.php" class="btn btn-warning">MOSTRAR</a>
<button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar?');">ELIMINAR</button></td>
    </tr>
    <tr>

<td>2</td>
<td>Paco</td>
<td>Hector</td>

<td><a href="editar_proyecto.php" type="button" class="btn btn-success">EDITAR</a>
<a href="#" class="btn btn-warning">MOSTRAR</a>
<button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar?');">ELIMINAR</button></td>
</tr>

<tr>

<td>3</td>
<td>Luis</td>
<td>Juan Francisco</td>

<td><a href="editar_proyecto.php" type="button" class="btn btn-success">EDITAR</a>
<a href="#" class="btn btn-warning">MOSTRAR</a>
<button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar?');">ELIMINAR</button></td>
</tr>

<tr>

<td>4</td>
<td>3</td>
<td>Rocio</td>

<td><a href="editar_proyecto.php" type="button" class="btn btn-success">EDITAR</a>
<a href="#" class="btn btn-warning">MOSTRAR</a>
<button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar?');">ELIMINAR</button></td>
</tr>


  </tbody>
</table>


</html>


