<?php

namespace App;

use App\Windpark;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turbine extends Model
{
    //Include softDeletes
    use SoftDeletes;

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
