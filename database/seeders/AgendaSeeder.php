<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AgendaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('pt_BR');

        $clientes = DB::table('clientes')->pluck('id')->all();
        $funcionarios = DB::table('funcionarios')->pluck('id')->all();

        if (empty($clientes) || empty($funcionarios)) {
            return;
        }

        $agendas = [];
        for ($i = 1; $i <= 30; $i++) {
            $dataAgendamento = $faker->dateTimeBetween('now', '+3 months');
            $dataExpiracao = (clone $dataAgendamento)->modify('+3 hours');

            $agendas[] = [
                'cliente_id'       => $faker->randomElement($clientes),
                'funcionario_id'   => $faker->randomElement($funcionarios),
                'data_agendamento' => $dataAgendamento->format('Y-m-d H:i:s'),
                'data_expiracao'   => $dataExpiracao->format('Y-m-d H:i:s'),
                'created_at'       => now(),
                'updated_at'       => now(),
            ];
        }

        DB::table('agendas')->insertOrIgnore($agendas);
    }
}
