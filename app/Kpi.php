<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kpi extends Model
{
    protected $guarded = [];

    public function performance() {
        return $this->hasMany('App\Performance');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function roadmaps() {
        return $this->hasMany('App\Roadmap');
    }

    public function quarterly_performance() {
        return $this->hasMany('App\QuarterlyPerformance');
    }
}
