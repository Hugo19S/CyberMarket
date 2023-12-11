<?php

namespace Database\Seeders;

use App\Models\Fabricante;
use App\Models\TipoPagamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoPagamento::create(['nome_tipo_pagamento' => 'Transferência Bancária']);
        TipoPagamento::create(['nome_tipo_pagamento' => 'MB WAY']);
        TipoPagamento::create(['nome_tipo_pagamento' => 'Cartão de Crédito/Débito']);
    }
}
