<?php

namespace Tests\Feature\App\Http\Controllers\auth;
use App\Models\User;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function TestIfRouteRedirectIfEmailExistsOnRegisteringUser()
    {

        $user = User::factory()->create();
        $request = $this->post(route('newUser',['name' => $user->name, 'email' => $user->email, 'password' => $user->password]));
        $request->assertStatus(500);
    }
}
