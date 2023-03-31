<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->all());
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'token' => $request->user()->createToken($request->email)->plainTextToken, 'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'Unauthenticated'
        ], 401);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|unique:users,email|max:50',
            'password' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->all());
        }

        try {
            // creamos el usuario administrador
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->identificacion = (isset($request->identificacion) ? $request->identificacion : "N/A");
            $user->telefono = (isset($request->telefono) ? $request->telefono : "N/A");
            $user->instagram = (isset($request->instagram) ? $request->instagram : "N/A");
            $user->pais = (isset($request->pais) ? $request->pais : "N/A");
            $user->rol_id = 1;

            $user->save();
        } catch (\Exception $e) {
            Log::error('App\Controllers\Api\ServiceController::create_admin' . $e);
            return response("", 500);
        }

        return response([
            "message" => "Usuario Creado"
        ], 200);
    }
}
