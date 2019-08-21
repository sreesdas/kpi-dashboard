<?php

use App\Kpi;
use Illuminate\Database\Seeder;

class KpiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kpi::create([
            "name" => "Crude Oil Production Nomination",
            "tag" => "cop_nom",
            "category" => "Crude Oil",
            "unit" => "MMT"
        ]);

        Kpi::create([
            "name" => "Crude Oil Production Operator",
            "tag" => "cop_opr",
            "category" => "Crude Oil",
            "unit" => "MMT"
        ]);

        Kpi::create([
            "name" => "Natural Gas Production Nomination",
            "tag" => "ngp_nom",
            "category" => "Natural Gas",
            "unit" => "MMSCM"
        ]);
        
        Kpi::create([
            "name" => "Natural Gas Production Operator",
            "tag" => "ngp_opr",
            "category" => "Natural Gas",
            "unit" => "MMSCM"
        ]);

        Kpi::create([
            "name" => "Development Drilling Nomination",
            "tag" => "devdrill_nom",
            "category" => "Development Drilling",
            "unit" => "Nos"
        ]);

        Kpi::create([
            "name" => "Development Drilling Operation",
            "tag" => "devdrill_opr",
            "category" => "Development Drilling",
            "unit" => "Nos"
        ]);
        
    }
}
