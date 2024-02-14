<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    function index()
    {
        //dados usado pelo grafico
        $dataVegaChart = [
            ['A', 28],
            ['B', 55],
            ['C', 43],
            ['D', 91],
            ['E', 81],
            ['F', 53],
            ['G', 19],
            ['H', 87]
        ];

        $last5Added = Http::get('http://127.0.0.1:8000/api/added/last5/' .Auth::id())->json();
        $last5Orders = Http::get('http://127.0.0.1:8000/api/orders/last5')->json();

        return view('pages.admin.home.home',compact('dataVegaChart', 'last5Added', 'last5Orders'));
    }

    function login(): View
    {
        return view('pages.admin.login.login');
    }


    function addProduct(): View
    {
        $allCategory = Http::get('http://127.0.0.1:8000/api/categorias')->json();
        $allFabricante = Http::get('http://127.0.0.1:8000/api/fabricante')->json();
        return view('pages.admin.addProduct.add', compact('allCategory', 'allFabricante'));
    }

    function editProduct($id): View
    {
        $product = Http::get('http://127.0.0.1:8000/api/produtos/' .$id)->json();
        $allCategory = Http::get('http://127.0.0.1:8000/api/categorias')->json();
        $allFabricante = Http::get('http://127.0.0.1:8000/api/fabricante')->json();
        return view('pages.admin.editProduct.edit', compact('product', 'allCategory', 'allFabricante', 'id'));
    }

    function store(Request $request)
    {
        //image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('images/products'), $imageName);
            $imagePath = '/images/products/' .$imageName;

            $response = Http::post('http://127.0.0.1:8000/api/addProduct', [
                'tipo_de_produto' => $request->input('tipo_de_produto'),
                'fabricante' => $request->input('fabricante'),
                'id' => Auth::id(),
                'name' => $request->input('name'),
                'sku' => $request->input('sku'),
                'descricao' => $request->input('descricao'),
                'preco' => $request->input('preco'),
                'vendedor' => $request->input('vendedor'),
                'quantidade' => $request->input('quantidade'),
                'modelo' => $request->input('modelo'),
                'image' => $imagePath
            ]);

            //dd($response);
        }

        return redirect('/secret/management/products');
    }

    function saveChanges(Request $request, $id)
    {
        //image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('images/products'), $imageName);
            $imagePath = '/images/products/' .$imageName;

            Http::put('http://127.0.0.1:8000/api/changeProduct', [
                'tipo_de_produto' => $request->input('tipo_de_produto'),
                'fabricante' => $request->input('fabricante'),
                'id' => Auth::id(),
                'name' => $request->input('name'),
                'sku' => $request->input('sku'),
                'descricao' => $request->input('descricao'),
                'preco' => $request->input('preco'),
                'vendedor' => $request->input('vendedor'),
                'quantidade' => $request->input('quantidade'),
                'modelo' => $request->input('modelo'),
                'image' => $imagePath,
                'id_product' => $id
            ]);
        }
        else{
            Http::put('http://127.0.0.1:8000/api/changeProduct', [
                'tipo_de_produto' => $request->input('tipo_de_produto'),
                'fabricante' => $request->input('fabricante'),
                'id' => Auth::id(),
                'name' => $request->input('name'),
                'sku' => $request->input('sku'),
                'descricao' => $request->input('descricao'),
                'preco' => $request->input('preco'),
                'vendedor' => $request->input('vendedor'),
                'quantidade' => $request->input('quantidade'),
                'modelo' => $request->input('modelo'),
                'id_product' => $id
            ]);
        }

        return redirect('/secret/management/products');
    }

    public function showProducts(): View
    {
        $allAddedProduct = Http::get('http://127.0.0.1:8000/api/added/' .Auth::id())->json();
        return view('pages.admin.managementProduct.products' ,compact('allAddedProduct'));
    }

    public function showProductDetails($id): View
    {
        $allAddedProduct = Http::get('http://127.0.0.1:8000/api/produtos/' .$id)->json();
        return view('pages.admin.managementProduct.detailsProduct', compact('allAddedProduct'));
    }

    function showOrder(): View
    {
        $orders = Http::get('http://127.0.0.1:8000/api/orders')->json();
        return view('pages.admin.managementOrder.order', compact('orders'));
    }

    function orderDetails($id): View
    {
        $orders = Http::get('http://127.0.0.1:8000/api/order/' .$id)->json();
        return view('pages.admin.managementOrder.details', compact('orders', 'id'));
    }

    function showAnalytics(): View
    {
        //dados usado pelo grafico
        $dataFromController = [
            ['Task', 'Hours per Day'],
            ['Work', 11],
            ['Eat', 2],
            ['Commute', 2],
            ['Watch TV', 2],
            ['Sleep', 7]
        ];

        return view('pages.admin.managementAnalytics.analytics',compact('dataFromController'));
    }

    public function deleteProduct($id){
        Http::get('http://127.0.0.1:8000/api/produto/delete/' .$id);
        return redirect()->back();
    }

    public function saveChangesOrder(Request $request){

        Http::put('http://127.0.0.1:8000/api/order/status',[
            'id' => $request['orderKey'],
            'status' => $request['status']
        ]);
        return redirect('/secret/management/order');
    }
}
