@extends('layout.principal')

@section('conteudo')
    <h1>Detalhes da empresa: {{$empresa->nome }}</h1>
    <ul>
        <li>Id :{{ $empresa->ID }}</li>
        <li>Nome:{{ $empresa->nome }}</li>
        <li>Descricao:{{ $empresa->Descricao }}</li>
	</ul>
@stop