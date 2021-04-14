<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PublishTest extends TestCase
{

    use RefreshDatabase;

    public function test_view_publish_form()
    {
        $user = User::factory()->create();
        $user->save();

        $response = $this->actingAs($user)->get('/publish');
        $response->assertSeeText('Hyra');
        $response->assertStatus(200);
    }

    public function test_publish_form()
    {
        $user = User::factory()->create();
        $user->save();

        $response = $this
            ->actingAs($user)
            ->followingRedirects()
            ->post('/publish', [
                'address' => 'Polkagatan 10',
                'city' => 'Gothenburg',
                'rent' => '4000',
                'rooms' => '4',
                'image' => 'image.jpg',
                'description' => 'hahahahaha',
            ]);

        $response->assertSeeText($user->name);
        $response->assertStatus(200);
    }
}
