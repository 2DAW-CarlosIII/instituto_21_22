<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::truncate();
        \App\Models\User::factory(10)->create();

        $this->call([
            NotaSeeder::class,
        ]);

        User::truncate();
        $user = User::create([
            'name' => 'Jose Arjona',
            'email' => '1837071@alu.murciaeduca.es',
            'password' => bcrypt('password'),
            'usuario_av' => 11078,
        ]);
    }
}
