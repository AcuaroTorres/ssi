<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Role extends Eloquent
{
    public function users() {
    	return $this->belongsToMany(User::class);
    }
}
