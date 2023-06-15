<?php

namespace Tests\Unit;

use App\Http\Controllers\API\RecordController;
use Tests\TestCase;
use App\Models\Record;

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
        $record = Record::factory()->make();

        $response = $this->json('POST', '/api/records', ['first_name' => $record->first_name, 'last_name' => $record->last_name, 'category_id' => $record->category_id, 'number_of_tickets' => $record->number_of_tickets]);
        $response
            ->assertJson([
                'status' => 0,
                'code' => 200,
            ]);
    }

    public function test_record_update()
    {
        $record = Record::factory()->create();

        $response = $this->json('PUT', "/api/records/$record->id", ['first_name' => 'Тестовое Имя', 'last_name' => 'Тестовая Фамилия', 'category_id' => '2', 'number_of_tickets' => '1']);
        $response
            ->assertJson([
                'status' => 0,
                'code' => 200,
            ]);
    }

    public function test_record_destroy()
    {
        $record = Record::factory()->create();

        $response = $this->json('DELETE', "/api/records/$record->id");
        $response
            ->assertJson([
                'status' => 0,
                'code' => 200,
            ]);
    }

    public function test_get_total_price_for_record()
    {
        $controller = new RecordController();

        $result = $controller->getTotalPrice(1, 1);

        $this->assertEquals($result, 400);
    }
}
