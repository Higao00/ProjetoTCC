<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'title' => 'Evento 1',
                'start' => '2020-09-15 00:00:00',
                'end' => '2020-09-15 12:00:00',
                'description' => 'Evento primario',
            ],
            [
                'title' => 'Evento 12',
                'start' => '2020-09-16 00:00:00',
                'end' => '2020-09-16 12:00:00',
                'description' => 'Evento primario1',
            ],
            [
                'title' => 'Evento 123',
                'start' => '2020-09-18 00:00:00',
                'end' => '2020-09-18 12:00:00',
                'description' => 'Evento primario12',
            ]
        ]);
    }
}
