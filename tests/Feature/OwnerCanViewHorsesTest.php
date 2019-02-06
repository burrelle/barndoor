<?php

namespace Tests\Feature;

use App\Horse;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OwnerCanViewHorsesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function ownerCanViewHorsesProfile()
    {
        $this->withoutExceptionHandling();
        $horse = factory(Horse::class)->create([
            "name" => 'Meatball',
            "gender" => 'mare',
            "breed" => 'Hanovarian',
            "color" => 'Brown',
            "height" => '16.2hh',
        ]);

        $response = $this->get('/horses/' . $horse->id);

        $response->assertStatus(200);
        $response->assertSee('Meatball');
        $response->assertSee('mare');
        $response->assertSee('Hanovarian');
        $response->assertSee('Brown');
        $response->assertSee('16.2hh');
    }
}
