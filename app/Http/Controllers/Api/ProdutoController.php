<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Imagem;
use App\Models\Produto;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function search(Request $request)
    {
        $termoPesquisa = $request->input('q');

        $resultados = Produto::with('imagens')->where('nome_produto', 'like', '%' . $termoPesquisa . '%')->get();

        return response()->json(['resultados' => $resultados]);
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
        $product = new Produto;
        $product->tipo_produto_id = $request->tipo_de_produto;
        $product->fabricante_id = $request->fabricante;
        $product->admin_id = $request->id;
        $product->nome_produto = $request->name;
        $product->sku = 'SKU' . $request->sku;
        $product->descricao = $request->descricao;
        $product->preco = $request->preco;
        $product->vendedor = $request->vendedor;
        $product->quantidade = $request->quantidade;
        $product->data_criacao = Carbon::now()->toDateTimeString();
        $product->modelo = $request->modelo;
        $product->save();

        $imageSave = new Imagem();
        $imageSave->produto_id = $product->produto_id;;
        $imageSave->imagem_url = $request->image;
        $imageSave->save();

        return response()->json(['productId' => $product->produto_id, 'imageId' => $imageSave->imagem_id]);
    }

    public function saveChanges(Request $request)
    {
        $product = Produto::findOrFail($request->id_product);
        if ($request->image){

            $this->saveProduct($product, $request);

            $imageSave = Imagem::findOrFail($request->id_product);
            $imageSave->update([
                $imageSave->imagem_url = $request->image
            ]);
        }else{
            $this->saveProduct($product, $request);
        }
        return response()->json(['productId' => $product->produto_id]);
    }

    public function saveProduct($product, $request): void
    {
        $product->update([
            $product->tipo_produto_id = $request->tipo_de_produto,
            $product->fabricante_id = $request->fabricante,
            $product->admin_id = $request->id,
            $product->nome_produto = $request->name,
            $product->sku = 'SKU' . $request->sku,
            $product->descricao = $request->descricao,
            $product->preco = $request->preco,
            $product->vendedor = $request->vendedor,
            $product->quantidade = $request->quantidade,
            $product->data_criacao = Carbon::now()->toDateTimeString(),
            $product->modelo = $request->modelo
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$produto = Produto::with('imagens')->find($id);

        $produto = Produto::with(['imagens' => function ($query) {
            $query->select('produto_id', 'imagem_url'); // Selecionar apenas o produto_id e a imagem_url
        }])->with(['tipoProduto.categoria' => function ($query) {
            $query->select('categoria_id', 'nome_categoria');
        }])
            ->find($id);


        if ($produto) {
            return response()->json(['produto' => $produto]);
        } else {
            return redirect()->route('pagina-de-erro');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     *
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Produto::where('produto_id', $id)->delete();
    }

    /**************** Consulta administrador ******************/

    public function allAddedProduct($id)
    {
        $last5Added = Produto::with(['imagens' => function ($query) {
            $query->select('produto_id', 'imagem_url'); // Selecionar apenas o produto_id e a imagem_url
        }])->with(['tipoProduto.categoria' => function ($query) {
            $query->select('categoria_id', 'nome_categoria');
        }])
            ->where('admin_id', '=', $id)
            ->orderBy('data_criacao', 'desc')
            ->get();

        return response()->json(['results' => $last5Added]);
    }

    public function returnLast5AddedProduct($id)
    {
        $last5Added = Produto::with(['imagens' => function ($query) {
            $query->select('produto_id', 'imagem_url'); // Selecionar apenas o produto_id e a imagem_url
        }])->with(['tipoProduto.categoria' => function ($query) {
            $query->select('categoria_id', 'nome_categoria');
        }])
            ->where('admin_id', '=', $id)
            ->orderBy('data_criacao', 'desc')
            ->take(5)->get();

        return response()->json(['results' => $last5Added]);
    }
}
