<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    protected $guarded = [];

    public function kpi() {
        return $this->belongsTo('App\Kpi');
    }
}
