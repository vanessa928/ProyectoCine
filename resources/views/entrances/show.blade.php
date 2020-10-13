@extends('layout.layout')

@section('title', 'Ver detalles de la entrada')

@section('content')



    <!-- <div class="row">-->
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $entrance->price }}</h5>
                <h6 class="card-title">{{ $entrance->hourEntrance }}</h6>

                <form action="{{ route('entrances.destroy', $entrance->id) }}" method="post">
                    <a href="{{ route('entrances.show', $entrance->id) }}">Ver</a>
                    <a href="{{ route('entrances.edit', $entrance->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Eliminar</button>
                </form>
            </div>
        </div>

@endsection
