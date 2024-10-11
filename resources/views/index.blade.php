@extends('layouts.master')
@section('content')
<section id="slider">
    <div class="slyder-container">
        <img class="w-100" src="https://placehold.jp/1666x500.png" alt="">
    </div> 
</section>
<section id="about" class="section">
    <div class="container">
        <h1 class="h3 text-center py-4 animate__animated animate__fadeInDown">ACERCA</h1>
        <div class="row">
            <div class="col-md-6 animate__animated animate__fadeInLeft">
                <p> 
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio, ullam esse cumque vel deserunt ratione voluptatem amet, sequi sed quibusdam facilis, tempore commodi. Numquam labore officiis deserunt tempore dolores est?
                </p>

            </div>
            <div class="col-md-6">
                <img class="rounde-image"   class="img-center animate__animated animate__fadeInRight"  felx-colum src="https://placehold.jp/300x300.png" alt="">

            </div>
        </div>
    </div>
</section>
<section id="services" class="section section--blue">
    <div class="container">
        <h2 class="h3 text-center py-4 animate__animated animate__fadeInDown section__title--white ">Servicios</h2>
        <div class="row ">
            <div class="col-lg-3 col-md-6">
                <img class="img-center" src="https://placehold.jp/40x40.png" alt="">
                <h5 class="h6 text-center">Lorem</h5>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt expedita architecto beatae harum repudiandae quam aliquam quos suscipit? Nam animi dolor natus quos iusto placeat laborum vitae, quae officia ut.
                </p>
            </div>
            <div class="col-lg-3 col-md-6">
            <img class="img-center" src="https://placehold.jp/40x40.png" alt="">
                <h5 class="h6 text-center">Lorem</h5>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt expedita architecto beatae harum repudiandae quam aliquam quos suscipit? Nam animi dolor natus quos iusto placeat laborum vitae, quae officia ut.
                </p>
            </div>
            <div class="col-lg-3 col-md-6">
            <img class="img-center" src="https://placehold.jp/40x40.png" alt="">
                <h5 class="h6 text-center" >Lorem</h5>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt expedita architecto beatae harum repudiandae quam aliquam quos suscipit? Nam animi dolor natus quos iusto placeat laborum vitae, quae officia ut.
                </p>
            </div>
            <div class="col-lg-3 col-md-6">
            <img class="img-center" src="https://placehold.jp/40x40.png" alt="">
                <h5 class="h6 text-center" >Lorem</h5>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt expedita architecto beatae harum repudiandae quam aliquam quos suscipit? Nam animi dolor natus quos iusto placeat laborum vitae, quae officia ut.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="concat" class="section">
    <div class="container">
        <h2 class="h3 py-4 text-center">contacto</h2>
        <div class="row">
            <div class="col">
                <form action="">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">nombre</span>
                    <input type="text" class="form-control" placeholder="nombre" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">asunto</span>
                    <input type="text" class="form-control" placeholder="asunto" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3">
                    <label class="form-label">mensaje</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button class="btn btn-success w-100">Enviar</button>

                </form>
            </div>
        </div>
    </div>

</section>
@endsection