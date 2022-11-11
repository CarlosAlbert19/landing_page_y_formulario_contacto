<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pagina_contacto()
    {
        $response = $this->get('/contactos');

        $response->assertStatus(200);

        $response->assertSeeText(['Nombre', 'Correo', 'Comentario']);
    }

    /** @test */
    public function validacion_formulario()
    {
        $request = $this->post('/contactos', [
            'nombre' => 'Carl',
            'correo' => 'Correoincorrecto',
            'comentario' => 'Hola Mundo',
        ]);

        $request->assertSessionHasErrors([
            'nombre',
            'correo',
            'comentario',
        ]);
    }

    /** @test */
    public function prellenado_formulario_contacto()
    {
        $response = $this->get('/contactos/1234');

        $response->assertStatus(200);

        $this->assertEquals('Charlie', $response['nombre']);
    }
}
