<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container my-4">
<h1 style="text-align:center;">NUEVO CONTACTO</h1>
<form action="{{url('/contactos')}}" method="post">
{{csrf_field()}}
<label for="Nombre">{{'Nombre'}}</label>
<input type="text" class="form-control" name="Nombre" id="Nombre" value="">
<br>
<label for="Correo">{{'Correo'}}</label>
<input type="email" class="form-control" name="Correo" id="Correo" value="">
<br>
<label for="Telefono">{{'Telefono'}}</label>
<input type="number"  class="form-control" name="Telefono" id="Telefono" value="">
<br>
<input type="submit"  class="btn btn-success" value="Agregar">
<a class="btn btn-secondary" href="{{url('contactos')}}">Regresar</a>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>