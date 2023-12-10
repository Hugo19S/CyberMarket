<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id_produto');
            $table->string('categoria');
            $table->string('tipo');
            $table->string('nome_produto');
            $table->string('sku');
            $table->string('fabricante');
            $table->string('vendedor');
            $table->string('modelo');
            $table->decimal('preco_produto', 10,2);
            $table->integer('quantidade');
            $table->string('desciption');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
