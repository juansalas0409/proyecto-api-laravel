<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Articulo[]|Collection
     */
    public function index()
    {
        $articulos = Articulo::all();

        return $articulos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return string
     */
    public function store(Request $request): string
    {
        $articulo = new Articulo();
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->stock = $request->stock;

        $articulo->save();

        return 'ok';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        $articulo = Articulo::findOrFail($request->id);

        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->stock = $request->stock;

        $articulo->save();

        return $articulo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return int
     */
    public function destroy(Request $request)
    {
        $articulo = Articulo::destroy($request->id);

        return $articulo;
    }
}
