<h3>Fornecedor</h3>

@php
    
@endphp

@isset($fornecedores)
    @forelse ($fornecedores as $indice => $fornecedor)
        Iteração atual:{{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não informado' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? 'Dado não informado' }}) 
        {{ $fornecedor['telefone'] ?? 'Dado não informado' }}
        <br>
        @if ($loop->first)
            Primeira iteração do loop
        @endif
        @if ($loop->last)
            Última iteração do loop

            <br>
            Total de registros: {{ $loop->count }}

        @endif
        <hr>
    @empty
        Não existe fornecedores cadastrados!!
    @endforelse 
@endisset
