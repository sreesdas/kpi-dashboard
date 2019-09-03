<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{

    public function run()
    {
        // Category::create([ "name" => "Crude Oil" ]);
        // Category::create([ "name" => "Natural Gas" ]);
        // Category::create([ "name" => "CBM" ]);
        // Category::create([ "name" => "Development Drilling" ]);
        // Category::create([ "name" => "Well Status" ]);

        Category::create([ "name" => "Exploration & Production" ]);
        Category::create([ "name" => "Common KPIs" ]);
    }
}
