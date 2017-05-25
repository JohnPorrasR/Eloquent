@extends('layout')

@section('content')
    <h1 class="page-header">
        Paginate
    </h1>
    <p>
        {{ $users->total() }} Regitros |
        Página {{ $users->currentPage() }} de {{ $users->lastPage() }}
    </p>
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
    {!! $users->render() !!}
@stop