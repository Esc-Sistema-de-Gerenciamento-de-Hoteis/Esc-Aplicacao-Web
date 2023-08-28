<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class UpdateUserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function UpdateUserTest(): void
    {
        $response = new Response();
        $response = $this->post('/api/user/edit', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'profile' => 2
        ]);

        $response->assertStatus(200);
    }
}
