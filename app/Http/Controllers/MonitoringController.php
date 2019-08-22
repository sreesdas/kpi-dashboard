<?php

namespace App\Http\Controllers;

use App\Kpi;
use App\Performance;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{

    public function index()
    {
        $ungrouped = Kpi::with('performance')->get();
            
        $blank = Performance::create([
            "month" => "_blank",
            "year" => "_blank",
            "actual" => null,
            "planned" => null,
            "percentage" => null,
            "kpi_id" => 0
        ]);
    
        $kpis = $ungrouped->groupBy('category');

        return view('monitoring.index2', compact( 'kpis', 'blank' ) );
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
