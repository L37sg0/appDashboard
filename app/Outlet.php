<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    //Table Name
    protected $table = 'outlets';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    // Boot method handles the on delete() to assign associated relations to unknown windpark
    public static function boot() {
        parent::boot();

        static::deleting(function($outlet) { // before delete() method call this
            $unknown = Outlet::firstOrCreate([
                'name'          => 'Непознат',
                'description'   => 'unknown',
                'substation_id' => 1
            ]);

            Turbine::where('outlet_id', $outlet->id)
                    ->update(['outlet_id' => $unknown->id]);
            Switchgear::where('outlet_id', $outlet->id)
                    ->update(['outlet_id' => $unknown->id]);
        });
    }

    //Relation with Outlets
    public function substation()
    {
        return $this->belongsTo('App\Substation');
    }

    //Relation with turbines
    public function turbines()
    {
        return $this->hasMany('App\Turbine');
    }

    //Relation with switchgears
    public function switchgears()
    {
        return $this->hasMany('App\Switchgear');
    }

}
