@extends('layout')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Curso Eloquent ORM</h1>
            <p>Texto</p>
        </div>
    </div>

    <h1 class="page-header">
        Ultimos usuarios regitrado
    </h1>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Genero</th>
            <th>Biografi</th>
            <th>   </th>
        </tr>
        </thead>
        <tbody>
        @include('query.partials.list-users')
        </tbody>
    </table>

@stop