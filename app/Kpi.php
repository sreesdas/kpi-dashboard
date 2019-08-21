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
}
