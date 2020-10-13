@extends('layout.layout')
@section('content')

    <form action="{{ route('consumables.index') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-md">
                <label for="">Articulo</label>
                <input class="form-control" type="text" name="name" id="">
            </div>
            <div>
                <label for="">Precio:</label>
                <textarea class="form-control" name="text" id="" cols="30" rows="1">{{ $consumable->price }}</textarea>
            </div>
            <div>
                <label for="">Cantidad</label>
                <!-- <input type="text" name="category" id="" maxlength="50" required> -->
                <select class="form-control" name="quantity" id="" required>
                    <option value="{{ $consumable->quantity }}">{{ $consumable->quantity }}</option>
                    <option value="">Elija una cantidad</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>


            <div class="text-center">
                <input class="btn btn-primary" type="submit" value="Cambios Guardar">

            </div>

        @endsection
