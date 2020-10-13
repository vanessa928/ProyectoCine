@extends('layout.layout')

@section('title', 'Ver detalles de la sala')

@section('content')



    <!-- <div class="row">-->
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $room->chairs }}</h5>
                <h6 class="card-title">{{ $room->location }}</h6>
                <p class="card-text">{{ $room->capacity }}</p>
                
                <form action="{{ route('rooms.destroy', $room->id) }}" method="post">
                    <a href="{{ route('rooms.show', $room->id) }}">Ver</a>
                    <a href="{{ route('rooms.edit', $room->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Eliminar</button>
                </form>
            </div>
        </div>


@endsection
