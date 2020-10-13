@extends('layout.layout')

@section('title', 'Ver detalles de la funcion')

@section('content')



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

@endsection
