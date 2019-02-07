<?php

namespace Tests\Feature;

use App\User;
use App\Horse;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OwnerCanDeleteHorseTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function loggedInOwnerCanDeleteHorse()
    {
        $horse = factory(Horse::class)->create();
        $response = $this->actingAs($horse->user)->delete('/horses/' . $horse->id);
        $response->assertStatus(302);
        $response->assertRedirect('/horses');
    }

    /** @test */
    public function notLoggedInOwnerCannotViewCreateNewHorseForm()
    {
        $response = $this->delete('/horses/1');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }
}
