<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 
            'status' => 'S', 
            'cnpj' => '000',
            'ddd' => '11',
            'telefone' => '9999-9999'
        ],
        1 => ['nome' => 'Fornecedor 2', 
            'status' => 'S', 
            'cnpj' => null, 
            'ddd' => '85',
            'telefone' => '9999-9999'
        ],
        2 => ['nome' => 'Fornecedor 3', 
            'status' => 'S', 
            'cnpj' => null, 
            'ddd' => '32',
            'telefone' => '9999-9999'
        ]
    ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
