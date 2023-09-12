<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsertTest extends TestCase
{
    /** @test 1*/
    function bienvenidaUsuarioNickname(){
        $this->get('/saludo/diego/rojas')
            ->assertStatus(200)
            ->assertSee('Bienvenido Diego, tu apodo es Rojas');
    }

    /** @test 2*/
    function bienvenidoUsuarioSinNikname() {
        $this->get('/saludo/diego')
            ->assertStatus(200)
            ->assertSee('Bienvenido Diego, sin apodo');
    }
}
