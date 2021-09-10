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
        $response = $this->postJson('/api/user', [
            'user_name' => 'test'
        ]);

        $response
            ->assertOk()
            ->assertJsonStructure(['id']);

        $this->assertDatabaseHas('users', [
            'user_name' => 'test'
        ]);
    }

    public function test_register_fail_duplicate_user_name()
    {
        UserEloquent::factory()->create([
            'user_name' => 'duplicate user name'
        ]);

        $response = $this->postJson('/api/user', [
            'user_name' => 'duplicate user name'
        ]);

        $response->assertUnprocessable();
    }

    public function test_get_by_id()
    {
        $user = UserEloquent::factory()->create([
            'user_name' => 'test user name'
        ]);

        $response = $this->getJson('/api/user/' . $user->id);

        $response
            ->assertOk()
            ->assertJson([
                'id' => $user->id,
                'user_name' => $user->user_name
            ]);
    }
}
