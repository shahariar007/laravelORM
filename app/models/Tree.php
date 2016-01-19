<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    protected $table='trees';
    protected $fillable = array('type', 'age', 'bear_id');
    public function bear()
    {
        return $this->belongsTo('Bear');
    }
}
