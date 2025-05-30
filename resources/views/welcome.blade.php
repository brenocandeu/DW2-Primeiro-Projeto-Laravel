@extends('layouts.main')
@section('title', 'HDC Events')

@section('content')
    <img src="/imgs/banner.jpg" alt="">
    <h1>Usando IF: </h1>
    @if (10 > 5)
        <p>True</p>
    @endif
    <hr>

    <p>Imprimindo nome através de uma variável {{ $nome }}</p>
    <hr>

    <h1>Usando IF, ELSEIF e ELSE: </h1>
    @if ($nome === 'Pedro')
        <p>O nome é Pedro</p>
    @elseif($nome === 'Breno')
        <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos.</p>
    @else
        <p>O nome não é Pedro</p>
    @endif
    <hr>

    <h1>Usando FOR: </h1>
    @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>
        @if ($i == 2)
            <p>O i é igual a 2</p>
        @endif
    @endfor
    <hr>

    <h1>Usando FOREACH: </h1>
    @foreach ($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
    @endforeach
    <hr>

    <h1>Usando PHP: </h1>
    @php
        $name = 'João';
        echo $name;
    @endphp
    <hr>

    <!-- Comentario HTML -->
    {{-- Comentario do Blade --}}
@endsection
