<?php

namespace App\Http\Controllers;
use \Illuminate\Contracts\View\View;
use App\Models\Produto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        return view('pages.admin.home.home');
    }

    function login(): View {
        return view('pages.admin.login.login');
    }

    function verify() {
        return redirect('/secret/login')->with('msg', 'Login inválido, tente novamente!');
    }

    function addProduct(): View {
        return view('pages.admin.addProduct.add');
    }
    function editProduct(): View {
        return view('pages.admin.editProduct.edit');
    }

    function store(Request $request) {
        $produto = new Produto;
        $produto->categoria = $request->input('categoria');
        $produto->tipo = $request->input('tipo_de_produto');
        $produto->nome_produto = $request->input('name');
        $produto->sku = $request->input('sku');
        $produto->fabricante = $request->input('fabricante');
        $produto->vendedor = $request->input('vendedor');
        $produto->modelo = $request->input('modelo');
        $produto->preco_produto = $request->input('preco');
        $produto->quantidade = $request->input('quantidade');
        $produto->desciption = $request->input('descricao');

        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")). "." . $extension;
            $requestImage->move(public_path('img/products'), $imageName);
            $produto->image = $imageName;
        }

        $produto->save();
        return redirect('/secret/home');
    }

    public function showProduct(): View
    {
        return view('pages.admin.managementProduct.product');
    }
    function showOrder(): View
    {
        return view('pages.admin.managementOrder.order');
    }
}
