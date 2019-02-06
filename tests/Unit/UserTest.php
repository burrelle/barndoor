<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function defaultUserIsNotAnAdmin()
    {
        $user = factory(User::class)->create();
        $this->assertFalse($user->isAdmin());
    }

    /** @test */
    public function adminUserIsAnAdmin()
    {
        $admin = factory(User::class)->states('admin')->create();
        $this->assertTrue($admin->isAdmin());
    }
}
