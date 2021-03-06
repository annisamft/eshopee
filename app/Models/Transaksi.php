<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table='transaksi';
    public $timestamps = false;

    public function transaksi_detail(){
        return $this->hasMany('App\Models\TransaksiDetail');
    }
}
