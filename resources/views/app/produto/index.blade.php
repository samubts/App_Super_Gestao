@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Listagem de produtos</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>Unidade ID</th>
                            <th>Comprimento</th>
                            <th>Altura</th>
                            <th>Largura</th>
                      
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <th>{{ $produto->nome }}</th>
                                <th>{{ $produto->descricao }}</th>
                                <th>{{ $produto->peso }}</th>
                                <th>{{ $produto->unidade_id }}</th>
                                <th>{{ $produto->itemDetalhe->comprimento ?? '' }}</th>
                                <th>{{ $produto->itemDetalhe->altura ?? '' }}</th>
                                <th>{{ $produto->itemDetalhe->largura ?? '' }}</th>
                                <th><a href="{{ route('produto.show', ['produto' => $produto->id]) }}">Visualizar</a></th>
                                <th>
                                    <form id="form_{{$produto->id}}" method="post" action="{{ route('produto.destroy', ['produto' => $produto->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#" onclick="document.getElementById('form_{{$produto->id}}').submit()">Excluir</a>
                                    </form>
                                </th>
                                <th><a href="{{ route('produto.edit', ['produto' => $produto->id]) }}">Editar</a></th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $produtos->appends($request)->links() }}

                {{ $produtos->count() }} produtos de {{ $produtos->total() }} (de {{ $produtos->firstItem() }} a {{ $produtos->lastItem() }})

            </div>
        </div>
    </div>

@endsection