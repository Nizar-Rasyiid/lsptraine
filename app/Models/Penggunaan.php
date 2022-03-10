<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggunaan extends Model
{
    protected $table = 'penggunaan';
    protected $primaryKey = 'id_penggunaan';
    protected $guarded = ['id_penggunaan'];

    public function PelangganId()
    {
        $this->belongsTo('App\Pelanggan','id_pelanggan');
    }

    public function Tagihan()
    {
        $this->hasOne('App\Tagihan');
    }
}
