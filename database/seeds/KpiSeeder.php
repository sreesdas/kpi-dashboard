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
            "name" => "Award of new exploration acreages under OALP Rounds",
            "tag" => "award_oalp",
            "category" => "Exploration & Production",
            "unit" => "SKM"
        ]);

        Kpi::create([
            "name" => "Accelerating 2D & 3D seismic surveys ",
            "tag" => "seismic_survey",
            "category" => "Exploration & Production",
            "unit" => "2D - LKM"
        ]);

        Kpi::create([
            "name" => "Revival of sick/ un-flowing wells ",
            "tag" => "sick_well",
            "category" => "Exploration & Production",
            "unit" => "Nos"
        ]);

        Kpi::create([
            "name" => "Discoveries monetized",
            "tag" => "dis_mon",
            "category" => "Exploration & Production",
            "unit" => "Nos"
        ]);

        Kpi::create([
            "name" => "Crude oil production",
            "tag" => "crude_prod",
            "category" => "Exploration & Production",
            "unit" => "MMT"
        ]);

        Kpi::create([
            "name" => "Natural gas production",
            "tag" => "gas_prod",
            "category" => "Exploration & Production",
            "unit" => "BCM"
        ]);

        Kpi::create([
            "name" => "Total CAPEX across hydrocarbon sector",
            "tag" => "tot_capex",
            "category" => "Common KPIs",
            "unit" => "INR Crore"
        ]);

        Kpi::create([
            "name" => "Skilling efforts by O&G PSUs",
            "tag" => "skill_psu",
            "category" => "Common KPIs",
            "unit" => "Nos"
        ]);

        Kpi::create([
            "name" => "R&D expenditure by major O&G PSUs",
            "tag" => "rnd_exp",
            "category" => "Common KPIs",
            "unit" => "INR Crore"
        ]);

        // Kpi::create([
        //     "name" => "Crude Oil Production Nomination",
        //     "tag" => "cop_nom",
        //     "category" => "Crude Oil",
        //     "unit" => "MMT"
        // ]);

        // Kpi::create([
        //     "name" => "Crude Oil Production Operator",
        //     "tag" => "cop_opr",
        //     "category" => "Crude Oil",
        //     "unit" => "MMT"
        // ]);

        // Kpi::create([
        //     "name" => "Natural Gas Production Nomination",
        //     "tag" => "ngp_nom",
        //     "category" => "Natural Gas",
        //     "unit" => "MMSCM"
        // ]);
        
        // Kpi::create([
        //     "name" => "Natural Gas Production Operator",
        //     "tag" => "ngp_opr",
        //     "category" => "Natural Gas",
        //     "unit" => "MMSCM"
        // ]);

        // Kpi::create([
        //     "name" => "Development Drilling Nomination",
        //     "tag" => "devdrill_nom",
        //     "category" => "Development Drilling",
        //     "unit" => "Nos"
        // ]);

        // Kpi::create([
        //     "name" => "Development Drilling Operation",
        //     "tag" => "devdrill_opr",
        //     "category" => "Development Drilling",
        //     "unit" => "Nos"
        // ]);
        
    }
}
