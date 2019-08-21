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

        return view('monitoring.index', compact( 'kpis', 'blank' ) );
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
