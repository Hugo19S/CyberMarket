<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function register()
    {
        return view('pages.client.register');
    }

    public function login()
    {
        return view('pages.client.login');
    }

    public function detalhesConta()
    {

        $user = Auth::user();
        $userId = $user->id;

        $cliente = Cliente::where('user_id', $userId)->first();


        return view('pages.client.user-details',['cliente' => $cliente]);

    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'numero_contribuinte' => 'required',
            'morada' => 'required',
            'telemovel' => 'required',
        ]);

        $cliente = Cliente::findOrFail($id);

        $cliente->update($validatedData);

        return redirect()->back()->with('success', 'Detalhes da conta atualizados com sucesso.');
    }


    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
