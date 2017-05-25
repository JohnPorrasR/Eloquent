@extends('layout')

@section('content')
    <h1 class="page-header">
        {{ $title  }}
    </h1>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Genero</th>
            <th>Biografi</th>
        </tr>
        </thead>
        <tbody>
            @include('query.partials.list-users')
        </tbody>
    </table>
@stop