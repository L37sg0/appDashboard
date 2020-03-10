<?php

namespace App;

use App\Windpark;
use Illuminate\Database\Eloquent\Model;

class Turbine extends Model
{
    //Table Name
    protected $table = 'turbines';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    // Relationship to Winparks
    public function windpark()
    {
        return $this->belongsTo('App\Windpark');
    }
}
