<?php

namespace App\rrhh;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrganizationalUnit extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'organizational_units_id'
    ];

    public function user() {
    	return $this->hasMany('\App\User');
    }

    public function father() {
        return $this->hasOne('\App\rrhh\OrganizationalUnit','id', 'organizational_unit_id');
    }

    public function childs() {
        return $this->hasMany('\App\rrhh\OrganizationalUnit');
    }

    use SoftDeletes;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
