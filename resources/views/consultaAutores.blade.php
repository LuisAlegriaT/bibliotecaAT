@extends('base')
@section('content')

@if (session()->has('autorActualizado'))
<br>
<div class="alert alert-success" role="alert">
    ¡Datos Actualizados Correctamente!
        </div>      
        @endif
        <h1 class="text-center">AUTORES</h1>
        
@foreach ($consultaA as $consulta)
        @include('updateAutor')
        @include('deleteAutores')
        
    <div class="container  mb-5 mt-5">
        
        <div class="card text-center">
            
            <div class="card-header bg-secondary">
                        <h5 class="text-light text-center">Autor {{$consulta->nombreAutor}}</h5>
                    </div>

                    <div class="card-body">
                        <label for="" class="text-dark">Libros publicados:</label>
                        <p class="card-title text-dark">{{$consulta->numLibros}}</p>

                        <label for="" class="text-dark">Fecha de Nacimiento:</label>
                        <p class="card-title text-dark">{{$consulta->fechaNacimiento}}</p>
                    </div>
                    
                    <div class="card-footer text-muted">

                        
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAutores{{$consulta->idAutor}}">
                            ELIMINAR
                        </button>

                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateAutor{{$consulta->idAutor}}">
                            ACTUALIZAR
                        </button>
                        
                    </div>
                </div>  
            </div>
            @endforeach
@endsection