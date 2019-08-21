<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $guarded = [];

    public function kpi() {
        return $this->belongsTo('App\Kpi');
    }
}
