<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = ['namabaju', 'jenisbaju', 'stock'];

    public function masuk()
    {
        return $this->hasMany('App\masuk', 'barang_id', 'id');
    }
}
