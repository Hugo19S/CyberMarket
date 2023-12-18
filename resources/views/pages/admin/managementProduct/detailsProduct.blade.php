@extends('layouts.admin.main')

@section('title', 'Gerir compras')

@section('content')

    <div class="containerProductDetails">
        <div class="headerProduct">
            <h3>Detalhes do produto</h3>
        </div>
        <div class="compartment1">
            <div class="compartmentImage">
                <img src="/img/laptops.png" alt="">
            </div>
            <div class="compartmentData">
                <label>Nome do produto</label>
                <p> sfwrer</p>
                <label>Categoria</label>
                <p> sfwrer</p>
                <label>Tipo de produto</label>
                <p> sfwrer</p>
                <label>Sku</label>
                <p> sfwrer</p>
            </div>
        </div>
        <div class="compartment2">
            <label>Vendedor</label>
            <p>Cybermarket</p>
            <label>Fabricante</label>
            <p>Lenovo</p>
            <label>Modelo</label>
            <p>O - LEGION 5 15ACH6-276</p>
            <label>Preço</label>
            <p>869.99</p>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label>
                <textarea class="form-control" id="description" rows="3">O Portátil LENOVO 1 15IGL7 é um dispositivo compacto e leve, com um peso de 1,54 kg e medidas de 24 cm de largura, 36,2 cm de altura e 17,9 cm de profundidade. Este portátil vem equipado com um processador Intel Celeron N4020 com arquitetura Gemini Lake Refresh e dois núcleos, oferecendo uma velocidade de processamento de até 1,1 GHz, que pode ser aumentada para 2,8 GHz com o modo Turbo. A placa gráfica Intel UHD Graphics 600 integrada na CPU oferece gráficos nítidos e vibrantes.</textarea>
            </div>
        </div>
    </div>

@endsection
