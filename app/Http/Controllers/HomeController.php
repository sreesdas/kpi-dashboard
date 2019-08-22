<?php

namespace App\Http\Controllers;

use App\Kpi;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kpis = Kpi::with('performance')->where('category', 'Crude Oil')->get();
        return view('home', compact('kpis'));
    }

    public function show($id)
    {
        $category = Category::find($id);
        $kpis = Kpi::with('performance')->where('category', $category->name)->get();

        return view('home', compact('kpis') );
    }
}
