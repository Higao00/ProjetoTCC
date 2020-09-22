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
        $this->call([
            EventTableSeeder::class,
        ]);
        // factory(App\User::class, 50)->create();
        // factory(App\Quadra::class, 50)->create();
        factory(App\Endereco::class, 50)->create();


    }
}
