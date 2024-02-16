<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AccessController extends Controller
{
    function login(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8000/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful() && $response->json('token')) {

            session(['token' => $response->json('token')]);
            $user = $response->json('user');
            session(['typeUserId' => $user['tipo_utilizador_id']]);
            session(['id' => $user['id']]);

            Auth::loginUsingId($user['id']);
            $referer = request()->header('referer');
            $urlBefore = "http://127.0.0.1:9000/secret/login";
            if ($user['tipo_utilizador_id'] == 1 && $referer != $urlBefore) {

                return redirect('/');
            } else if ($user['tipo_utilizador_id'] == 2 && $referer == $urlBefore) {

                return redirect('/secret/home');
            } else {
                Auth::logout();
                Http::get('http://127.0.0.1:8000/api/logout');
                return redirect()->back()->with('msg', 'Login inválido, tente novamente!');
            }
        } else {
            return redirect()->back()->with('msg', 'Login inválido, tente novamente!');
        }
    }

    public function logout()
    {

        Auth::logout();
        Http::get('http://127.0.0.1:8000/api/logout');

        if (session('typeUserId') == 1) {
            return redirect('/');
        } else {
            return redirect('/secret/home');
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);


        Http::post('http://127.0.0.1:8000/api/register', [
            'name' => $request->input(['name']),
            'email' => $request->input(['email']),
            'password' => $request->input(['password']),
        ]);
        return redirect('/');
    }
}
