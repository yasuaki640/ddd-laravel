<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Packages\Infrastructure\Eloquent\UserEloquent;
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

    public function test_get_by_id()
    {
        $user = UserEloquent::factory()->create();

        $response = $this->get('/api/user/' . $user->id);

        $response->assertOk();
    }
}
