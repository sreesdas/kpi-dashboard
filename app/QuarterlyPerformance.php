<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuarterlyPerformance extends Model
{

    protected $guarded = [];

    public function kpi() {
        return $this->belongsTo('App\Kpi');
    }
}
