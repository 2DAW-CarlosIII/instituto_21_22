<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Curso;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        $user = User::create([
            'name' => 'Luis Martinez',
            'email' => 'luis.martinez@murciaeduca.es',
            'password' => bcrypt('password'),
            'usuario_av' => 63137,
        ]);
    }
}
