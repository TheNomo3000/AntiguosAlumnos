<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/app.css">
        <title>A.Alumnos</title>
    </head>
    <body>
    <table class="table">
        <tbody>
            <tr>
                <td>Nombre</td>
                <td>Abreviatura</td>
            </tr>
        </tbody>
        @foreach($estudios as $estudio)
            <tr>
                <td>{{$estudio->nombre}}</td>
                <td>{{$estudio->abreviatura}}</td>
            </tr>
        @endforeach
    </table>
    </body>
</html>