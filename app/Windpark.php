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
}
