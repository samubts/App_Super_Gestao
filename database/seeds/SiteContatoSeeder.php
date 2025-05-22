<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(85) 98888-7777';
        $contato->email = 'contato@sg.com';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Seja bem-vindo ao sistema Super Gestão';
        $contato->save();
        */
        factory(SiteContato::class, 100)->create();
    }
}
