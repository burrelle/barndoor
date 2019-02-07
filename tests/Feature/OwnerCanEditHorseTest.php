<?php

namespace Tests\Feature;

use App\Horse;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OwnerCanEditHorseTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function loggedInOwnerCanEditHorse()
    {
        $horse = factory(Horse::class)->create();
        $originalName = $horse->name;
        $horse->name = 'Buttercup';
        $response = $this->actingAs($horse->user)->followingRedirects()->post('/horses/' . $horse->id, $horse->toArray());
        $response->assertSee('Buttercup');
        $response->assertDontSee($originalName);
    }

    /** @test */
    public function notLoggedInOwnerCannotEdit()
    {
        $response = $this->post('/horses/1');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }
}
