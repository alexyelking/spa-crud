<?php

namespace Tests\Unit;

use App\Models\Record;
use Tests\TestCase;


class RecordTest extends TestCase
{
    public function test_record_index()
    {
        $response = $this->json('GET', '/api/records');
        $response
            ->assertJson([
                'status' => 0,
                'code' => 200,
            ]);
    }

    public function test_record_create()
    {
        $response = $this->json('POST', '/api/records', ['first_name' => 'Тестовое Имя', 'last_name' => 'Тестовая Фамилия', 'category_id' => '1', 'number_of_tickets' => '1']);
        $response
            ->assertJson([
                'status' => 0,
                'code' => 200,
            ]);
    }

//    public function test_record_update()
//    {
//        $response = $this->json('PUT', '/api/records/1', ['first_name' => 'Тестовое Имя 2', 'last_name' => 'Тестовая Фамилия 2', 'category_id' => '2', 'number_of_tickets' => '1']);
//        $response
//            ->assertJson([
//                'status' => 0,
//                'code' => 200,
//            ]);
//    }

    public function test_record_destroy()
    {
        $record = Record::factory()->create();

        dd($record);
//        $response = $this->json('DELETE', '/api/records/1');
//        $response
//            ->assertJson([
//                'status' => 0,
//                'code' => 200,
//            ]);
    }

//    public function test_get_total_price_for_record()
//    {
//        $record = Record::factory()->create();
//
//        dd($record);
//
//        $response = $this->delete('/api/records/86');
//        $response->assertStatus(200);
//
//        $response = $this->json('DELETE', '/api/clients/3', ['token' => Auth::tokenById(1)]);
//        $response
//            ->assertJson([
//                'status' => 0,
//                'code' => 200,
//            ]);
//    }
}
