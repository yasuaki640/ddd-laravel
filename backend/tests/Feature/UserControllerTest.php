<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_register()
    {
        $response = $this->post('/api/user', [
            'user_name' => 'test'
        ]);

        $response->assertOk();

        $this->assertDatabaseHas('users', [
            'user_name' => 'test'
        ]);
    }
}
