<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['namabaju', 'jenisbaju','xs', 'x', 'm', 'l', 'xl', 'xxl','jumlah'];

    public function masuks()
    {
        return $this->hasMany('App\masuk', 'barang_id', 'id');
    }
}
