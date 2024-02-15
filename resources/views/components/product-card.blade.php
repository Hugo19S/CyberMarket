<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow p-1.5 relative">
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

    <div class="absolute bottom-0 right-0 mb-4 mr-4">
        <p class="btn-holder">
            <a href="{{ route('addproduct.to.cart', $produto['produto_id']) }}"
               class="inline-block bg-green-500 text-white py-1 px-3 rounded-full hover:bg-green-600 transition-colors">
                <i class="fas fa-cart-plus mr-1"></i> Adicionar
            </a>
        </p>
    </div>
</div>
