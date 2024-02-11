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
        Schema::create('pedido_produto', function (Blueprint $table) {
            $table->id("pedido_produto_id");
            $table->unsignedBigInteger("pedido_id");
            $table->unsignedBigInteger("produto_id");
            $table->integer("quantidade");
            $table->foreign('pedido_id')
                ->references('pedido_id')
                ->on('pedido')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('produto_id')
                ->references('produto_id')
                ->on('produto')
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
        Schema::dropIfExists('pedido_produto');
    }
};
