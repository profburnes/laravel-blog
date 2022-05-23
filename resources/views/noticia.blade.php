@extends('layout.template')
@section('titulo','Notícia')
@section('conteudo')
    <img src="imagens/{{$noticia->imagem}}" alt="{{$noticia->titulo}}" class="w-100">
    <h1>{{$noticia->titulo}}</h1>
    <p>Postado em: {{$noticia->data1}} / {{$noticia->categoria}}</p>
    <p>
        {{$noticia->noticia}}
    </p>
@endsection