@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="card">
        <div class="card-body">
            
            <h3 class="card-title mb-4"> Fill KPI Data</h3>
            <form action="/performance" method="post">
            @csrf 
                <div class="row">
                    <div class="form-group col-12">
                        <label for="kpi">KPI Category</label>
                        <select name="kpi" id="kpi" class="form-control">
                            @foreach ($kpis as $kpi)
                                <option value="{{ $kpi->id }}"> {{ $kpi->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="month">Month</label>
                        <select name="month" id="month" class="form-control">
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="Jul">Jul</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="year">Year</label>
                        <select name="year" id="year" class="form-control">
                            @for ($i = 2019; $i < 2025; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="planned">Planned</label>
                        <input type="text" class="form-control" name="planned" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="actual">Actual</label>
                        <input type="text" class="form-control" name="actual" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</div>
@endsection