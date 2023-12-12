@extends('layouts.admin.main')

@section('title', 'Management Product')

@section('content')

    <div>
        <div class="last_additions">
            <h1>Gestão de Compras</h1>
            <div class="management">
                @for ($i = 1; $i <= 16; $i++)

                    <x-product-box
                        image="/img/laptops.png"
                        first_button="btn btn-success"
                        second_button="btn btn-danger"
                        text_btn1="Aceitar"
                        text_btn2="Cancelar"
                        btn1_href="#"
                        btn2_href="#"
                    />
                @endfor
            </div>
        </div>
    </div>

@endsection
