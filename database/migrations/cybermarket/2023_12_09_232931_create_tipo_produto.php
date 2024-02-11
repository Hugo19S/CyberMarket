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
        Schema::create('tipo_produto', function (Blueprint $table) {
            $table->id("tipo_produto_id");
            $table->unsignedBigInteger("categoria_id");
            $table->string("nome_tipo_produto");
            $table->foreign('categoria_id')
                ->references('categoria_id')
                ->on('categoria')
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
        Schema::dropIfExists('tipo_produto');
    }
};
