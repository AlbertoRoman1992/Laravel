@extends('layouts.app')

@section('content')

    <div class="container container-page">
        <div class="row">
            <div class="col-lg-12">

                <h3>Mis proyectos de {{$user->name}}</h3>

                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Proyecto</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($proyectos as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->nombre}}</td>
                            <td>
                                <a class="btn btn-primary btn-xs"
                                    href="{{route('proyectos.show', $p->id)}}">
                                    Ver
                                </a>
                            </td>
                        </tr>

                </table>

                <ul>
                    @foreach($proyectos as $p)
                        <li>{{$p->nombre}}</li>
                    @endforeach
                </ul>

                <a href="{{route('proyectos.create')}}" class="btn btn-primary">
                    nuevo proyecto
                </a>

            </div>
        </div>
    </div>

@endsection