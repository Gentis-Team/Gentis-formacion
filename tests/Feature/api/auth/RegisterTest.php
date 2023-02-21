<?php

namespace Tests\Feature\auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Indicates whether the default seeder should run before each test.
     *
     * @var bool
     */
    protected $seed = true;
    /** @test */
    public function making_an_api_register_request_following_all_rules(): void
    {
        $response = $this->postJson('/api/register', [
            "name" => "newUser",
            "email" => "newUser@example.com",
            "phone" => "483274829",
            'password' => 'factoria',
            'role' => 'user',
        ]);
        
        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => 'success',
            ]);
    }

    /** @test */
    public function making_an_api_register_request_without_following_all_rules(): void
    {
        $response = $this->postJson('/api/register', [
            "name" => "newUser",
            "email" => "user@example.com",
            "phone" => "483274829",
            'password' => 'factoria',
            'role' => 'user',
        ]);
        
        $response
            ->assertStatus(422);
    }
}
