<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class HomeControllerTest extends DuskTestCase
{
    public $user;


    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }
    /**
     * @test
     * @return void
     */

    public function testIfUserCouldCreateNewTask(): void
    {

    }

}
