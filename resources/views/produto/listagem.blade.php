
@extends('layout.principal')

@section('conteudo')

@if(empty($produtos))
    <div class="alert alert-danger">
        Você não tem nenhum produto cadastrado.
    </div>
@else
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container-topo">
        <h1>Listagem de produtos</h1>
        <a class="btn btn-success" href="{{action('ProdutoController@relatorioPdf')}}">
                        Baixar Lista <span class="material-icons" style="color:white;">download</span>
        </a>
    </div>
    <table class="table table-striped table-hover">
        @foreach ($produtos as $p)
        <tr  class="{{$p->quantidade<=1 ? 'danger' : '' }}">
            <td>{{$p->nome}}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->quantidade}}</td>
            <td>
                <a href="/produtos/mostra/{{$p->id}}">
                    <span class="material-icons">search</span>
                </a>
            </td>
            
                <td>
                    <a href="{{action('ProdutoController@delete', $p->id)}}">
                        <span class="material-icons">delete</span>
                    </a>
                </td>
            
        </tr>

        @endforeach
    </table>
    
@endif
<!-- <h4>
<span class="label label-danger pull-right">
Um ou menos itens no estoque
</span>
</h4> -->

@if(old('nome'))
    <div class="alert alert-success">
        <strong>Sucesso!</strong>
            O produto {{ old('nome') }} foi adicionado.
    </div>
@endif
<style>
    .container-topo{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .container-topo a{
        display:flex;
        align-items: center;
        font-family: Raleway;
        font-weight: bold;
        text-decoration:none;
        color: white;
    }
</style>
@stop

