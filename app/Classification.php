<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    protected $fillable = ['criteria_id', 'value', 'classification'];

    public function criteria()
    {
        return $this->hasOne(Criteria::class);
    }
}
