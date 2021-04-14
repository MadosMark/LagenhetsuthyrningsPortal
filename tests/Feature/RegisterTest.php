<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    public function test_register_view()
    {
        $response = $this->get('/register');
        $response->assertSeeText('Skapa');
        $response->assertStatus(200);
    }

    public function test_register_form()
    {
        $response = $this
            ->followingRedirects()
            ->post('/register', [
                'name' => 'Lucas',
                'email' => 'pnjpss@lucas.se',
                'password' => '123',
            ]);

        $response->assertSeeText('Lucas');
        $response->assertStatus(200);
    }
}
