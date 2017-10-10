<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snapshot extends Model
{
    protected $table = 'snapshots';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function file(){
    	return $this->hasOne('App\File');
    }
}