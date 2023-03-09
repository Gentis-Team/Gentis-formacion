<?php

namespace Tests\Feature\api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use App\Http\Resources\UserResource;


class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Indicates whether the default seeder should run before each test.
     *
     * @var bool
     */
    protected $seed = true;
    /** @test */
    public function making_an_api_user_get_me_request(): void
    {
        $response = $this->postJson('/api/login', [
            "email" => "user@example.com",
            'password' => 'factoria',
        ]);


        $response = $this->get('/api/users/me');
        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => true,
            ]);

        $this->assertAuthenticatedAs(Auth::user());
        }
}
