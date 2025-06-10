@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div style="width:40%; margin-left: auto; margin-right: auto;">
                <form action={{ route('site.login') }} method="post">
                    @csrf
                    <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário" class="borda-preta">
                    {{ $errors->has('usuario') ? $errors->first('usuario') : ''}}
                    
                    <input name="senha" value="{{ old('senha') }}" type="passwaord" placeholder="Senha" class="borda-preta">
                    {{ $errors->has('senha') ? $errors->first('usuario') : ''}}

                    <button type="submit" class="borda-preta">Acessar</button>
                </form>
                {{isset($erro) && $erro != '' ? $erro : ''}}
            </div>
        </div>  
    </div>
@endsection