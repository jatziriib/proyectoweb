@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">   
            <div class="col">
                @if ($errors->any())
                    <ul class="mt-4 px-2 alert alert-warning">
                        @foreach ($errors->all() as $error)
                            <li> {{$error}}</li>
                        @endforeach
                    </ul>  
                    @endif      
                <form class="pt-4" method='POST' action="{{ url('crear-rol')}}">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                    <input name="nombre" type="text" class="form-control" placeholder="nombre" aria-label="nombre" aria-describedby="basic-addon1">
                </div>
                <button class="btn btn-success">agregar</button>
                </form>
            </div>
        </div>
    </div>

@endsection