<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use \App\Models\User;
use \App\Models\Grupo;
use \App\Models\Matricula;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
    	Grupo::truncate();
    	Matricula::truncate();
        Grupo::factory(20)->create();
        Matricula::factory(15)->create();
        $user = User::create([
            'name' => 'Jose San Fulgencio',
            'email' => '8686470@alu.murciaeduca.es',
            'password' => bcrypt('password'),
            'usuario_av' => 2435306,
        ])->cursos()->attach(\Illuminate\Support\Arr::pluck(Curso::factory()->count(3)->create(), 'id'));

        \App\Models\User::factory(10)->create();
        \App\Models\Nota::factory(10)->create();
    }
}
