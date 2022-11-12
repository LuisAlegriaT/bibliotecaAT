@extends('base')
@section('content')
    <h1>Registrar Libro</h1>

    @if (session()->has('validado'))
        <br>
        <div class="alert alert-success" role="alert">
            ¡Libro Registrado Correctamente!
        </div>      
    @endif

    <form method="POST" action="registerBook">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <input type="text" placeholder="ISBN" name="txtISBN" value="{{old('txtISBN')}}">
                    <p class="text-primary fst-italic"> {{ $errors->first('txtISBN')}}</p>
                </div>
                <div class="col mt-5">
                    <input type="text" placeholder="Titulo" name="txtTitulo" value="{{old('txtTitulo')}}">
                    <p class="text-primary fst-italic"> {{ $errors->first('txtTitulo')}}</p>
                </div>
                <div class="col mt-5">
                    <input type="text" placeholder="Nombre del Autor" name="txtAutor" value="{{old('txtAutor')}}">
                    <p class="text-primary fst-italic"> {{ $errors->first('txtAutor')}}</p>
                </div>
            </div>

            <div class="row">
                    <div class="col my-2">
                        <input type="text" placeholder="No. Paginas" name="txtPaginas" value="{{old('txtPaginas')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtPaginas')}}</p>
                    </div>
                    <div class="col my-2">
                        <input type="text" placeholder="Editorial" name="txtEditorial" value="{{old('txtEditorial')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtEditorial')}}</p>
                    </div>
                    <div class="col my-2">
                        <input type="text" placeholder="Email Editorial" name="txtEmail" value="{{old('txtEmail')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtEmail')}}</p>
                    </div>
            </div>
            <div class="mt-3">
                <button type="submit">Registrar Libro</button>
            </div>
        </div>
    </form>
@endsection