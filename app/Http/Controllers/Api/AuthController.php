<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AuthController extends BaseController
{
    public function signin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = Auth::user();
            $token = $authUser->createToken('MyAuthApp')->plainTextToken;
            $user = Cliente::where('user_id', '=', $authUser->id)->get();

            Cache::put('api_token_', $token, 1440);

            return response()->json([
                'token' => $token,
                'user' => $authUser,
                'userData' => $user
            ]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401); // Credenciais inválidas
        }
    }


    public function signup(Request $request)
    {

        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        $input['tipo_utilizador_id'] = 1;

        $user = User::create($input);

        $cliente = new Cliente([
            'user_id' => $user->id,
            'email' => $user->email,
            'nome_cliente' => $user->name,
        ]);

        $cliente->save();
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        Auth::logout();
    }
}
