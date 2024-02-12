@extends('layouts.client.layout')

@section('content')
    <div class="my-4 max-w-screen-md border px-4 shadow-xl sm:mx-4 sm:rounded-xl sm:px-4 sm:py-4 md:mx-auto">
        <div class="flex flex-col border-b py-4 sm:flex-row sm:items-start">
            <div class="shrink-0 mr-auto sm:py-3">
                <p class="font-medium">Detalhes da Conta</p>
                <p class="text-sm text-gray-600">Edita os detalhes da tua conta</p>
            </div>
        </div>

        <form id="editClientForm" action="{{ route('cliente.atualizar', ['id' => $cliente->cliente_id]) }}"
              method="POST">
            @csrf
            @method('PUT')

            <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                <p class="shrink-0 w-32 font-medium">Nome</p>
                <input value="{{ $cliente->nome_cliente }}" readonly id="nomeInput"
                       class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1 readonly-bg"/>
            </div>
            <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                <p class="shrink-0 w-32 font-medium">Email</p>
                <input value="{{ $cliente->email }}" readonly id="emailInput"
                       class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1 readonly-bg"/>
            </div>
            <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                <p class="shrink-0 w-32 font-medium">Número de Contribuinte</p>
                <input name="numero_contribuinte" value="{{ $cliente->nif }}" readonly id="nifInput"
                       class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1 readonly-bg"/>
            </div>
            <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                <p class="shrink-0 w-32 font-medium">Morada</p>
                <input name="morada" value="{{ $cliente->morada }}" readonly id="moradaInput"
                       class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1 readonly-bg"/>
            </div>
            <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
                <p class="shrink-0 w-32 font-medium">Telemóvel</p>
                <input name="telemovel" value="{{ $cliente->telemovel }}" readonly id="telemovelInput"
                       class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1 readonly-bg"/>
            </div>


        </form>

        <div class="hidden sm:flex justify-end mt-4">
            <button onclick="editClient()" id="editButtonDesktop"
                    class="rounded-lg border-2 px-4 py-2 font-medium text-gray-500 focus:outline-none focus:ring hover:bg-gray-200  mr-2">
                Editar
            </button>
            <button type="submit" form="editClientForm" id="saveButtonDesktop"
                    class="rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white focus:outline-none focus:ring hover:bg-blue-700">
                Guardar
            </button>
        </div>

        <div class="flex justify-end mt-4 sm:hidden">
            <button onclick="editClient()" id="editButtonMobile"
                    class="rounded-lg border-2 px-4 py-2 font-medium text-gray-500 focus:outline-none focus:ring hover:bg-gray-200 mr-2 mb-2">
                Editar
            </button>
            <button type="submit" id="saveButtonMobile"
                    class="rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white focus:outline-none focus:ring hover:bg-blue-700 mb-2">
                Guardar
            </button>
        </div>

    </div>

    <style>
        .readonly-bg[readonly] {
            background-color: #f9f9f9;
        }

        .readonly-bg[readonly]:focus {
            outline: none;
            border-color: transparent;
            box-shadow: none;
        }
    </style>

    <script>
        function editClient() {
            var inputs = document.querySelectorAll('input[readonly]');
            inputs.forEach(function (input) {
                if (input.id !== 'nomeInput' && input.id !== 'emailInput') {
                    input.removeAttribute('readonly');
                }
            });

            var editButton = document.getElementById('editButton');
            var editButtonMobile = document.getElementById('editButtonMobile');
            var editButtonDesktop = document.getElementById('editButtonDesktop');
            var saveButton = document.getElementById('saveButton');
            var saveButtonMobile = document.getElementById('saveButtonMobile');
            var saveButtonDesktop = document.getElementById('saveButtonDesktop');

            editButton.classList.add('hidden');
            editButtonMobile.classList.add('hidden');
            editButtonDesktop.classList.add('hidden');

            saveButton.classList.remove('hidden');
            saveButtonMobile.classList.remove('hidden');
            saveButtonDesktop.classList.remove('hidden');
        }
    </script>
@endsection
