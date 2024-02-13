<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */



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
    public function atualizarCliente(Request $request, $id)
    {

        $request->validate([
            'numero_contribuinte' => 'required',
            'morada' => 'required',
            'telemovel' => 'required',
        ]);

        $cliente = Cliente::findOrFail($id);

        $cliente->update([
            'nif' => $request->input('numero_contribuinte'),
            'morada' => $request->input('morada'),
            'telemovel' => $request->input('telemovel'),
        ]);

        return response()->json(['message' => 'Cliente atualizado com sucesso'], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
