<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * Test if a user is admin
     *
     * @return void
     */
    public function test_user_is_admin()
    {
        $u = new User();
        $u->name = "Pepe";
        $u->email = "pepe@argento.com";
        $u->password = "asdfasfsdf";
        $u->rol_id = 1;

        $this->assertTrue($u->isAdmin(),"El usuario es Admin");
    }

    /**
     * Test if a user is Municipal
     *
     * @return void
     */
    public function test_user_is_municipal()
    {
        $u = new User();
        $u->name = "Pepe";
        $u->email = "pepe@argento.com";
        $u->password = "asdfasfsdf";
        $u->rol_id = 2;

        $this->assertTrue($u->isMunicipal(),"El usuario es Municipal");
    }

    /**
     * Test if a user is Coordinador
     *
     * @return void
     */
    public function test_user_is_coordinador()
    {
        $u = new User();
        $u->name = "Pepe";
        $u->email = "pepe@argento.com";
        $u->password = "asdfasfsdf";
        $u->rol_id = 3;

        $this->assertTrue($u->isCoordinador(),"El usuario es coordinador");
    }
}
