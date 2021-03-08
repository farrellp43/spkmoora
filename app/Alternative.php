<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    protected $table = 'alternatives';
    protected $fillable = ['nama', 'kode', 'vegetasi_area', 'volume_material', 'luas_daerah', 'volume_tampungan', 'lama_operasi', 'harga_air', 'akses_jalan'];

    public function value()
    {
        return $this->hasOne(Value::class);
    }

    public function criteria()
    {
        return $this->hasOne(Criteria::class);
    }

}
