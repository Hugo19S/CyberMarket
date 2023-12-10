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
        Schema::create('pagamento', function (Blueprint $table) {
            $table->id("pagamento_id");
            $table->unsignedBigInteger("tipo_pagamento_id");
            $table->unsignedBigInteger("pedido_id");
            $table->string("descricao");
            $table->dateTime("data_pagamento");
            $table->integer("quantidade");
            $table->string("status_pagamento");
            $table->foreign('tipo_pagamento_id')
                ->references('tipo_pagamento_id')
                ->on('tipo_pagamento')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('pedido_id')
                ->references('pedido_id')
                ->on('pedido')
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
        Schema::dropIfExists('pagamento');
    }
};
