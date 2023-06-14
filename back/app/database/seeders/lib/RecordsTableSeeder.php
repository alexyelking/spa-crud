<?php

namespace Database\Seeders\lib;

use App\Models\Record;
use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Record::updateOrCreate(
            [
                'first_name' => 'Антон'],
            [
                'last_name' => 'Абрамов',
                'category_id' => 1,
                'number_of_tickets' => 2,
                'total_price' => 800
            ]
        );

        Record::updateOrCreate(
            [
                'first_name' => 'Александр'],
            [
                'last_name' => 'Елькин',
                'category_id' => 2,
                'number_of_tickets' => 5,
                'total_price' => 2250
            ]
        );

        Record::updateOrCreate(
            [
                'first_name' => 'Владосик'],
            [
                'last_name' => 'Мафаня',
                'category_id' => 3,
                'number_of_tickets' => 4,
                'total_price' => 2000
            ]
        );
    }
}
