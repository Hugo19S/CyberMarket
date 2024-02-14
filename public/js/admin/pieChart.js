google.charts.load('current', {'packages':['corechart']});

google.charts.setOnLoadCallback(() => {
    let data = new google.visualization.arrayToDataTable(dataFromContr);
    /*let data2 = new google.visualization.arrayToDataTable(dataFromContr);
    let data3 = new google.visualization.arrayToDataTable(dataFromContr);*/

    drawChart(data/*, data2, data3*/);
    window.addEventListener('resize', () => resizeCharts(data/*, data2, data3*/));
});

function drawChart(data/*, data2, data3*/) {
    let options = {
        title: 'My Daily Activities'
    };

    // Crie os gráficos
    let chart = new google.visualization.PieChart(document.getElementById('piechart'));
    /*let chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
    let chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));*/

    // Desenhe os gráficos
    chart.draw(data, options);
    /*chart2.draw(data2, options);
    chart3.draw(data3, options);*/
}

function resizeCharts(data/*, data2, data3*/) {
    // Atualize os gráficos quando o tamanho da tela for alterado
    drawChart(data/*, data2, data3*/);
}
