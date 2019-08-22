@extends('layouts.app')

@section('content')
    
<div class="col-12">
    <div class="row">
        @foreach ($kpis as $kpi)
            <div class="col-4">
                <a class="card-link" href="#">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $kpi->name }} ( {{ $kpi->unit }}) </h5>
                            <h6 class="card-subtitle mb-2 text-muted">Actual ( 2019-20 ) </h6>
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
    </div>

    <a href="/dashboard/{{ $id }}" class="fab" data-toggle="tooltip" data-placement="top" title="Monthly Reports">
        <i data-feather="bar-chart"></i>
    </a>

</div>

<script>

    @foreach( $kpis as $kpi )

    var {{ "ctx_" . $kpi->tag }} = document.getElementById('{{ "canvas-" . $kpi->tag }}').getContext('2d');
    var {{ "chart_" . $kpi->tag }} = new Chart( {{ "ctx_" . $kpi->tag }}, {
        type: 'bar',
        data: {
            labels: {!! $kpi->roadmaps->pluck('year') !!},
            datasets: [{
                label: 'Planned',
                data: {!! $kpi->roadmaps->pluck('planned') !!},
                backgroundColor: [
                    @foreach($kpi->roadmaps as $roadmap) 'rgba(99, 133, 170, 0.9)', @endforeach
                ],
                borderColor: [
                    @foreach($kpi->roadmaps as $roadmap) 'rgba(99, 133, 170, 1)', @endforeach
                ],
                borderWidth: 1
            },
            {
                label: 'Actual',
                data: {!! $kpi->roadmaps->pluck('actual') !!},
                backgroundColor: [
                    @foreach($kpi->roadmaps as $roadmap) 'rgba(255, 99, 132, 0.5)', @endforeach
                ],
                borderColor: [
                    @foreach($kpi->roadmaps as $roadmap) 'rgba(255, 99, 132, 1)', @endforeach  
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

@endsection