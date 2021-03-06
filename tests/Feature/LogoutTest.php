<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_logout()
    {
        $user = User::factory()->create();
        $user->save();

        $response = $this->actingAs($user)->followingRedirects()->get('logout');
        $response->assertSeeText('Email');
    }
}
