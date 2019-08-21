<?php

use App\Performance;
use Illuminate\Database\Seeder;

class PerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Performance::create([
            "month" => "Apr",
            "year" => "2019",
            "planned" => 1.1,
            "actual" => 1.2,
            "kpi_id" => 1,
        ]);

        Performance::create([
            "month" => "May",
            "year" => "2019",
            "planned" => 2.1,
            "actual" => 3.2,
            "kpi_id" => 1,
        ]);

        Performance::create([
            "month" => "Jun",
            "year" => "2019",
            "planned" => 1.5,
            "actual" => 1.4,
            "kpi_id" => 1,
        ]);

        Performance::create([
            "month" => "Apr",
            "year" => "2019",
            "planned" => 5.1,
            "actual" => 4.2,
            "kpi_id" => 2,
        ]);

        Performance::create([
            "month" => "May",
            "year" => "2019",
            "planned" => 5.6,
            "actual" => 4.9,
            "kpi_id" => 2,
        ]);

        Performance::create([
            "month" => "Apr",
            "year" => "2019",
            "planned" => 25.1,
            "actual" => 24.2,
            "kpi_id" => 3,
        ]);

        Performance::create([
            "month" => "Apr",
            "year" => "2019",
            "planned" => 12.1,
            "actual" => 14.2,
            "kpi_id" => 4,
        ]);

        Performance::create([
            "month" => "Apr",
            "year" => "2019",
            "planned" => 67,
            "actual" => 55,
            "kpi_id" => 5,
        ]);

        Performance::create([
            "month" => "Apr",
            "year" => "2019",
            "planned" => 89,
            "actual" => 78,
            "kpi_id" => 6,
        ]);

        
    }
}
