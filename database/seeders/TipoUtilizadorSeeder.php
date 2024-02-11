<?php

namespace Database\Seeders;

use App\Models\TipoUtilizador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoUtilizadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoUtilizador::create(['tipo_utilizador' => 'cliente']);
        TipoUtilizador::create(['tipo_utilizador' => 'administrador']);
    }
}
