@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjetas Horizontales</title>
    <style>
        
.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 10px;
    float: left;
}
.cardi{
    width: 600px;
    flex-direction: right;
    float: right;
}

.card {
    width: 552px;
    margin: 80px;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: left;
}

.card img {
    width: 552px; /* ajusta el tamaño de la imagen según sea necesario */
    height: 722px;
    object-fit: cover; /* para asegurar que la imagen no se deforme */
}

.card-content {
    padding: 40px;
    padding-left: 80px;
}

.card-title {
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 8px;
}
.card-tiempo{
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 8px;
}

.card-description {
    font-size: 30px;
    color: black;
}
.card-titulos{
    text-align: center;
}
/*number input*/
.list-group-item {
            border: none;
        }
        input {
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 10px;

        }    
        .espacio{
            margin-left: 40px;

        }    
        .espi{
            margin-right: 40px;
        }
    </style>

</div>
    <div class="card-container">
        <div class="card">
            <img src="images/p4.jpg" alt="Imagen 1">
            <div class="card-content">
            </div>
        </div>
    </div>

    
            <div class="card-content">
                <br>
                <br>
                <div class="card-title">Pastel Aleman<br></div>
                <div clas="card-tiempo"><h4>Tiempo 20-25mn</h4></div>
                <div class="card-description">pastel de chocolate<br>$530<br><br><br></div>
    <h1>Ingredientes/Extras</h1>            
    <ul class="list-group">
    <li class="list-group-item">
        <input class="form-check-input espi" type="checkbox" value="" aria-label="..." >
        cubiertos   <input class="espacio" type="number" id="quantity" name="quantity" min="1" max="10" value="1">
        
    </li>
    <li class="list-group-item">
        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
        vela
    </li>

            </div>    

            <button type="button" class="btn btn-outline-danger">Agregar pedido $530</button>
        

</body>
</html>




@endsection