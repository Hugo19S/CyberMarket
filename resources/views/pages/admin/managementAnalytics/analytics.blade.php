@extends('layouts.admin.main')

@section('title', 'Gerir compras')

@section('content')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        //variavel usado pelo arquivo js para criar os graficos
        let dataFromContr = {!! json_encode($dataFromController) !!};
    </script>
    <script type="text/javascript" src="/js/admin/pieChart.js"></script>

    <div class="analytics">
        <h1>Analise de acesso as páginas</h1>
        <div class="analytics-container">
            <div>
                <h3>Visitas as páginas</h3>
                <div class="analytics-group">
                    <div class="pie-info">
                        <table>
                            <thead>
                            <tr>
                                <th>Páginas</th>
                                <th>Visitas</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dataAnalytics['dataAnalytics'] as $dataAnalytic)
                                <tr>
                                    <td>{{$dataAnalytic['page_url']}}</td>
                                    <td>{{$dataAnalytic['page_views']}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="piechart" class="pie-chart"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
