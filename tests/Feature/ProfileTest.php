<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_profile()
    {
        $user = new User();
        $user->name = 'Pelle Svanlos';
        $user->email = 'example@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this->actingAs($user)->get('/profile');
        $response->assertSeeText('Info');
        $response->assertSeeText('Pelle');
        $response->assertStatus(200);
    }
}
