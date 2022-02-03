<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
    protected $fillable = ['xs', 'x', 'm', 'l', 'xl', 'xxl', 'jumlah', 'namapenjahit', 'tglmasuk', 'barang_id'];

    public function barang()
    {
        return $this->belongsTo('App\Barang', 'barang_id', 'id');
    }
}
