<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function test_view_login_form()
    {
        $response = $this->get('/');
        $response->assertSeeText('Email address');
        $response->assertStatus(200);
    }
    /**
     * @test
     */
    public function test_login_user()
    {
        $user = new User();
        $user->name = 'Pelle Svanlos';
        $user->email = 'example@yrgo.se';
        $user->password = Hash::make(123);
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'example@yrgo.se',
                'password' => '123',
            ]);

        $response->assertStatus(200);
    }
}
