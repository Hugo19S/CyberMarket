<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function resumoEncomenda()
    {


        return view('pages.client.order-summary');
    }

    public function checkout()
    {
        /* dd(session('cart'));*/
        $user = Auth::user();
        $userId = $user->id;
        $cliente = Cliente::where('user_id', $userId)->first();

        return view('pages.client.checkout', ['cliente' => $cliente]);

    }

    public function index()
    {
        return view('pages.client.order-summary');
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

    public function processCheckout(Request $request)
    {
        /*$request->validate([
            'formData.nome_cliente' => 'required',
            'formData.email' => 'required|email',
            'formData.morada' => 'required',
            'formData.nif' => 'required|numeric',
            'formData.telemovel' => 'required|numeric',
            'cartData' => 'required|array|min:1',
            'payment_method' => 'required',
        ]);*/

        $formData = $request->all();
        $cartData = session('cart');
        $total = session('total');


        $dataToSend = [
            'formData' => $formData,
            'cartData' => $cartData,
            'id' => Auth::id(),
            'total' => $total,
        ];


        $response = Http::post('http://127.0.0.1:8000/api/checkout', $dataToSend);

        if ($response->successful()) {
            session()->put('cart', []);

            return redirect()->route('home');
        } else {
            return back()->withInput()->with('error', 'Erro ao processar o pedido.');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
