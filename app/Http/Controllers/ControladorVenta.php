<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ControladorVenta extends Controller
{
     // Ver todos los registros
    // GET
    public function index()
    {
        return Venta::all();
    }

    // Ver solo un registro por id
    // GET/id
    public function show($id)
    {
        return Venta::find($id);
    }

    // Nuevo registro
    // POST + json
    public function store(Request $request)
    {
        return Venta::create($request->all());
    }

    // Editar un registro por id
    // PUT/id + json
    public function update(Request $request, $id)
    {
        $Venta = Venta::findOrFail($id);
        $Venta->update($request->all());
        return $Venta;
    }

    // Borra un registro por id
    // DESTROY/id
    public function destroy($id)
    {
        Venta::find($id)->delete();
        return response(null, Response::HTTP_OK);
    }
}
