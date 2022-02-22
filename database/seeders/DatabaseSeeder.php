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
        //\App\Models\User::factory(10)->create();
        $yo = new User();
        $yo->name='cristian';
        $yo->email='cristian@gmail.com';
        $yo->password=bcrypt(env('ADMIN_PASSWORD', 'alumno'));
        $yo->save();

    }
}
