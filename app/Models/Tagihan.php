<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $table = 'tagihan';
    protected $primaryKey = 'id_tagihan';
    protected $guarded = ['id_tagihan'];


    public function PenggunaanId()
    {
         $this->belongsTo('App\Penggunaan','id_penggunaan');
    }

    public function PelangganId()
    {
        $this->belongsTo('App\Pelanggan','id_pelanggan');
    }

    public function Pembayaran()
    {
        $this->hasOne('App\Pembayaran');
    }
}

