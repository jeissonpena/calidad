<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel');
    }

    public function testProductoStore()
    {
    $this->post('0/api/producto/producto',[
    'nombre'  => 'Yogurt',
    'categoria' => 'Lacteos',
    'cantidad' => 1,
        ])
    ->seeJson([
        'Mensaje'=> 'Elproducto se creo correctamente', 
    ]);
    }

    public function testProductoUpdate()
    {
    $this->put('0/api/producto/producto/2',[
    'nombre'  => 'Leche',
    'categoria' => 'Lacteos',
    'cantidad' => 1,
        ])
    ->seeJson([
        'Mensaje'=> 'El Registro se Actualizo con exito', 
            ]);
    }
    public function testProductoShow()
    {
    $this->get('0/api/producto/producto/2')
    ->seeJson([
    'nombre'  => 'Leche',
    'categoria' => 'Lacteos',
    'cantidad' => 2,
    ]);
    }
}




