<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(EscuelasSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(MesasSeeder::class);
        $this->call(CandidatosSeeder::class);
    }
}
