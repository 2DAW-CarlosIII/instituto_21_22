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
        self::seedUsers();
        //\App\Models\User::factory(10)->create();
    }

    private static function seedUsers()
    {

        foreach (self::$arrayUsuarios as $usuarios) {
            $usuarios['password']=bcrypt($usuarios['password']);
            User::create(
                $usuarios
            );
        }


    }
    private static $arrayUsuarios = array(
        array(
            'name' => "Jose Luis Muñoz",
            'email' => "1837071@alu.murciaeduca.es",
            'password' => 'password',
            'profesor' => false,
            'alumnos' => true
        ),
        array(
            'name' => "Alberto Sierra",
            'email' => "alberto.sierra@alu.murciaeduca.es",
            'password' => 'password',
            'profesor' => true,
            'alumnos' => false
        ),
        array(
            'name' => "Javier Murcia",
            'email' => "javiermurcia@alu.murciaeduca.es",
            'password' => 'password',
            'profesor' => false,
            'alumnos' => true
        )
    );
}
