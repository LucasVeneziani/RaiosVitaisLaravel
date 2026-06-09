<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FuncionarioSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('pt_BR');

        $cargos = [
            'Esteticista',
            'Massoterapeuta',
            'Depiladora',
            'Atendente',
            'Técnica de Pele',
            'Auxiliar de Atendimento',
        ];

        $funcionarios = [];
        for ($id = 2; $id <= 8; $id++) {
            $funcionarios[] = [
                'id'         => $id,
                'name'       => $faker->name,
                'email'      => $faker->unique()->safeEmail,
                'password'   => bcrypt('senha123'),
                'phone'      => $faker->phoneNumber,
                'cargo'      => $faker->randomElement($cargos),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('funcionarios')->insertOrIgnore($funcionarios);
    }
}
