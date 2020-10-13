@extends('layout.layout')

@section('name', 'Fuction')

@section('content')

    <div class="row">

        <div class="col-sm-2">
            <a href="{{ route('fuctions.create') }}">
                <button class="btn btn-primary">Agregar</button>
            </a>
        </div>
        <div class="col-sm-10">
            <h1>Funciones</h1>
        </div>

    </div>


    @forelse($fuctions as $fuction)

        <!-- <div class="row">-->
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $fuction->start }}</h5>
                <h6 class="card-text">{{ $fuction->end }}</h6>
                <p class="card-text">{{ $fuction->aviable }}</p>
                <p class="card-text">{{ $fuction->type }}</p>
                
                <form action="{{ route('fuctions.destroy', $fuction->id) }}" method="post">
                    <a href="{{ route('fuctions.show', $fuction->id) }}">Ver</a>
                    <a href="{{ route('fuctions.edit', $fuction->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Eliminar</button>
                </form>
            </div>
        </div>
    @empty
        <h3>No hay funciones disponibles en este momento</h3>

    @endforelse

    {{ $rooms->links() }}


@endsection