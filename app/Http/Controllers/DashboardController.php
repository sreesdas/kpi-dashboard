<?php

namespace App\Http\Controllers;

use App\Kpi;
use App\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {

        $kpis = Kpi::with('performance')->where('category', 'Crude Oil')->get();

        return view('dashboard.index', compact('kpis') );
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
        $category = Category::find($id);
        $kpis = Kpi::with('performance')->where('category', $category->name)->get();

        return view('dashboard.yearly', compact('kpis', 'id' ) );
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
