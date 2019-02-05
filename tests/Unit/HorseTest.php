<?php

namespace Tests\Unit;

use App\User;
use App\Horse;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HorseTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function horseBelongsToAnOwner()
    {
        $horse = factory(Horse::class)->create();
        $this->assertInstanceOf(User::class, $horse->user);
    }
}
