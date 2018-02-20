<?php

namespace App\Resources;

use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'minsal',
    ];

    public function user() {
    	return $this->belongsTo('\App\User');
    }
}
