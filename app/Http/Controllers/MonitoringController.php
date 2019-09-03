<?php

namespace App\Http\Controllers;

use App\Kpi;
use App\Performance;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{

    public function index()
    {
        $id=99;
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

        return view('monitoring.index', compact( 'kpis', 'blank', 'id' ) );
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

        $ungrouped = Kpi::with('quarterly_performance')->get();

        $blank = Performance::create([
            "month" => "_blank",
            "year" => "_blank",
            "actual" => null,
            "planned" => null,
            "percentage" => null,
            "kpi_id" => 0
        ]);

        $kpis = $ungrouped->groupBy('category');

        return view('monitoring.quarterly', compact( 'kpis', 'blank' ) );
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
