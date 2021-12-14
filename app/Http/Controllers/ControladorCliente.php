<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ControladorCliente extends Controller
{
     // Ver todos los registros
    // GET
    public function index()
    {
        return Cliente::all();
    }

    // Ver solo un registro por id
    // GET/id
    public function show($id)
    {
        return Cliente::find($id);
    }

    // Nuevo registro
    // POST + json
    public function store(Request $request)
    {
        return Cliente::create($request->all());
    }

    // Editar un registro por id
    // PUT/id + json
    public function update(Request $request, $id)
    {
        $Cliente = Cliente::findOrFail($id);
        $Cliente->update($request->all());
        return $Cliente;
    }

    // Borra un registro por id
    // DESTROY/id
    public function destroy($id)
    {
        Cliente::find($id)->delete();
        return response(null, Response::HTTP_OK);
    }
}
