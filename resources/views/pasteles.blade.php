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
            <img src="images/p2.jpg" alt="Imagen 1">
            <div class="card-content">
                <div class="card-title">Pastel de chocolate</div>
                <div class="card-description">Pastel de chocolate<br>$450<br>Tiempo 20-35mn<br><br>Alquimia Cakes Durango</div>
            </div>
        </div>

        <div class="card">
            <img src="images/p3.jpg" alt="Imagen 2">
            <div class="card-content">
                <div class="card-title">Pastel</div>
                <div class="card-description">pastel clasico<br>$420<br>Tiempo 15-20mn<br><br>Cross</div>
            </div>
        </div>
        
    </div>
    <div class="card-container">
        <div class="card">
            <img src="images/p4.jpg" alt="Imagen 1">
            <div class="card-content">
                <div class="card-title">pastel Aleman</div>
                <div class="card-description">pastel de chocolate, con una cubierta de coco<br>$450<br>tiwmpo 15-20mn<br><br>Monchis</div>
                <a href="descripcion"><button type="button" class="btn btn-outline-danger">Danger</button>
                </a>
            </div>
        </div>

        <div class="card">
            <img src="images/p5.jpg" alt="Imagen 2">
            <div class="card-content">
                <div class="card-title">Choreado de piña</div>
                <div class="card-description">pastel de vainilla<br> con un logero betun sabor a limon con sus centro de piña<br>$320<br>Tiempo 15-20mn<br><br>Monchis</div>
            </div>
        </div>
    

</body>
</html>




@endsection