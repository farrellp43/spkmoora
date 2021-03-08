<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    protected $fillable = ['nama', 'tipe', 'bobot'];

    public function value()
    {
        return $this->hasOne(Value::class);
    }
    
    public function classification()
    {
        return $this->hasMany(Classification::class);
    }
}
