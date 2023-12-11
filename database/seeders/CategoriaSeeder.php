<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Categoria::create(['nome_categoria' => 'Laptops']);
        Categoria::create(['nome_categoria' => 'Desktops']);
        Categoria::create(['nome_categoria' => 'Impressoras']);
        Categoria::create(['nome_categoria' => 'Monitores']);

    }
}
