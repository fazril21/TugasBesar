<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = ['code', 'namabaju', 'jenisbaju', 'namapenjahit', 'stock', 'tgl_masuk'];
}
