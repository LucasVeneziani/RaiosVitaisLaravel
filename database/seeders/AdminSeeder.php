<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admins')->insertOrIgnore([
            [
                'name'       => 'Administrador',
                'email'      => 'admin@raiosvitais.com',
                'password'   => Hash::make('admin123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('funcionarios')->insertOrIgnore([
            [
                'name'       => 'Funcionário Demo',
                'email'      => 'funcionario@raiosvitais.com',
                'password'   => Hash::make('func123'),
                'phone'      => '(11) 91234-5678',
                'cargo'      => 'Atendente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
