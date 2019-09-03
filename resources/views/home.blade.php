@extends('layouts.app', [ "id" => $id ] )

@section('content')

<div class="col-12 mb-4">
    <div class="row">
        @foreach ($kpis as $kpi)
            <div class="col-4">
                <a class="card-link" href="#">
                    <div class="card mt-4 shadow-sm">
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
</div>

<a href="/dashboard/{{$id}}/yearly" class="fab" data-toggle="tooltip" data-placement="top" title="Yearly Reports">
    <i data-feather="map"></i>
</a>

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
                    @foreach($kpi->performance as $performance) 'rgba(255, 99, 132, 0.5)', @endforeach
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

@endsection
