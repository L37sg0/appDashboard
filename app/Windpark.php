<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Windpark extends Model
{
    //Table Name
    protected $table = 'windparks';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    // Relationship to Turbines
    public function turbines()
    {
        return $this->hasMany('App\Turbine');
    }
}
