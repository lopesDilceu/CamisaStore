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
        Schema::create('camisas', function (Blueprint $table) {
            $table->id();
            $table->char('uniforme', 9);
            $table->boolean('patrocinadores');
            $table->integer('numero')->nullable();
            $table->tinyText('nome')->nullable();
            $table->char('tamanho', 13);
            $table->integer('quantidade');
            $table->tinyText('observacao')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camisas');
    }
};
