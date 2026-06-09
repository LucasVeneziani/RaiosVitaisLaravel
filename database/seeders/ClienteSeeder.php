<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('pt_BR');

        $clientes = [];
        for ($id = 1; $id <= 20; $id++) {
            $clientes[] = [
                'id'         => $id,
                'name'       => $faker->name,
                'email'      => $faker->unique()->safeEmail,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('clientes')->insertOrIgnore($clientes);
    }
}
