<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test 1 */
    function revisionListaUsuarios()
    {
        $this->get('/usuario')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Diego')
            ->assertSee('Hugo');
    }

     /** @test 2 */
    function revisionListaUsuariosVacia()
    {
        $this->get('/usuario?empty')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('No hay usuarios registrados');
    }

    /** @test 3 */
    function revisionListaDetalleUsuario(){
        $this->get('/usuario/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalle de ruta usuario id: 5');
    }

    /** @test 4 */
    function revisionUsuarioNuevo(){
        $this->get('/usuario/nuevo')
            ->assertStatus(200)
            ->assertSee('Ingreso de usuarios nuevos');
    }

    /** @test 5 */
    function revisionEditarUsuario(){
        $this->get('/usuario/edit/diego')
            ->assertStatus(200)
            ->assertSee('Se edita el usuario Diego');
    }


}
