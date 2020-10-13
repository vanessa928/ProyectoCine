@extends('layout.layout')

@section('title', 'Editar salas')

@section('content')

    <div class="row">
        <div class="col-sm-10">
            <h1>Agregar salas</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('rooms.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>

    <div class="jumbotron">
        <form method="post" action="{{ route('rooms.update', $room->id) }}">
            @csrf
            @method('PUT')
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
            <input class="btn btn-primary" type="submit" value="Guardar cambios">


        </form>
    </div>

@endsection
