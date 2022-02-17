<?php

namespace Tests\Feature;

use App\Models\nota;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class NotasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        Sanctum::actingAs(
            nota::factory(48)->create()
        );

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
