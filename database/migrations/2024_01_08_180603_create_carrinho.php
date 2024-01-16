<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carrinho', function (Blueprint $table) {
            $table->id('carrinho_id');
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->unsignedBigInteger('produto_id');
            $table->integer('quantidade');
            $table->foreign('produto_id')
                ->references('produto_id')
                ->on('produtos')
                ->onDelete('cascade');
            $table->foreign('cliente_id')
                ->references('cliente_id')
                ->on('users')
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrinho');
    }
};
