<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Substation extends Model
{
    //Table Name
    protected $table = 'substations';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    //Relation with Outlets
    public function outlets()
    {
        return $this->hasMany('App\Outlet');
    }
}
