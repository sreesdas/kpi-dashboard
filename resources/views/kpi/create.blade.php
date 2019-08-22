@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="card">
            <div class="card-body">

                <h3 class="card-title mb-4">Create KPI</h3>

                <form action="/kpi/create" method="post">
                @csrf
                    <div class="row">
                        <div class="col-6 form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-6 form-group">
                            <label for="tag">Tag</label>
                            <input type="text" class="form-control" name="tag">
                        </div>
                        <div class="col-12 form-group">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control">
                                @foreach ($categories as $category )
                                    <option value="{{ $category->name }}"> {{ $category->name }} </option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <label for="unit">Unit</label>
                            <input type="text" class="form-control" name="unit">
                        </div>
                        <div class="col-6 form-group">
                            <label for="threshold">Threshold</label>
                            <input type="text" class="form-control" name="threshold" value="0" >
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection