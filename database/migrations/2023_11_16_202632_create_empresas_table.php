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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('razaoSocial', 100)->notNull();
            $table->string('nomeFantasia', 100)->notNull();
            $table->string('cnpjCpf', 18)->notNull();
            $table->string('inscricao', 20)->notNull();
            $table->string('enderecoEmpresa', 50)->notNull();
            $table->string('bairroEmpresa', 50)->notNull();
            $table->string('cidadeEmpresa', 50)->notNull();
            $table->string('cepEmpresa', 10)->notNull();
            $table->string('estadoEmpresa', 2)->notNull();
            $table->string('paisEmpresa', 10)->notNull();
            $table->string('telefoneEmpresa', 20)->notNull();
            $table->string('ceiEmpresa', 50);
            $table->string('folhaEmpresa', 10);
            $table->string('responsavelEmpresa', 50)->notNull();
            $table->string('cargoEmpresa', 50)->notNull();
            $table->string('emailEmpresa', 50)->notNull();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
