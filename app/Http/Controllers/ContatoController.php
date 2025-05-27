<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivo_contato = MotivoContato::all();

        return view('site.contato', ['motivo_contato' => $motivo_contato]);
    }

    public function salvar(Request $request) {

        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            'nome.required' => 'Nome não informado',
            'nome.min' => 'O nome precisa ter mais que 3 caracteres',
            'nome.max' => 'O nome precisa ter menos que 40 caracteres',
            'nome.unique' => 'Nome informado ja existe',
            'telefone.required' => 'Telefone não informado',
            'email.email' => 'E-mail não informado',
            'motivo_contatos_id.required' => 'Motivo não informado',
            'mensagem.required' => 'Mensagem não informada',
            'mensagem.max' => 'A mensagem precisa ter menos que 2000 caracteres'
        ]; 

        $request->validate($regras, $feedback);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
