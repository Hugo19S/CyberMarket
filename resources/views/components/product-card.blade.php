<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow p-1.5">
    <a href="/produtos/{{$produto['produto_id']}}">
        <img class="p-8 rounded-t-lg" src="{{ asset($produto['imagens'][0]['imagem_url']) }}" alt="product image"/>
    </a>

    <div class="px-5 pb-5">
        <a href="#">
            <h5 class="text-lg font-semibold tracking-tight text-gray-900 dark:text-black">{{ $produto['nome_produto'] }}</h5>
        </a>

        <div class="flex items-center justify-between mt-[15px]">
            <span class="text-xl font-bold text-gray-900 dark:text-black">
                {{ $produto['preco'] }}€
            </span>
        </div>
    </div>
</div>
