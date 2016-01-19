<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Bear extends Model
{
    protected $fillable = array('name', 'type', 'danger_level');

    public function fish()
    {
        return $this->hasOne('Fish');
    }

    public function Trees()
    {
        return $this->hasMany('Tree');
    }

    public function picnics()
    {
        return $this->belongsToMany('Picnic', 'bears_picnics', 'bear_id', 'picnic_id');
    }
}
