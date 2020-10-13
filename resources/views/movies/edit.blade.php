@extends('layout.layout')

@section('title', 'Editar Peliculas')

@section('content')

    <div class="row">
        <div class="col-sm-10">
            <h1>Agregar película</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('movies.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>

    <div class="jumbotron">
        <form method="post" action="{{ route('movies.update', $movie->id) }}">
            @csrf
            @method('PUT')

            <div>
                <label for="">Película:</label>
                <input class="form-control" type="text" value="{{ $movie->name }}" name="name" id="" required
                    maxlength="100">
            </div>
            <div>
                <label for="">Sinopsis:</label>
                <textarea class="form-control" name="synopsis" id="" cols="30" rows="5">{{ $movie->synopsis }}</textarea>
            </div>
            <div>
                <label for="">Categoría</label>
                <!-- <input type="text" name="category" id="" maxlength="50" required> -->
                <select class="form-control" name="category" id="" required>
                    <option value="{{ $movie->category }}">{{ $movie->category }}</option>
                    <option value="">Elija una categoría</option>
                    <option value="Estrenos">Estrenos</option>
                    <option value="Triologias">Triologias</option>
                    <option value="Las mas vistas">Las mas vistas</option>
                </select>
            </div>

            <div>
                <label for="">Director:</label>
                <input class="form-control" type="text" value="{{ $movie->director }}" name="director" id="" required
                    maxlength="100">
            </div>
    </div>
    <div>
        <label for="">Duración:</label>
        <input class="form-control" type="text" value="{{ $movie->duration }}" name="duration" id="" required
            maxlength="30">
    </div>

    <div>
        <label for="">Género:</label>
        <select class="form-control" name="genre" id="" required>
            <option value="{{ $movie->genre }}">{{ $movie->genre }}</option>
            <option value="">Selecciona un genero</option>
            <option value="Terror">Terror</option>
            <option value="Accion">Acción</option>
            <option value="Fantasia">Fantasia</option>
            <option value="Infantil">Infantil</option>
            <option value="Ciencia Ficción">Ciencia Ficción</option>
        </select>
    </div>
    <br>
    <br>
    <input class="btn btn-primary" type="submit" value="Guardar cambios">


    </form>
    </div>

@endsection
