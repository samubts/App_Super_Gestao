@extends('site.layouts.basico')

@section('titulo', 'Contato')

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contato', ['classe' => 'borda-preta', 'motivo_contato' => $motivo_contato])
                    <p>A nossa equipe analisará a sua mensagem e retornara o mais breve possível</p>
                    <p>Nosso tempo médio de resposta é de 48hs</p>
                @endcomponent
            </div>
        </div>  
    </div>
@endsection