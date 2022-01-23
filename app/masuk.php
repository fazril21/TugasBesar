<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class masuk extends Model
{
    protected $fillable = ['x', 'xs', 'm', 'l', 'xl', 'xxl', 'barang_id'];

    public function faculty()
    {
        return $this->belongsTo('App\barang', 'faculty_id', 'id');
    }
}
