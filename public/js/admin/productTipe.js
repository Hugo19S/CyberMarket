let selectCategory = document.getElementById('categorySelect');
let valorSelecionado = selectCategory.value;
response(valorSelecionado);
selectCategory.addEventListener('change', function () {
    let valorSelecionado = selectCategory.value;
    response(valorSelecionado)
});


function response(valorSelecionado) {

    fetch('http://127.0.0.1:8000/api/tipoproduto/' + valorSelecionado)
        .then(response => response.json())
        .then(data => {
            let productTypeSelected = data;

            // Selecionar o elemento select
            let selectElement = document.getElementById('productTypeSelect');

            // Limpar opções anteriores
            selectElement.innerHTML = '';

            // Iterar sobre os valores de productTypeSelected e adicionar opções ao select
            for (let key in productTypeSelected) {
                if (productTypeSelected.hasOwnProperty(key)) {
                    let optionElement = document.createElement('option');
                    optionElement.value = productTypeSelected[key].tipo_produto_id;
                    optionElement.innerText = productTypeSelected[key].nome_tipo_produto;
                    selectElement.appendChild(optionElement);
                }
            }
        })
        .catch(error => console.error('Erro ao obter dados:', error));
}


document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('productForm').addEventListener('submit', function (event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    function validateForm() {
        // Resetar estilos
        var formElements = document.querySelectorAll('#productForm .form-control');
        formElements.forEach(function (element) {
            element.classList.remove('invalidForm');
        });


        // Adicione suas regras de validação aqui
        var productName = document.getElementById('name').value;
        var productSku = document.getElementById('sku').value;
        var productPrice = document.getElementById('preco').value;
        var productModel = document.getElementById('modelo').value;
        var productQuantity = document.getElementById('quantidade').value;
        var productDescription = document.getElementById('description').value;
        var productVendedor = document.getElementById('vendedor').value;
        var productImage = document.getElementById('image').value;

        if (productName.trim() === '') {
            document.getElementById('name').classList.add('invalidForm');
        }

        if (productSku.trim() === '') {
            document.getElementById('sku').classList.add('invalidForm');
        }

        if (productModel.trim() === '') {
            document.getElementById('modelo').classList.add('invalidForm');
        }

        if (productVendedor.trim() === '') {
            document.getElementById('vendedor').classList.add('invalidForm');
        }

        if (productQuantity.trim() === '') {
            document.getElementById('quantidade').classList.add('invalidForm');
        }

        if (productDescription.trim() === '') {
            document.getElementById('description').classList.add('invalidForm');
        }


        if (productImage.trim() === '') {
            document.getElementById('image').classList.add('invalidForm');
        }

        if (isNaN(parseFloat(productPrice)) || parseFloat(productPrice) <= 0) {
            document.getElementById('preco').classList.add('invalidForm');
        }

        var invalidElements = document.querySelectorAll('#productForm .invalidForm');
        if (invalidElements.length > 0) {
            return false;
        }

        return true;
    }
});
