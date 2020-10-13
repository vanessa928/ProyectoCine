@extends('layout.layout')

@section('name', 'Rooms')

@section('content')

    <div class="row">

        <div class="col-sm-2">
            <a href="{{ route('rooms.create') }}">
                <button class="btn btn-primary">Agregar</button>
            </a>
        </div>
        <div class="col-sm-10">
            <h1>Salas</h1>
        </div>

    </div>


    @forelse($rooms as $room)

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
    @empty
        <h1>No hay habitaciones disponibles en este momento</h1>

    @endforelse

    {{ $rooms->links() }}


@endsection
