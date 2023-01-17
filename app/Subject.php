<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    protected $fillable = [
        'period', 'level', 'code', 'name', 'lec', 'lab', 'units'
    ];

    public function sector(){
        return $this->belongsTo('App\Sector');
    }
}
