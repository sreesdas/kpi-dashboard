@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-primary mb-4">Edit Roadmap</h3>

                <form action="/roadmap/{{ $roadmap->id }}" method="post">
                @csrf
                @method('PATCH')
                    <div class="row">
                        <div class="col-6 form-group">
                            <label for="name">Name</label>
                            <select name="kpi_id" class="form-control">
                                @foreach ($kpis as $kpi)
                                    <option value="{{ $kpi->id }}" @if( $roadmap->kpi_id == $kpi->id ) selected @endif> {{ $kpi->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <label for="year">Year</label>
                            <input type="text" class="form-control" name="year" value="{{ $roadmap->year }}">
                        </div>
                        <div class="col-6 form-group">
                            <label for="planned">Planned</label>
                            <input type="text" class="form-control" name="planned" value="{{ $roadmap->planned }}">
                        </div>
                        <div class="col-6 form-group">
                            <label for="actual">Actual</label>
                            <input type="text" class="form-control" name="actual" value="{{ $roadmap->actual }}">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary"> Update </button>
                            <button class="btn btn-outline-danger float-right" type="button"
                                onclick="document.getElementById('rm-roadmap').submit()"
                            > Delete </button>
                        </div>
                    </div>
                </form>
                <form class="d-none" id="rm-roadmap" action="/roadmap/{{ $roadmap->id }}" method="post"> 
                    @csrf 
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>

@endsection