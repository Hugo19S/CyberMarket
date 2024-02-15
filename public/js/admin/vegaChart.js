google.charts.load('upcoming', {'packages': ['vegachart']}).then(drawChart);

function drawChart() {
    const container = document.getElementById('vegachart');
    const dataTable = new google.visualization.DataTable();
    dataTable.addColumn({type: 'string', 'id': 'category'});
    dataTable.addColumn({type: 'number', 'id': 'amount'});
    dataTable.addRows(dataFromContr);

    const options = {
        "vega": {
            "$schema": "https://vega.github.io/schema/vega/v4.json",
            "width": "container",
            "height": "container",
            "padding": 5,

            'data': [{'name': 'table', 'source': 'datatable'}],

            "signals": [
                {
                    "name": "tooltip",
                    "value": {},
                    "on": [
                        {"events": "rect:mouseover", "update": "datum"},
                        {"events": "rect:mouseout", "update": "{}"}
                    ]
                }
            ],

            "scales": [
                {
                    "name": "xscale",
                    "type": "band",
                    "domain": {"data": "table", "field": "category"},
                    "range": "width",
                    "padding": 0.05,
                    "round": true
                },
                {
                    "name": "yscale",
                    "domain": {"data": "table", "field": "amount"},
                    "nice": true,
                    "range": "height"
                }
            ],

            "axes": [
                {"orient": "bottom", "scale": "xscale"},
                {"orient": "left", "scale": "yscale"}
            ],

            "marks": [
                {
                    "type": "rect",
                    "from": {"data": "table"},
                    "encode": {
                        "enter": {
                            "x": {"scale": "xscale", "field": "category"},
                            "width": {"scale": "xscale", "band": 1},
                            "y": {"scale": "yscale", "field": "amount"},
                            "y2": {"scale": "yscale", "value": 0}
                        },
                        "update": {
                            "fill": {"value": "steelblue"}
                        },
                        "hover": {
                            "fill": {"value": "red"}
                        }
                    }
                },
                {
                    "type": "text",
                    "encode": {
                        "enter": {
                            "align": {"value": "center"},
                            "baseline": {"value": "bottom"},
                            "fill": {"value": "#333"}
                        },
                        "update": {
                            "x": {"scale": "xscale", "signal": "tooltip.category", "band": 0.5},
                            "y": {"scale": "yscale", "signal": "tooltip.amount", "offset": -2},
                            "text": {"signal": "tooltip.category + ': ' + tooltip.amount"},
                            "fillOpacity": [
                                {"test": "datum === tooltip", "value": 0},
                                {"value": 1}
                            ]
                        }
                    }
                }
            ]
        }
    };

    function resize() {
        const width = container.clientWidth;
        const height = container.clientHeight;

        options.vega.width = width;
        options.vega.height = height;

        const chart = new google.visualization.VegaChart(container);
        chart.draw(dataTable, options);
    }
    resize();

    window.addEventListener('resize', resize);
}
