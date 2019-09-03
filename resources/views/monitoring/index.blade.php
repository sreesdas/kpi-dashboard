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
                        <a class="mx-1" href="/monitoring/1">Quarterly</a>
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
                        <th style="width: 20%">KPI</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                        <th>Jul</th>
                        <th>Aug</th>
                        <th>Sep</th>
                        <th>Oct</th>
                        <th>Nov</th>
                        <th>Dec</th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
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
                                @foreach ($kpi->performance->pad( 12, $blank ) as $p )
                                    @if( $p->percentage == null )
                                        <td> {{ $p->actual }} </td>    
                                    @elseif( $p->percentage >= 99)
                                        <td class="bg-100"> {{ $p->actual }} </td>    
                                    @elseif( $p->percentage >= 50 )
                                        <td class="bg-99"> {{ $p->actual }} </td>    
                                    @elseif( $p->percentage > 0 )
                                        <td class="bg-50"> {{ $p->actual }} </td>    
                                    @endif
                                @endforeach 

                                <td> {{ $kpi->roadmaps->first() ? $kpi->roadmaps->first()->actual : '0.0' }} </td>
                            </tr>
                        @endforeach

                    @endforeach

                </thead>
            </table>

        </div>
    </div>

</div>
    
@endsection