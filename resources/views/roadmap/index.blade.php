@extends('layouts.app')

@section('content')
    
    <div class="container">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-primary">Roadmaps</h4>
                <ul>
                    @foreach ( $roadmaps as $roadmap )
                        <li> <a href="/roadmap/{{ $roadmap->id }}"> {{ $roadmap->kpi->name }} - {{ $roadmap->year }} </a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection