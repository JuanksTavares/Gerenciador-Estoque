@extends('layout')

@section('cabecalho')
    Buscar Produtos Em Estoque
@endsection

@section('conteudo')
<a href="/user/adicionar" class="btn btn-dark mb-2">adicionar</a>
        
<ul class="list-group list-group-numbered">
    @foreach ($produto as $produto)
        <li class="list-group-item">{{ $produto->nome }}</li>
    @endforeach
</ul>
@endsection