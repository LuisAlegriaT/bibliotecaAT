@extends('base')
@section('content')
    <h1>Registrar Autores</h1>

    @if (session()->has('autorRegistrado'))
        <br>
        <div class="alert alert-success" role="alert">
            ¡Autor Registrado Correctamente!
        </div>      
    @endif

    <form method="POST" action="{{route('autores.store')}}">
        @csrf
        

        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <input type="text" placeholder="Nombre" name="txtNombreAutor" value="{{old('txtNombreAutor')}}">
                    <p class="text-primary fst-italic"> {{ $errors->first('txtNombreAutor') }} </p>
                </div>
                <div class="col mt-5">
                    <input type="datetime-local" name="txtNacimientoAutor" value="{{old('txtNacimientoAutor')}}">
                    <p class="text-primary fst-italic"> {{ $errors->first('txtNacimientoAutor') }} </p>
                </div>
                <div class="col mt-5">
                    <input type="number" placeholder="No. Libros Publicados" name="NLibrosPublicados" min="0" value="{{old('NLibrosPublicados')}}">
                    <p class="text-primary fst-italic"> {{ $errors->first('NLibrosPublicados') }} </p>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit">Registrar Autor</button>
            </div>
        </div>
    </form>
@endsection