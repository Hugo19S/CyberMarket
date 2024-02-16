<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function register()
    {
        Http::withToken(''.session('token'))->post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>8
        ]);
        return view('pages.client.register');
    }

    public function login()
    {
        Http::withToken(''.session('token'))->post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>4
        ]);
        return view('pages.client.login');
    }

    public function detalhesConta()
    {
        $user = Auth::user();
        $userId = $user->id;

        $cliente = Cliente::where('user_id', $userId)->first();

        Http::withToken(''.session('token'))->post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>9
        ]);
        return view('pages.client.user-details', ['cliente' => $cliente]);
    }

    public function atualizar(Request $request, $id)
    {

        $request->validate([
            'numero_contribuinte' => 'required',
            'morada' => 'required',
            'telemovel' => 'required',
        ]);

        $response = Http::withToken(''.session('token'))->put('http://127.0.0.1:8000/api/cliente/' . $id, [
            'numero_contribuinte' => $request->input('numero_contribuinte'),
            'morada' => $request->input('morada'),
            'telemovel' => $request->input('telemovel'),
        ]);


        if ($response->successful()) {
            return redirect()->route('cliente.detalhes', ['id' => session('id')])->with('success', 'Cliente atualizado com sucesso');
        } else {
            return back()->withInput()->with('error', 'Erro ao atualizar o cliente');
        }
    }
}
