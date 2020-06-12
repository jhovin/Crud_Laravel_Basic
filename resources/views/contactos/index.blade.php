<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1 style="text-align:center;">CONTACTOS</h1>
<a class="btn btn-primary" href="{{url('contactos/create')}}">Agregar</a>
<br><br>
<table class="table table-light">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>Correo</th>
            <th>TELEFONO</th>
            <th>ACCIONES</th>
        <tr>
    </thead>

    <tbody>
    @foreach($contactos as $contacto)
        <tr>
            <td>{{$loop->iteration}}</td>   
            <td>{{$contacto->Nombre}}</td>
            <td>{{$contacto->Correo}}</td>
            <td>{{$contacto->Telefono}}</td>
            <td>
            <a  class="btn btn-warning" href="{{url('/contactos/'.$contacto->id.'/edit')}}">Editar</a>
            <br>
            <br>
            <form method="post" action="{{url('/contactos/'.$contacto->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit"class="btn btn-danger" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
        </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>