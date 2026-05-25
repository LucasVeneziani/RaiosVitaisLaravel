<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tabela NxN de agendamentos.
     * Um cliente pode ter vários funcionários em datas distintas,
     * e um funcionário pode atender vários clientes.
     */
    public function up(): void
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cliente_id')
                  ->constrained('clientes')
                  ->onDelete('cascade');

            $table->foreignId('funcionario_id')
                  ->constrained('funcionarios')
                  ->onDelete('cascade');

            $table->dateTime('data_agendamento');   // data e hora do agendamento
            $table->dateTime('data_expiracao');     // validade / data limite do agendamento

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
