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
        Schema::create('deputados', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('nome');
            $table->string('sigla_partido');
            $table->string('uri_partido');
            $table->string('sigla_uf');
            $table->integer('id_legislatura');
            $table->string('url_foto');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deputados');
    }
};
