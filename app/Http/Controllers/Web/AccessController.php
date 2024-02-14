<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AccessController extends Controller
{
    function login(Request $request)
    {
        // Faz a solicitação POST para o endpoint de login da API
        $response = Http::post('http://127.0.0.1:8000/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Verifica se a resposta foi bem-sucedida e se contém um token
        if ($response->successful() && $response->json('token')) {
            // Autenticação bem-sucedida, armazena o token na sessão para uso posterior
            session(['token' => $response->json('token')]);
            $user = $response->json('user');
            session(['typeUserId' => $user['tipo_utilizador_id']]);


            // Obtém os detalhes do usuário retornados pela API

            // Autentica o usuário no Laravel
            Auth::loginUsingId($user['id']);
            $referer = request()->header('referer');
            $urlBefore = "http://127.0.0.1:9000/secret/login";
            if($user['tipo_utilizador_id'] == 1 && $referer != $urlBefore){

                return redirect('/');
            }
            else if ($user['tipo_utilizador_id'] == 2 && $referer == $urlBefore){

                return redirect('/secret/home');
            }else {
                Auth::logout();
                Http::get('http://127.0.0.1:8000/api/logout');
                return redirect()->back()->with('msg', 'Login inválido, tente novamente!');
            }
        }else {
            return redirect()->back()->with('msg', 'Login inválido, tente novamente!');
        }
    }

    public function logout(){

        Auth::logout();
        Http::get('http://127.0.0.1:8000/api/logout');

        if(session('typeUserId') == 1){
            return redirect('/');
        }
        else {
            return redirect('/secret/home');
        }
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        /*if ($validator->fails()) {
            // Return errors or redirect back with errors
            return $validator->errors();
        }*/

        Http::post('http://127.0.0.1:8000/api/register', [
            'name' => $request->input(['name']),
            'email' => $request->input(['email']),
            'password' => $request->input(['password']),
            'confirm_password' => $request->input(['confirm_password']),
        ]);
        return redirect('/');
    }
}
