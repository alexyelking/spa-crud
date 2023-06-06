<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            'first_name' => 'Александр',
            'last_name' => 'Елькин',
            'category' => 'Student',
            'number_of_tickets' => 5,
            'total_price' => 2250,
        ]);
        DB::table('records')->insert([
            'first_name' => 'Антон',
            'last_name' => 'Абрамов',
            'category' => 'Pensioner',
            'number_of_tickets' => 2,
            'total_price' => 800,
        ]);
        DB::table('records')->insert([
            'first_name' => 'Владосик',
            'last_name' => 'Мафаня',
            'category' => 'Ordinary',
            'number_of_tickets' => 4,
            'total_price' => 2000,
        ]);
    }
}
