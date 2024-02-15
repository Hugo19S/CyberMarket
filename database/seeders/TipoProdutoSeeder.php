<?php

namespace Database\Seeders;

use App\Models\TipoProduto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoProduto::create([
            'categoria_id' => 2,
            'nome_tipo_produto' => 'Desktop de Alta Performance',
        ]);

        TipoProduto::create([
            'categoria_id' => 2,
            'nome_tipo_produto' => 'Desktop para Uso Doméstico',
        ]);

        TipoProduto::create([
            'categoria_id' => 2,
            'nome_tipo_produto' => 'Desktop para Design Gráfico',
        ]);

        TipoProduto::create([
            'categoria_id' => 2,
            'nome_tipo_produto' => 'Desktop de Baixo Custo',
        ]);


        //Laptops
        TipoProduto::create([
            'categoria_id' => 1,
            'nome_tipo_produto' => 'Notebook Leve e Portátil',
        ]);

        TipoProduto::create([
            'categoria_id' => 1,
            'nome_tipo_produto' => 'Notebook Conversível (2 em 1)',
        ]);


        // Para a categoria 'Impressoras'
        TipoProduto::create([
            'categoria_id' => 3,
            'nome_tipo_produto' => 'Impressora Laser Monocromática',
        ]);

        TipoProduto::create([
            'categoria_id' => 3,
            'nome_tipo_produto' => 'Impressora Jato de Tinta Colorida',
        ]);

        TipoProduto::create([
            'categoria_id' => 3,
            'nome_tipo_produto' => 'Impressora Multifuncional Wi-Fi',
        ]);

        TipoProduto::create([
            'categoria_id' => 3,
            'nome_tipo_produto' => 'Impressora de Etiquetas para Negócios',
        ]);

        // Para a categoria 'Monitores'
        TipoProduto::create([
            'categoria_id' => 4,
            'nome_tipo_produto' => 'Monitor LED Full HD',
        ]);

        TipoProduto::create([
            'categoria_id' => 4,
            'nome_tipo_produto' => 'Monitor Ultrawide Curvo',
        ]);

        TipoProduto::create([
            'categoria_id' => 4,
            'nome_tipo_produto' => 'Monitor 4K para Edição de Vídeo',
        ]);

        TipoProduto::create([
            'categoria_id' => 4,
            'nome_tipo_produto' => 'Monitor Curvo para Jogos',
        ]);
    }
}
