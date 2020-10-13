  @extends('layout.layout')
  @section('title', 'Peliculas')
  @section('content')



      <table class="table">
          <thead>
              <tr>
                  <th scope="col">Titulo</th>
                  <th scope="col">Duracion</th>
                  <th scope="col">Sinopsis</th>
                  <th scope="col">Acciones</th>

              </tr>
          </thead>
          <tbody>
              @forelse($movies as $movies)
                  <tr>
                      <th scope="row">{{ $movies->name }}</th>
                      <td>{{ $movies->duracion }}</td>
                      <td>{{ $movies->synopsis }}</td>
                      <td>
                          <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">

                              <form action="{{ route('movies.destroy', $movies->id) }}" method="post">
                                  <a class="btn btn-secondary" href="{{ route('movies.show', $movies->id) }}">Ver</a>
                                  <a class="btn btn-secondary" href="{{ route('movies.edit', $movies->id) }}">Editar</a>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Eliminar</button>
                              </form>
                          </div>

                      </td>
                  </tr>


              @empty
                  <h3>No hay datos</h3>
              @endforelse
          </tbody>
      </table>


  @endsection
