<?php

namespace App\Http\Controllers;

use App\Kpi;
use App\Roadmap;
use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    public function index()
    {

        $roadmaps = Roadmap::all()->sortBy('kpi_id');

        return view('roadmap.index', compact('roadmaps'));
    }

    public function create()
    {
        $kpis = Kpi::all();

        return view('roadmap.create', compact('kpis'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kpi_id' => 'required|numeric',
            'year' => 'required',
            'planned' => 'required',
            'actual' => 'nullable'
        ]);

        Roadmap::create( $validated );

        return redirect()->back()->with('success', 'Roadmap Created!');

    }

    public function show($id)
    {
        $kpis = Kpi::all();
        $roadmap = Roadmap::find($id);

        return view('roadmap.show', compact('kpis', 'roadmap'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kpi_id' => 'required|numeric',
            'year' => 'required',
            'planned' => 'required',
            'actual' => 'required'
        ]);

        $roadmap = Roadmap::find($id);
        $roadmap->kpi_id = $request->kpi_id;
        $roadmap->year = $request->year;
        $roadmap->planned = $request->planned;
        $roadmap->actual = $request->actual;
        $roadmap->update();

        return redirect()->back()->with('success', 'Roadmap Updated');
    }

    public function destroy($id)
    {
        $roadmap = Roadmap::find($id);
        $roadmap->delete();

        return redirect('/roadmap')->with('success', 'Roadmap Deleted!');
    }
}
