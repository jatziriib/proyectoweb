@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjetas Horizontales</title>
    <link rel="stylesheet" href="public/custom.css">

    <style>
       
    </style>
</head>
<body>
    <div class="titulo py-3">
    <h1>Resultados de la busqueda</h1>
    </div>
    
        <div class="card-container">
        <div class="card">
            <img src="images/h1.jpg" alt="Imagen 1">
            <div class="card-content">
                <div class="card-title">Explosión Quesera</div>
                <div class="card-description">Hamburguesa suprema<br>tocino, queso amarillo, elote<br>$150<br>br</div>
            </div>
        </div>

        <div class="card">
            <img src="images/h2.jpg" alt="Imagen 2">
            <div class="card-content">
                <div class="card-title">Hamburguesa</div>
                <div class="card-description">Hamburguesa con doble carne y extras a elegir<br>$120<br>Tiempo 15-20mn</div>
            </div>
        </div>
        
    </div>
    <div class="card-container">
        <div class="card">
            <img src="images/h3.jpg" alt="Imagen 1">
            <div class="card-content">
                <div class="card-title">Hamburguesa de queso</div>
                <div class="card-description">Hamburguesa con doble queso amarillo, pepinillos, cebolla<br>$70<br>tiwmpo 15-20mn<br>Macdonald</div>
            </div>
        </div>

        <div class="card">
            <img src="images/h4.jpg" alt="Imagen 2">
            <div class="card-content">
                <div class="card-title">Hamburguesa doble carne</div>
                <div class="card-description">Hamburguesa con doble carne<br> pepinillos, tomate, etc.<br>$69<br>Tiempo 15-20mn<br>Macdonald</div>
            </div>
        </div>
    

</body>
</html>




@endsection