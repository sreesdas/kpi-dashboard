@extends('layouts.app')

@section('content')

<div class="col-12">
                
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mb-4" >Key Performance Indicators
                    <span class="h6 mx-4">
                        <span>View By : </span>
                        <a class="mx-1" href="/monitoring">Monthly</a>
                        <a class="mx-1 font-weight-bold text-success" href="/monitoring/1" >Quarterly</a>
                        <a class="mx-1" href="#">Half Yearly</a>
                        <a class="mx-1" href="#">Annually</a>
                    </span>
                </h4>
                <div class="d-flex">
                    <div class="d-flex align-items-baseline mx-2"> <div class="square bg-50 mx-2"></div> 0% - 50%</div>
                    <div class="d-flex align-items-baseline mx-2"> <div class="square bg-99 mx-2"></div> 50% - 99%</div>
                    <div class="d-flex align-items-baseline mx-2"> <div class="square bg-100 mx-2"></div> 99% - 100%</div>
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 30%">KPI</th>
                        <th>Q1</th>
                        <th>Q2</th>
                        <th>Q3</th>
                        <th>Q4</th>
                        <th>Total</th>
                    </tr>

                    @foreach ($kpis as $set)
                        
                        <tr class="text-uppercase" style="background: #dbe3ec; color: #0f437d">
                            <th colspan="14">
                                {{ $set->first()->category }} 
                            </th>
                        </tr>

                        @foreach ($set as $kpi)
                            <tr>
                                <td> {{ $kpi->name }} </td>
                                @foreach ($kpi->quarterly_performance->pad( 4, $blank ) as $p )
                                    @if( $p->actual == null )
                                        <td> {{ $p->actual }} </td>    
                                    @elseif( $p->actual / $p->planned >= 0.99)
                                        <td class="bg-100"> {{ $p->actual }} </td>    
                                    @elseif( $p->actual / $p->planned >= 0.5 )
                                        <td class="bg-99"> {{ $p->actual }} </td>    
                                    @elseif( $p->actual / $p->planned > 0 )
                                        <td class="bg-50"> {{ $p->actual }} </td>    
                                    @endif
                                @endforeach

                                <td> {{ $kpi->quarterly_performance->sum('actual') }} </td>
                            </tr>
                        @endforeach


                        

                    @endforeach

                </thead>
            </table>

        </div>
    </div>

</div>
    
@endsection
