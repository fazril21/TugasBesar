<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keluar extends Model
{
    protected $fillable = [ 'jumlah',  'tglkeluar', 'barang_id'];

    public function barang()
    {
        return $this->belongsTo('App\Barang', 'barang_id', 'id');
    }
}
