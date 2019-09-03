@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-primary mb-4">Create Roadmap</h3>

                <form action="/roadmap" method="post">
                @csrf
                    <div class="row">
                        <div class="col-6 form-group">
                            <label for="name">Name</label>
                            <select name="kpi_id" class="form-control">
                                @foreach ($kpis as $kpi)
                                    <option value="{{ $kpi->id }}"> {{ $kpi->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <label for="year">Year</label>
                            <input type="text" class="form-control" name="year">
                        </div>
                        <div class="col-6 form-group">
                            <label for="planned">Planned</label>
                            <input type="text" class="form-control" name="planned">
                        </div>
                        <div class="col-6 form-group">
                            <label for="actual">Actual</label>
                            <input type="text" class="form-control" name="actual" value="0.0">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary"> Submit </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection