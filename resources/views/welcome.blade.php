@extends('layouts.app')

@section('content')
    <h1>Laboratorio I</h1>

    <a class="nav-link" href="{{ URL::to('create') }}">Agregar Alumnos</a>

    <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Asignatura</th>
            <th>Edad</th>
        </tr>
    </thead>

    <tbody>
        @foreach($alumnos as $alumn)
        <tr>
            <td>{{ $alumn->id }}</td>
            <td>{{ $alumn->nombre }}</td>
            <td>{{ $alumn->apellido}}</td>
            <td>{{ $alumn->asignatura}}</td>
            <td>{{ $alumn->edad}}</td>
        </tr>
        @endforeach
    </tbodyt>
</table>
@endsection