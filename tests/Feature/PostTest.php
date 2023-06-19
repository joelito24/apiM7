<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_creates_a_post()
    {

        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertAuthenticated();
        $user->pios();


        // $response = $this->get('/api/login');
        // $response->assertStatus(201);
    }
}
