@extends('default')
@section('content')
    <h1>Pacientes</h1>
    <table class="table table-stripted">
        <tr>
            <th>Paciente</th>
            <th>fecha</th>
            <th>accion</th>
            <th></th>
        </tr>
        <tr>
            <th>Juanito peres</th>
            <th>10-10-2020</th>
            <th>
                <a href="diagnostico" class="btn btn-primary"> ver </a>
            </th>
        </tr>
    </table>
@endsection