<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ControladorAuto extends Controller
{
    // Ver todos los registros
    // GET
    public function index()
    {
        return Auto::all();
    }

    // Ver solo un registro por id
    // GET/id
    public function show($id)
    {
        return Auto::find($id);
    }

    // Nuevo registro
    // POST + json
    public function store(Request $request)
    {
        return Auto::create($request->all());
    }

    // Editar un registro por id
    // PUT/id + json
    public function update(Request $request, $id)
    {
        $auto = Auto::findOrFail($id);
        $auto->update($request->all());
        return $auto;
    }

    // Borra un registro por id
    // DESTROY/id
    public function destroy($id)
    {
        Auto::find($id)->delete();
        return response(null, Response::HTTP_OK);
    }
}
