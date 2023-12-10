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
        Schema::create('produto', function (Blueprint $table) {
            $table->id("produto_id");
            $table->unsignedBigInteger("tipo_produto_id");
            $table->unsignedBigInteger("fabricante_id");
            $table->string("nome_produto");
            $table->string("sku");
            $table->string("descricao");
            $table->float("preco");
            $table->string("vendedor");
            $table->integer("quantidade");
            $table->dateTime("data_criacao");
            $table->string("modelo");
            $table->foreign('tipo_produto_id')
                ->references('tipo_produto_id')
                ->on('tipo_produto')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('fabricante_id')
                ->references('fabricante_id')
                ->on('fabricante')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
