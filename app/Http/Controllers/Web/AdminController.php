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
        $dataAnalytics = Http::get('http://127.0.0.1:8000/api/data-analytics')->json();

        $count = 0;
        foreach ($dataAnalytics['dataAnalytics'] as $dataAnalytic) {
            if ($count < 10) {
                $dataVegaChart[] = [$dataAnalytic['page_url'], $dataAnalytic['page_views']];
                $count++;
            }
        }
        $dataAnalytics = $dataVegaChart;

        /*dd($dataAnalytics);*/

        $last5Added = Http::get('http://127.0.0.1:8000/api/added/last5/' . Auth::id())->json();
        $last5Orders = Http::get('http://127.0.0.1:8000/api/orders/last5')->json();

        Http::post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>12
        ]);

        return view('pages.admin.home.home', compact('dataVegaChart', 'last5Added', 'last5Orders', 'dataAnalytics'));
    }

    function login(): View
    {
        Http::post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>13
        ]);
        return view('pages.admin.login.login');
    }


    function addProduct(): View
    {
        $allCategory = Http::get('http://127.0.0.1:8000/api/categorias')->json();
        $allFabricante = Http::get('http://127.0.0.1:8000/api/fabricante')->json();
        Http::post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>10
        ]);
        return view('pages.admin.addProduct.add', compact('allCategory', 'allFabricante'));
    }

    function editProduct($id): View
    {
        $product = Http::get('http://127.0.0.1:8000/api/produtos/' . $id)->json();
        $allCategory = Http::get('http://127.0.0.1:8000/api/categorias')->json();
        $allFabricante = Http::get('http://127.0.0.1:8000/api/fabricante')->json();
        Http::post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>11
        ]);
        return view('pages.admin.editProduct.edit', compact('product', 'allCategory', 'allFabricante', 'id'));
    }

    function store(Request $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('images/products'), $imageName);
            $imagePath = '/images/products/' . $imageName;

            Http::post('http://127.0.0.1:8000/api/addProduct', [
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

        }

        return redirect('/secret/management/products');
    }

    function saveChanges(Request $request, $id)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('images/products'), $imageName);
            $imagePath = '/images/products/' . $imageName;

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
        } else {
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
        $allAddedProduct = Http::get('http://127.0.0.1:8000/api/added/' . Auth::id())->json();
        Http::post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>18
        ]);
        return view('pages.admin.managementProduct.products', compact('allAddedProduct'));
    }

    public function showProductDetails($id): View
    {
        $allAddedProduct = Http::get('http://127.0.0.1:8000/api/produtos/' . $id)->json();
        Http::post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>17
        ]);
        return view('pages.admin.managementProduct.detailsProduct', compact('allAddedProduct'));
    }

    function showOrder(): View
    {
        $orders = Http::get('http://127.0.0.1:8000/api/orders')->json();
        Http::post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>16
        ]);
        return view('pages.admin.managementOrder.order', compact('orders'));
    }

    function orderDetails($id): View
    {
        $orders = Http::get('http://127.0.0.1:8000/api/order/' . $id)->json();
        Http::post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>15
        ]);
        return view('pages.admin.managementOrder.details', compact('orders', 'id'));
    }

    function showAnalytics(): View
    {
        $dataAnalytics = Http::get('http://127.0.0.1:8000/api/data-analytics')->json();

        $dataFromController = [['Task', 'Hours per Day']];

        foreach ($dataAnalytics['dataAnalytics'] as $dataAnalytic) {
            $dataFromController[] = [$dataAnalytic['page_url'], $dataAnalytic['page_views']];
        }

        Http::post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>14
        ]);

        return view('pages.admin.managementAnalytics.analytics', compact('dataFromController', 'dataAnalytics'));
    }

    public function deleteProduct($id)
    {
        Http::get('http://127.0.0.1:8000/api/produto/delete/' . $id);
        return redirect()->back();
    }

    public function saveChangesOrder(Request $request)
    {

        Http::put('http://127.0.0.1:8000/api/order/status', [
            'id' => $request['orderKey'],
            'status' => $request['status']
        ]);
        return redirect('/secret/management/order');
    }
}
