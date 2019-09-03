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
        $id = 1;
        $kpis = Kpi::with('performance')->where('category', 'Exploration & Production')->get();
        return view('home', compact( 'kpis', 'id' ));
    }

    public function show($id)
    {
        $category = Category::find($id);
        $kpis = Kpi::with('performance')->where('category', $category->name)->get();

        return view('home', compact('kpis', 'id' ) );
    }

    public function test() {

        $numbers = collect([1, 2, 3, 4, 5, 6, 7, 8 ]);
        $numbers = $numbers->pad(12, 0);
        $chunks = $numbers->chunk(3);

        $sequence = $chunks->mapSpread( function( $a, $b, $c ) {
            return $a + $b + $c;
        });

        return $sequence;

    }
}
