<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Muestra de Show o Otro</h1>
    @if($nombreusuario)
    <h2>Hola usuario este es tu id: {{$Idusuario}} y Nombre {{$nombreusuario}}</h2>
    @else
    <h2>Hola usuario este es tu id: {{$Idusuario}}</h2>
    @endif

</body>
</html>