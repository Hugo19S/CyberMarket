<?php

namespace Database\Seeders;

use App\Models\Fabricante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FabricanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fabricante::create(['nome_fabricante' => 'Lenovo']);
        Fabricante::create(['nome_fabricante' => 'HP Inc.']);
        Fabricante::create(['nome_fabricante' => 'Dell Technologies']);
        Fabricante::create(['nome_fabricante' => 'Apple']);
        Fabricante::create(['nome_fabricante' => 'Acer']);
        Fabricante::create(['nome_fabricante' => 'Asus']);
        Fabricante::create(['nome_fabricante' => 'Toshiba']);
        Fabricante::create(['nome_fabricante' => 'Microsoft']);
        Fabricante::create(['nome_fabricante' => 'Fujitsu']);
        Fabricante::create(['nome_fabricante' => 'Samsung']);
        Fabricante::create(['nome_fabricante' => 'MSI']);
        Fabricante::create(['nome_fabricante' => 'Sony']);
        Fabricante::create(['nome_fabricante' => 'LG']);
        Fabricante::create(['nome_fabricante' => 'Gigabyte']);
        Fabricante::create(['nome_fabricante' => 'Xiaomi']);
    }
}
