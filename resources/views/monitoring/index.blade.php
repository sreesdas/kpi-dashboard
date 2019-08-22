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
                
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-4" >Key Performance Indicators
                                <span class="h6 mx-4">
                                    <span>View By : </span>
                                    <a class="mx-1" href="#">Monthly</a>
                                    <a class="mx-1" href="#">Quarterly</a>
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
    
                                            <td> {{ $kpi->performance->sum('actual') }} </td>
                                        </tr>
                                    @endforeach


                                    

                                @endforeach

                            </thead>
                        </table>

                    </div>
                </div>

            </div>
        </main>

    </body>
</html>
