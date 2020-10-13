@extends('layout.layout')

@section('title', 'Agregar Peliculas')

@section('content')


    <div class="row">

        <h3>Formulario para registrar nueva película</h3>
        <div class="col-sm-2">
            <a href="{{ route('movies.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>


    <br>
    <div class="jumbotron">
        <br>
        <form method="post" action="{{ route('movies.store') }}">
            @csrf
            <div>
                <label for="">Película</label>
                <input class="form-control" placeholder="Ingrese el nombre de la película" type="text" name="name" id=""
                    maxlength="200" minlength="2" required>
            </div>
            <div>
                <label>Sinopsis</label>
                <textarea class="form-control" placeholder="Agregue la sinopsis de la película" name="synopsis" id=""
                    cols="30" minlength="10" rows="5"></textarea>
            </div>
            <div>
                <label for="">Categoría</label>
                <!-- <input type="text" name="category" id="" maxlength="50" required> -->
                <select required name="category" id="">
                    <option value="">Elija una categoría</option>
                    <option value="Estrenos">Estrenos</option>
                    <option value="Triologias">Triologias</option>
                    <option value="Las mas vistas">Las mas vistas</option>
                </select>
            </div>

            <div>
                <label for="">Diretor</label>
                <input class="form-control" type="text" name="director" id="" required maxlength="100">
            </div>
            <div>
                <label for="">Duración</label>
                <input class="form-control" type="text" name="duracion" id="" required maxlength="6">
            </div>
            <div>
                <label for="">Actores:</label>
                <textarea class="form-control" name="actors" id="" cols="30" rows="5"></textarea>
            </div>
            <div>
                <label for="">Genero</label>
                <select required name="genre" id="">
                    <option value="">Selecciona un genero</option>
                    <option value="Terror">Terror</option>
                    <option value="Accion">Acción</option>
                    <option value="Fantasia">Fantasia</option>
                    <option value="Infantil">Infantil</option>
                    <option value="Ciencia Ficción">Ciencia Ficción</option>
                    <option value="Suspenso">Suspenso</option>

                </select>
            </div>
            <br>
            <br>
            <input class="btn btn-primary" type="submit" value="Guardar">


        </form>
    </div>
@endsection
