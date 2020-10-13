@extends('layout.layout')

@section('title', 'Agregar Habitación')

@section('content')


    <div class="row">

        <h3>Formulario para agregar salas </h3>
        <div class="col-sm-2">
            <a href="{{ route('rooms.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>


    <br>
    <div class="jumbotron">
        <br>
        <form method="post" action="{{ route('rooms.store') }}">
            @csrf
            <div>
                <label for="">Acientos</label>
                <input class="form-control" type="text" name="chairs" id="" required maxlength="6">
            </div>
            <div>
                <label>Localización</label>
                <textarea class="form-control" placeholder="Agregue la localización de la habitación" name="location" id=""
                    cols="30" minlength="10" rows="5"></textarea>
            </div>
            <div>
                <label for="">Capacidad</label>
                <select required name="capacity" id="">
                    <option value="">Selecciona la capacidad</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

                </select>
            </div>
            <br>
            <br>
            <input class="btn btn-primary" type="submit" value="Guardar">


        </form>
    </div>
@endsection
