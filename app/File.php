<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';

    public function snapshot()
    {
    	return $this->belongsTo('App\Snapshot');
    }
}