<?php

namespace App\Http\Controllers;

use App\Kpi;
use App\Category;
use App\Performance;
use Illuminate\Http\Request;
use App\QuarterlyPerformance;

class PerformanceController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        // $categories = Category::all();

        $kpis = Kpi::all();

        return view('performance.create', compact('kpis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'month' => 'required',
            'year' => 'required',
            'actual' => 'required',
            'planned' => 'required',
            'kpi' => 'required'
        ]);

        $does_exist = Performance::where([
            "month" => $request->month,
            "year" => $request->year,
            "kpi_id" => $request->kpi,
        ])->count() > 0;

        if( ! $does_exist ) {
            Performance::create([
                "month" => $request->month,
                "year" => $request->year,
                "planned" => $request->planned,
                "actual" => $request->actual,
                "kpi_id" => $request->kpi,
                "percentage" => round( $request->actual / $request->planned * 100, 2 ),
            ]);

            return redirect()->back()->with('success', 'KPI succesfully created!');
        }

        return redirect()->back()->with('error', 'KPI for the month already exists!');

    }

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
