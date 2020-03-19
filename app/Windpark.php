<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Windpark extends Model
{
    //Include softDelete method
    use SoftDeletes;

    //Table Name
    protected $table = 'windparks';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    //Protected fillabales
    protected $guarded = [];

    // Relationship to Turbines
    public function turbines()
    {
        return $this->hasMany('App\Turbine');
    }

    public static function boot() {
        parent::boot();
/*
        static::deleting(function($windpark) { // before delete() method call this
            $unknown = Windpark::firstOrCreate([
                'name'          => 'Непознат',
                'owner'         => 'unknown',
                'description'   => 'unknown',
            ]);

            Turbine::where('windpark_id', $windpark->id)
                    ->update(['windpark_id' => $unknown->id]);
        }); */

        static::deleting(function($windpark) { // before delete() method call this
            $windpark->turbines()->delete();
            // do the rest of the cleanup...
       });
    }
}
