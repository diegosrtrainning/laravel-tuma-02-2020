<?php

use App\Perfil;
use Illuminate\Database\Seeder;

class PerfisTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perfil::create(["nome"=>"Administrador"]);
        Perfil::create(["nome"=>"Gerente"]);
        Perfil::create(["nome"=>"Vendedor"]);
    }
}
