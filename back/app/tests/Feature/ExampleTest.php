<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test API requests and incoming codes
     */

    public function test_index()
    {
        $response = $this->get('/api/records');
        $response->assertStatus(200);
    }

    public function test_create()
    {
        $response = $this->post('api/records?first_name=Антон&last_name=Букемгенский&category=Ordinary&number_of_tickets=2&total_price=0');
        $response->assertStatus(200);
    }

    public function test_update()
    {
        $response = $this->post('/api/records/86?first_name=Каша&last_name=Дягтерова&category=Student&number_of_tickets=2&total_price=0');
        $response->assertStatus(200);
    }

    public function test_delete()
    {
        $response = $this->delete('/api/records/86');
        $response->assertStatus(200);
    }
}
