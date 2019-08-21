<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" >

        <title>KPI Dashboard</title>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.1.95/css/materialdesignicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script src="/js/chart.min.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#">
                <img src="/img/ongc-logo.png" width="30" height="30" class="d-inline-block align-top mx-2" alt="">
                KPI DASHBOARD    
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link mdi mdi-account h4" href="#"> </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link mdi mdi-download h4" href="#"></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link mdi mdi-logout h4" href="#"></a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg py-0">
            <div class="list-group list-group-horizontal w-100">
                <a href="/dashboard/1" class="list-group-item list-group-item-action text-center text-white bg-1"> Crude Oil Production </a>
                <a href="/dashboard/2" class="list-group-item list-group-item-action text-center text-white bg-2">Natural Gas Production </a>
                <a href="/dashboard/3" class="list-group-item list-group-item-action text-center text-white bg-3"> CBM </a>
                <a href="/dashboard/4" class="list-group-item list-group-item-action text-center text-white bg-4"> Development Drilling </a>
                <a href="/monitoring" class="list-group-item list-group-item-action text-center text-white bg-5"> Monitoring </a>
            </div>
        </nav>
        {{-- <nav class="navbar navbar-expand-lg py-0">
            <div class="list-group list-group-horizontal w-100">
                <a href="#" class="list-group-item list-group-item-action text-center"> Exploration & Production </a>
                <a href="#" class="list-group-item list-group-item-action text-center">Refining & Marketing</a>
                <a href="#" class="list-group-item list-group-item-action text-center">Natural Gas</a>
                <a href="#" class="list-group-item list-group-item-action text-center">Common KPIs</a>
                <a href="#" class="list-group-item list-group-item-action text-center">Common KPIs</a>
            </div>
        </nav> --}}

        <main class="py-4">
            <div class="col-12">
                <div class="row">
                    @foreach ($kpis as $kpi)
                        <div class="col-4">
                            <a class="card-link" href="#">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"> {{ $kpi->name }} ( {{ $kpi->unit }}) </h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Actual (2019-20 -- ) </h6>
                                        @if( $kpi->performance->isNotEmpty() )
                                            <h1 class="text-success font-weight-bold"> {{ $kpi->performance->last()->actual }} 
                                                <span class="h4">( {{ round( $kpi->performance->last()->actual / $kpi->performance->last()->planned * 100 , 2 ) }} %)</span> 
                                            </h1>
                                        @endif
                                        <canvas id="canvas-{{ $kpi->tag }}"></canvas>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    
                    {{-- <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Award of new Exploration Acreages under OLAP Rounds (SKM) </h5>
                                <h6 class="card-subtitle mb-2 text-muted">Actual (2019-20 -- ) </h6>
                                <h1 class="text-success font-weight-bold"> 50,000 <span class="h4">(100%)</span> </h1>
                                <canvas id="myChart2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Award of new Exploration Acreages under OLAP Rounds (SKM) </h5>
                                <h6 class="card-subtitle mb-2 text-muted">Actual (2019-20 -- ) </h6>
                                <h1 class="text-success font-weight-bold"> 50,000 <span class="h4">(100%)</span> </h1>
                                <canvas id="myChart3"></canvas>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </main>

        <script>

            @foreach( $kpis as $kpi )

            var {{ "ctx_" . $kpi->tag }} = document.getElementById('{{ "canvas-" . $kpi->tag }}').getContext('2d');

            var {{ "chart_" . $kpi->tag }} = new Chart( {{ "ctx_" . $kpi->tag }}, {

                type: 'bar',
                data: {
                    labels: {!! $kpi->performance->pluck('month') !!},
                    datasets: [{
                        label: 'Planned',
                        data: {!! $kpi->performance->pluck('planned') !!},
                        backgroundColor: [
                            @foreach($kpi->performance as $performance) 'rgba(99, 133, 170, 0.9)', @endforeach
                        ],
                        borderColor: [
                            @foreach($kpi->performance as $performance) 'rgba(99, 133, 170, 1)', @endforeach
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'Actual',
                        data: {!! $kpi->performance->pluck('actual') !!},
                        backgroundColor: [
                            @foreach($kpi->performance as $performance) 'rgba(255, 99, 132, 0.2)', @endforeach
                            
                        ],
                        borderColor: [
                            @foreach($kpi->performance as $performance) 'rgba(255, 99, 132, 1)', @endforeach  
                        ],
                        borderWidth: 1
                    }
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            @endforeach

            
        
        </script>

    </body>
</html>
