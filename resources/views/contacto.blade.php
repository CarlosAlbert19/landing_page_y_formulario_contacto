<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Contacto</h1><br>

    <form id="formulario" action="/recibe-form-contacto" method="POST">
        @csrf
        <label for="name"> <h3>Nombre</h3>  
            <input id="name" value='{{$nombre}}' type="text" name="nombre"> 
        </label>
        @error('nombre')
            <i> {{$message}} </i>
        @enderror
        <br>

        <label for="mail"> <h3>Correo</h3>
            <input id="mail" value='{{$correo}}' type="email" name="correo">
        </label> 
        @error('correo')
            <i> {{$message}} </i>
        @enderror
        <br>

        <!--Pregunta: en la parte de los values de nombre y correo, los dejamos para que reciban el
        nombre o correo del código 1234 o lo cambiamos para que muestre el old input -->
        <label for="comment"> <h3>Comentario</h3><br>
            <textarea id="comment" type="text box" name="comentario" cols="30" rows="5">{{ old('comentario')}}</textarea>
        </label> 
        @error('comentario')
            <i> {{$message}} </i>
        @enderror
        <br>

        <input type="submit" value="Enviar">
    </form>

    
</body>
</html>