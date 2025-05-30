@extends('layouts.main')
@section('title', 'Produtos')

@section('content')
    <h1>Tela de Produtos</h1>
    <a href="/home">Voltar para a Home</a>
    <hr>
    @if($busca != '')
        <p>O usuario está buscando por: {{ $busca }}</p>
    @endif
@endsection