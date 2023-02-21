<?php

namespace Tests\Feature\api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class CoursesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Indicates whether the default seeder should run before each test.
     *
     * @var bool
     */
    protected $seed = true;
    /** @test */
    public function making_an_api_courses_index_request(): void
    {

        $response = $this->get('/api/courses');

        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => true,
            ]);
    }

    /** @test */
    public function making_an_api_courses_store_request_loged_in(): void
    {
        $response = $this->postJson('/api/login', [
            "email" => "user@example.com",
            'password' => 'factoria',
        ]);

        $this->assertAuthenticatedAs(Auth::user());


        $response = $this->postJson('/api/courses', [
            "code" => "AD738908_RT",
            'name' => 'newCourse',
            'description' => 'newCourseDescription',
        ]);

        $this->assertDatabaseHas('courses', [
            "code" => "AD738908_RT",
            'name' => 'newCourse',
            'description' => 'newCourseDescription',
        ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => 'success',
            ]);
    }

    /** @test */
    public function making_an_api_courses_store_request_not_loged_in(): void
    {

        $response = $this->postJson('/api/courses', [
            "code" => "AD738908_RT",
            'name' => 'newCourse',
            'description' => 'newCourseDescription',
        ]);

        $this->assertDatabaseMissing('courses', [
            "code" => "AD738908_RT",
            'name' => 'newCourse',
            'description' => 'newCourseDescription',
        ]);

        $response
            ->assertStatus(401);
    }

    /** @test */
    public function making_an_api_courses_update_request_loged_in(): void
    {
        $response = $this->postJson('/api/login', [
            "email" => "user@example.com",
            'password' => 'factoria',
        ]);

        $this->assertAuthenticatedAs(Auth::user());

        $response = $this->put('/api/courses/1', [
            "code" => "AD738908_RT",
            'name' => 'newCourse',
            'description' => 'newCourseDescription',
        ]);

        $this->assertDatabaseHas('courses', [
            "code" => "AD738908_RT",
            'name' => 'newCourse',
            'description' => 'newCourseDescription',
        ]);

        $response
            ->assertStatus(200);
    }

    /** @test */
    public function making_an_api_courses_update_request_not_loged_in(): void
    {

        $response = $this->put('/api/courses/1', [
            "code" => "AD738908_RT",
            'name' => 'newCourse',
            'description' => 'newCourseDescription',
        ]);
        

        $this->assertDatabaseMissing('courses', [
            "code" => "AD738908_RT",
            'name' => 'newCourse',
            'description' => 'newCourseDescription',
        ]);

        $response
            ->assertStatus(500);

    } 

    /** @test */
    public function making_an_api_courses_delete_request_loged_in(): void
    {
        $response = $this->postJson('/api/login', [
            "email" => "user@example.com",
            'password' => 'factoria',
        ]);

        $this->assertAuthenticatedAs(Auth::user());

        $response = $this->delete('/api/courses/1', []);

        $response
            ->assertStatus(200);
    }

    /** @test */
    public function making_an_api_courses_delete_request_not_loged_in(): void
    {

        $response = $this->delete('/api/courses/1', []);

        $response
            ->assertStatus(500);

    } 
}
