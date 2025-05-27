<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;

class PrincipalController extends Controller
{
    public function Principal() {
        
        $motivo_contato = MotivoContato::all();
        
        return view('site.principal', ['motivo_contato' => $motivo_contato]);
    }
}
