<?php

namespace Tests\Feature\App\Http\Controllers;
use App\Models\User;

use Tests\TestCase;

class UserControllerTest extends TestCase
{
    public $user = ['name' => '', 'email' => '', 'password' => ''];

    protected function setUser(): void
    {
        $newUser = User::factory()->create();
        $this->user['name'] = $newUser->name;
        $this->user['email'] =  $newUser->email;
        $this->user['password'] = $newUser->password;
    }

    /**
     * @test
     *
     * @return void
     */

    public function TestIfRouteAreRedirectingIfEmailExistsOnRegisteringUser()
    {
        $request = $this->post(route('newUser',['name' => $this->user['name'],
         'email' => $this->user['email'],
         'password' => 'password',
         'confirmPassword' => 'password'
        ]));
        $request->assertStatus(500);
    }

    public function TestIfUsersShouldLogin()
    {
        $request = $this->post(route('login', [
            'email' => $this->user['email'],
            'password' => 'password']
            ))->assertStatus(200);
    }
}
