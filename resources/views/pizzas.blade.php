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
            <a href="descripcion"><img src="images/corleone.jpg" alt="Imagen 1"></a>
            <div class="card-content">
                <div class="card-title">Pizza bandido</div>
                <div class="card-description">pizza con tres ingredientes<br>tocino, champiñones, aceitunas<br>$350<br>Tiempo 20-30mn<br>Corleone</div>
            </div>
        </div>

        <div class="card">
            <a href="descripcion"><img src="images/bendita.jpg" alt="Imagen 2"></a>
            <div class="card-content">
                <div class="card-title">pizza</div>
                <div class="card-description">pizza rellena <br>$320<br>Tiempo 20-30mn<br>Bendita pizza</div>
            </div>
        </div>
        
    </div>
    <div class="card-container">
        <div class="card">
            <a href="descripcion"><img src="images/images.jpg" alt="Imagen 1"></a>
            <div class="card-content">
                <div class="card-title">pizza</div>
                <div class="card-description">pizza con extra queso<br>$220<br>tiwmpo 15-20mn<br>Bambinos</div>
            </div>
        </div>

        <div class="card">
            <a href="descripcion"><img src="images/pizza.jpg" alt="Imagen 2"></a>
            <div class="card-content">
                <div class="card-title">pizza hawaiana</div>
                <div class="card-description">pizza con piña, cereza, jamon<br>$230<br>Tiempo 15-20mn<br>Arizonas</div>
            </div>
        </div>

    

</body>
</html>




@endsection