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

    public function testIfAutenthicatedUsersCanEnterTheHomePage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find($this->user->id))
                    ->visit('/home')
                    ->assertSee('KanbanB');
        });
    }

    public function testIfAutenthicatedUsersCanCreateNewKanban(): void
    {
        $this->browse(function (Browser $browser){
            $browser->loginAs(User::find($this->user->id))
                    ->visit('/home')
                    ->click("#newKanban")
                    ->click("@inputNewKanban")
                    ->type('name', 'testKanban')
                    ->click("#savechanges")
                    ->assertDontSee("Salvar");
    });
}
}
