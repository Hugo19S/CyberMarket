@props([
    'image',
    'first_button',
    'second_button',
    'text_btn1',
    'text_btn2',
    'btn1_href',
    'btn2_href'
])

<div class="productDetails">
    <div class="contentRelative" onclick="window.location.href='/secret/management/product/details/1';">
        <div class="imagDiv">
            <img src="{{$image}}" alt="product image">
        </div>
        <div class="productInfos">
            <div class="price">€549,99</div>
            <div class="productName">
                Lenovo Newest Flagship Chromebook, 14'' FHD Touchscreen Slim Thin Light Laptop Computer, 8-Core MediaTek
                Kompanio 520 Processor, 4GB RAM, 64GB eMMC, WiFi 6,Chrome
            </div>
            <div class="productCategory">
                <span>Categoria:</span>
                <div class="categoryDiv">
                    <span class="category">Computadores e Laptops</span>
                </div>
            </div>
            <div class="productProvider">
                <span>Vendedor:</span>
                <div class="categoryDiv">
                    <span class="category">SKYHE</span>
                </div>
            </div>
        </div>
    </div>
    <div class="containerButtons">
        <div class="buttonsOrg">
            <a href="{{ $btn1_href }}" class="{{$first_button}}">{{ $text_btn1 }}</a>
            <a href="{{ $btn2_href }}" class="{{$second_button}}">{{ $text_btn2 }}</a>
        </div>
    </div>
</div>
