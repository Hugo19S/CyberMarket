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
        Schema::create('imagem', function (Blueprint $table) {
            $table->id("imagem_id");
            $table->unsignedBigInteger("produto_id");
            $table->string("imagem_url");
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
        Schema::dropIfExists('imagem');
    }
};
