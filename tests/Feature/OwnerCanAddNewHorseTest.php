<?php

namespace Tests\Feature;

use App\User;
use App\Horse;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OwnerCanAddNewHorseTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function loggedInOwnerCanViewCreateNewHorseForm()
    {
        $owner = factory(User::class)->create();
        $response = $this->actingAs($owner)->get('/horses/new');
        $response->assertStatus(200);
    }

    /** @test */
    public function notLoggedInOwnerCannotViewCreateNewHorseForm()
    {
        $response = $this->get('/horses/new');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    /** @test */
    public function loggedInUserCanCreateNewHorse()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->post('/horses', [
            "name" => 'Meatball',
            "gender" => 'mare',
            "breed" => 'Hanovarian',
            "color" => 'Brown',
            "height" => '16.2hh',
        ]);
        tap(Horse::first(), function($horse) use ($response, $user){
            $response->assertStatus(302);
            $response->assertRedirect("/horses");
            $this->assertTrue($horse->user->is($user));
        });
    }
}
