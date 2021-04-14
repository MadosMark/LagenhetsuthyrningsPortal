<?php

namespace Tests\Feature;

use App\Models\Apartment;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ApplyTest extends TestCase
{
    use RefreshDatabase;

    public function test_apply()
    {
        $user = User::factory()->create();
        $user->save();

        $apartment = new Apartment();
        $apartment->id = 1;
        $apartment->address = 'Polkagatan 12';
        $apartment->user_id = 1;
        $apartment->city = 'Goteborg';
        $apartment->rent = 4000;
        $apartment->rooms = 4;
        $apartment->description = 'Best little apartment ever';
        $apartment->image = 'image.jpg';
        $apartment->save();

        $response = $this->actingAs($user)->get("apply/{$apartment->id}");
        $response->assertSeeText('Stad');
        $response->assertStatus(200);
    }
}
