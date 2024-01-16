<?php

namespace Database\Seeders;

use App\Models\Imagem;
use Illuminate\Database\Seeder;

class ImagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imagens = [
            [
                'produto_id' => 1,
                'imagem_url' => '/images/products/p_1.jpg',

            ],
            [
                'produto_id' => 2,
                'imagem_url' => '/images/products/p_2.jpg',

            ],
            [
                'produto_id' => 3,
                'imagem_url' => '/images/products/p_3.jpg',

            ],
            [
                'produto_id' => 4,
                'imagem_url' => '/images/products/p_4.jpg',

            ],
            [
                'produto_id' => 5,
                'imagem_url' => '/images/products/p_5.jpg',

            ],
            [
                'produto_id' => 6,
                'imagem_url' => '/images/products/p_6.jpg',

            ],
            [
                'produto_id' => 7,
                'imagem_url' => '/images/products/p_7.jpg',

            ],
            [
                'produto_id' => 8,
                'imagem_url' => '/images/products/p_8.jpg',

            ],
            [
                'produto_id' => 9,
                'imagem_url' => '/images/products/p_9.jpg',

            ],
            [
                'produto_id' => 10,
                'imagem_url' => '/images/products/p_10.jpg',

            ],
            [
                'produto_id' => 11,
                'imagem_url' => '/images/products/p_11.jpg',

            ],
            [
                'produto_id' => 12,
                'imagem_url' => '/images/products/p_12.jpg',

            ],
            [
                'produto_id' => 13,
                'imagem_url' => '/images/products/p_13.jpg',

            ],
            [
                'produto_id' => 14,
                'imagem_url' => '/images/products/p_14.jpg',

            ],
            [
                'produto_id' => 15,
                'imagem_url' => '/images/products/p_15.jpg',

            ],
            [
                'produto_id' => 16,
                'imagem_url' => '/images/products/p_16.jpg',

            ],
            [
                'produto_id' => 17,
                'imagem_url' => '/images/products/p_17.jpg',

            ],
            [
                'produto_id' => 18,
                'imagem_url' => '/images/products/p_18.jpg',

            ],
            [
                'produto_id' => 19,
                'imagem_url' => '/images/products/p_19.jpg',

            ],
            [
                'produto_id' => 20,
                'imagem_url' => '/images/products/p_20.jpg',

            ],
        ];

        foreach ($imagens as $imagem) {
            Imagem::create($imagem);
        }
    }
}
