<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class ControladorSesion extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api',['except'=>['ingresar','registro']]);
    }

    public function cuenta()
    {
        return Auth::user();
    }
    public function ingresar(Request $request)
    {
        if ($token = Auth::attempt($request->all()))
            return response()->json($token, Response::HTTP_OK);
        return response(null,Response::HTTP_UNAUTHORIZED);
    }
    public function registro(Request $request)
    {
        $usuario = $request-> all();
        $usuario['password'] = Hash::make( $usuario['password']);
        $usuario = Usuario::create($usuario);
        return response()->json(Auth::login($usuario), Response::HTTP_OK);
    }
    public function salir()
    {
        Auth::logout();
        return response(null,Response::HTTP_OK);
    }
}

