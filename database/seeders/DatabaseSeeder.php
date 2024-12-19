<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            DivisiSeeder::class,
            ArsipSeeder::class,
            KalenderSeeder::class,
            ToDoSeeder::class,
        ]);
    }
}
