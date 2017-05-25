@extends('layout')

@section('content')
    <div class="container">
        <h1>First last</h1>
        <p>{{ $first->id }}</p>
        <p>{{ $first->name }}</p>
        <h1>First last</h1>
        <p>{{ $last->id }}</p>
        <p>{{ $last->name }}</p>
    </div>
@stop