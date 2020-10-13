@extends('layout.layout')

@section('name', 'Peliculas')

@section('content')

    <div class="row">

        <div class="col-sm-2">
            <a href="{{ route('movies.create') }}">
                <button class="btn btn-primary">Agregar</button>
            </a>
        </div>
        <div class="col-sm-10">
            <h1>Películas</h1>
        </div>

    </div>


    @forelse($movies as $movie)

        <!-- <div class="row">-->
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->name }}</h5>
                <h6 class="card-title">{{ $movie->director }}</h6>
                <p class="card-text">{{ $movie->synopsis }}</p>
                <p class="card-text text-muted"> Duracion:{{ $movie->duracion }}</p>


                <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                    <a href="{{ route('movies.show', $movie->id) }}">Ver</a>
                    <a href="{{ route('movies.edit', $movie->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Eliminar</button>
                </form>
            </div>
        </div>
    @empty
        <h1>No hay peliculas en este momento</h1>

    @endforelse

    {{ $movies->links() }}


@endsection
