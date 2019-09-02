<?php

namespace App\Http\Controllers;

use App\Kpi;
use App\Category;
use Illuminate\Http\Request;
use App\Performance;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = 1;
        $kpis = Kpi::with('performance')->where('category', 'Crude Oil')->get();
        return view('home', compact( 'kpis', 'id' ));
    }

    public function show($id)
    {
        $category = Category::find($id);
        $kpis = Kpi::with('performance')->where('category', $category->name)->get();

        return view('home', compact('kpis', 'id' ) );
    }

    public function test() {

        $kpis = Kpi::with('performance')->where('category', 'Crude Oil')->get();

        $total = [
            "planned" => [],
            "actual" => [],
            "unit" => "",
            "name" => "",
        ];

        foreach ($kpis as $kpi) {
            
            $planned = $kpi->performance->pluck('planned')->toArray();
            $actual = $kpi->performance->pluck('actual')->toArray();

            $total["unit"] = $kpi->unit;
            $total["name"] = $kpi->category . " Total";
            $total["tag"] = $kpi->category . "_tot";

            $total["planned"] = array_map(function () {
                return array_sum(func_get_args());
            }, $planned, $total["planned"] );

            $total["actual"] = array_map(function () {
                return array_sum(func_get_args());
            }, $actual, $total["actual"] );

        }

        return $total;

        $numbers = collect([1, 2, 3, 4, 5, 6, 7, 8 ]);
        $numbers = $numbers->pad(12, 0);
        $chunks = $numbers->chunk(3);

        $sequence = $chunks->mapSpread( function( $a, $b, $c ) {
            return $a + $b + $c;
        });

        return $sequence;

    }
}
