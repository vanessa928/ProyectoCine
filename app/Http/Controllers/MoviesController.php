<?php

namespace App\Http\Controllers;

use App\movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Almacenar todos los datos o todos los registros de la
        //tabla movies en una variable
        //print('Index de moviesController');
        //$movies =Movies::all();
        $movies = DB::table('movies')->paginate(1);
        //retornar una vista*
        return view('movies.index', compact('movies'));
        //return view('movies.viewTable', compact('movies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Movies::create($request->all());
        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function show(movies $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function edit(movies $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, movies $movies)
    {
        $request->validate(
            [
                'name' => 'required',
                'synopsis' => '',
                'category' => 'required',
                'director' => 'required',
                'duracion' => 'required',
                'actors' => 'required',
                'genre' => 'required'
            ]
        );

        $movies->update($request->all());

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function destroy(movies $movies)
    {
        $movies->delete();
        return redirect()->route('movies.index');
    }
    //crear funcion para vista en forma tabular
    public function viewTable()
    {
        $movies = DB::table('movies')->paginate(10);
        return view('movies.viewTable', compact('movies'));
    }
}
