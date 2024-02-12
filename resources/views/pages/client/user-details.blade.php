@extends('layouts.client.layout')

@section('content')

    <div class="my-4 max-w-screen-md border px-4 shadow-xl sm:mx-4 sm:rounded-xl sm:px-4 sm:py-4 md:mx-auto">
        <div class="flex flex-col border-b py-4 sm:flex-row sm:items-start">
            <div class="shrink-0 mr-auto sm:py-3">
                <p class="font-medium">Detalhes da Conta</p>
                <p class="text-sm text-gray-600">Edita os detalhes da tua conta</p>
            </div>
            <button
                class="mr-2 hidden rounded-lg border-2 px-4 py-2 font-medium text-gray-500 sm:inline focus:outline-none focus:ring hover:bg-gray-200">
                Cancel
            </button>
            <button
                class="hidden rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white sm:inline focus:outline-none focus:ring hover:bg-blue-700">
                Save
            </button>
        </div>
        <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
            <p class="shrink-0 w-32 font-medium">Nome</p>
            <input value="{{ session('name') }}"
                   class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" readonly/>
        </div>
        <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
            <p class="shrink-0 w-32 font-medium">Email</p>
            <input value="{{ Auth::user()->email }}"
                   class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1" readonly/>
        </div>
        <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
            <p class="shrink-0 w-32 font-medium">Número de Contribuinte</p>
            <input value="{{ $cliente->numero_contribuinte }}"
                   class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1"/>
        </div>
        <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
            <p class="shrink-0 w-32 font-medium">Morada</p>
            <input value="{{ $cliente->morada }}"
                   class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1"/>
        </div>
        <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
            <p class="shrink-0 w-32 font-medium">Telemóvel</p>
            <input value="{{ $cliente->telemovel }}"
                   class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1"/>
        </div>

        <div class="flex justify-end py-4 sm:hidden">
            <button
                class="mr-2 rounded-lg border-2 px-4 py-2 font-medium text-gray-500 focus:outline-none focus:ring hover:bg-gray-200">
                Cancel
            </button>
            <button
                class="rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white focus:outline-none focus:ring hover:bg-blue-700">
                Save
            </button>
        </div>
    </div>

@endsection
