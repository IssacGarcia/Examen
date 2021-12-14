<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ControladorEmpleado extends Controller
{
     // Ver todos los registros
    // GET
    public function index()
    {
        return Empleado::all();
    }

    // Ver solo un registro por id
    // GET/id
    public function show($id)
    {
        return Empleado::find($id);
    }

    // Nuevo registro
    // POST + json
    public function store(Request $request)
    {
        return Empleado::create($request->all());
    }

    // Editar un registro por id
    // PUT/id + json
    public function update(Request $request, $id)
    {
        $Empleado = Empleado::findOrFail($id);
        $Empleado->update($request->all());
        return $Empleado;
    }

    // Borra un registro por id
    // DESTROY/id
    public function destroy($id)
    {
        Empleado::find($id)->delete();
        return response(null, Response::HTTP_OK);
    }
}
