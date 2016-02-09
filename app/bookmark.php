<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookmark extends Model
{
    //Get the user this belongs to
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
