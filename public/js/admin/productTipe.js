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
