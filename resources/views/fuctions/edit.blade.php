@extends('layout.layout')

@section('title', 'Agregar Funcion')

@section('content')


    <div class="row">

        <h3>Formulario para agregar funciones </h3>
        <div class="col-sm-2">
            <a href="{{ route('fuctions.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>


    <br>
    <div class="jumbotron">
        <br>
        <form method="post" action="{{ route('fuctions.store') }}">
            @csrf
            <div>
                <label for="">Fecha</label>
                <input class="form-control" type="text" name="start" id="" required maxlength="6">
            </div>
            <div>
                <label for="">Hora</label>
                <select required name="end" id="">
                    <option value="">Selecciona una hora</option>
                    <option value="1:00">1:00</option>
                    <option value="1:30">1:30</option>
                    <option value="2:00">2:00</option>
                    <option value="2:30">2:30</option>
                    <option value="3:00">3:00</option>
                    <option value="3:30">3:30</option>
                    <option value="4:00">4:00</option>
                    <option value="4:30">4:30</option>
                    <option value="5:00">5:00</option>
                    <option value="5:30">5:30</option>
                    <option value="6:00">6:00</option>
                    <option value="6:30">6:30</option>
                    <option value="7:00">7:00</option>
                    <option value="7:30">7:30</option>
                    <option value="8:00">8:00</option>
                    <option value="8:30">8:30</option>
                    <option value="9:00">9:00</option>
                    <option value="9:30">9:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>

                </select>
            </div>
                
            <div>
                <label for="">Lugares disponibles</label>
                <select required name="aviable" id="">
                    <option value="">Selecciona un lugar</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                    <option value="I">I</option>
                    <option value="J">J</option>

                </select>
            </div>

            <div>
                <label for="">Turno</label>
                <select required name="type" id="">
                    <option value="">Selecciona un turno</option>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                </select>
            </div>

            <br>
            <br>
            <input class="btn btn-primary" type="submit" value="Guardar">


        </form>
    </div>
@endsection