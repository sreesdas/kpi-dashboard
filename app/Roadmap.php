<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    public function kpi() {
        return $this->belongsTo('App\Kpi');
    }
}
