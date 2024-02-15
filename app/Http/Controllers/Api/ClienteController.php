<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

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

}
