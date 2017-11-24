<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class Productoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::get();
        return $productos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $producto = new Producto();
        $producto->created($request->all());
        if($producto){
        return response([
            'Mensaje' => "El productos se creo corectamente"
        ],200);
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productos = Producto::findOrFail($id);
        return $productos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto -> update($request->all());

        if ($producto) {
            return response([
                'Mensaje' => "El Registro se Actulizo con exito"
            ], 200);
        }
        return response([
            'Mensaje' => "El Registro  no se Actulizo!"
        ], 401);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = producto::destroy($id);

        if ($producto) {
            return response([
                'Mensaje' => "El producto se elimino con exito"
            ], 200);
        }
        return response([
            'Mensaje' => "El producto no se elimino!"
        ], 401);
    }
}
