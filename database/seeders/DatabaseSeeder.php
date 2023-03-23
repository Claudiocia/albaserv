<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles[] = array(
            array(
                'nome' => 'Administrador',
                'system' => 'admin',
            ),
            array(
                'nome' => 'Pesquisa',
                'system' => 'pesq',
            ),
            array(
                'nome' => 'Legislação',
                'system' => 'legis',
            )
        );

        foreach ($roles as $role) {
            DB::table('roles')->insert($role);
        }

        $userAdmin[] = array(
            array(
                'name' => 'Claudio Souza',
                'cpf' => '21791350500',
                'email' => 'claudiosouza.ascom@alba.ba.gov.br',
                'cadastro' => '925294',
                'email_verified_at' => now(),
                'password' => bcrypt('91316445'),
                'lotacao' => 'ASCOM',
            )
        );

        foreach ($userAdmin as $user) {
            DB::table('users')->insert($user);
            DB::table('role_user')->insert(['role_id' => 1, 'user_id' => 1]);
        }
    }
}
