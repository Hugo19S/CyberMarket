<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{
    public function signin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = Auth::user();
            $success['token'] = $authUser->createToken('MyAuthApp')->plainTextToken;

            session(['id' => $authUser->id]);
            session(['name' => $authUser->name]);
            session(['email' => $authUser->email]);
            session(['token' => $success['token']]);

            session()->save();

            return redirect()->route('home');

        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }


    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Error validation', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['tipo_utilizador_id'] = 1;

        $user = User::create($input);

        $cliente = new Cliente([
            'user_id' => $user->id,
            'email' => $user->email,
            'nome_cliente' => $user->name,
        ]);

        $cliente->save();
        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        Auth::guard('web')->logout();
        return redirect()->route('home');
    }

}
