google.charts.load('current', {'packages':['corechart']});

google.charts.setOnLoadCallback(() => {
    let data = new google.visualization.arrayToDataTable(dataFromContr);

    drawChart(data);
    window.addEventListener('resize', () => resizeCharts(data));
});

function drawChart(data) {
    let options = {
        title: 'My Daily Activities'
    };

    let chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}

function resizeCharts(data) {
    drawChart(data);
}
