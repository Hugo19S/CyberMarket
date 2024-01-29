@extends('layouts.admin.main')

@section('title', 'Gerir compras')

@section('content')

    <div class="containerProductDetails">
        <h1>Detalhes do produto</h1>
        <div class="compartment1">
            <div class="compartmentImage">
                <img src="/images/laptops.png" alt="">
            </div>
            <div class="compartmentData">
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">Nome do produto</th>
                        <td>HP 15s-fq5054ns</td>
                    </tr>
                    <tr>
                        <th scope="row">Categoria</th>
                        <td>Computador</td>
                    </tr>
                    <tr>
                        <th scope="row">Tipo de produto</th>
                        <td>Computador</td>
                    </tr>
                    <tr>
                        <th scope="row">SKU</th>
                        <td>651818</td>
                    </tr>
                    <tr>
                        <th scope="row">Vendedor</th>
                        <td>Mohamed hafez</td>
                    </tr>
                    <tr>
                        <th scope="row">Fabricante</th>
                        <td>Lenovo</td>
                    </tr>
                    <tr>
                        <th scope="row">Modelo</th>
                        <td>LEGION 5 15ACH6-276</td>
                    </tr>
                    <tr>
                        <th scope="row">Preço</th>
                        <td>869.99</td>
                    </tr>
                    <tr>
                        <th scope="row">Quantidade</th>
                        <td>25</td>
                    </tr>
                    <tr>
                        <th scope="row">Data de criação</th>
                        <td>01/01/2024</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="product-description">Descrição</label>
            <textarea class="form-control textareaDetails" id="description" rows="3">O Portátil LENOVO 1 15IGL7 é um dispositivo compacto e leve, com um peso de 1,54 kg e medidas de 24 cm de largura, 36,2 cm de altura e 17,9 cm de profundidade. Este portátil vem equipado com um processador Intel Celeron N4020 com arquitetura Gemini Lake Refresh e dois núcleos, oferecendo uma velocidade de processamento de até 1,1 GHz, que pode ser aumentada para 2,8 GHz com o modo Turbo. A placa gráfica Intel UHD Graphics 600 integrada na CPU oferece gráficos nítidos e vibrantes.</textarea>
        </div>

    </div>

@endsection
