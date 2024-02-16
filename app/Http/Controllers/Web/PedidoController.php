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

    public function resumoEncomenda($pedidoId, $nomeCliente)
    {
        Http::withToken(''.session('token'))->post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>5
        ]);
        $cart = session('cart');
        $totalPrice = session('total');


        session()->forget('cart');

        return view('pages.client.order-summary',
            [
                'cart' => $cart,
                'totalPrice' => $totalPrice,
                'pedido_id' => $pedidoId,
                'nome_cliente' => $nomeCliente
            ]);
    }

    public function checkout()
    {
        Http::withToken(''.session('token'))->post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>3
        ]);
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
     * Store a newly created resource in storage.
     */

    public function processCheckout(Request $request)
    {

        $formData = $request->all();
        $cartData = session('cart');
        $total = session('total');
        $nomeCliente = $formData['nome_cliente'];


        $dataToSend = [
            'formData' => $formData,
            'cartData' => $cartData,
            'id' => Auth::id(),
            'total' => $total,
        ];


        $response = Http::withToken(''.session('token'))->post('http://127.0.0.1:8000/api/checkout', $dataToSend);

        $pedidoId = $response->json();


        if ($response->successful()) {

            return $this->resumoEncomenda($pedidoId, $nomeCliente);
        } else {
            return back()->withInput()->with('error', 'Erro ao processar o pedido.');
        }
    }
}
