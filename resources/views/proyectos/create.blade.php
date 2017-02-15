@extends('layouts.app')

@section('content')

    <div class="container container-page">
        <div class="row">
            <div class="col-lg-12">

                <h3>Crear Proyecto</h3>

                <form action="{{route('proyectos.store')}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="nombre">Nombre del proyecto</label>
                        <input id="nombre" type="text" name="nombre">
                    </div>

                    <div class="form-group">
                        <label for="configuracion">Configuracion</label>
                        <textarea id="configuracion" name="configuracion" class="form-control"></textarea>
                    </div>

                    <input type="submit" value="Crear" class="btn btn-success">

                </form>

            </div>
        </div>
    </div>

@endsection