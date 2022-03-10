<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $guarded = ['id_pelanggan'];

    public function TarifId()
    {
        $this->belongsTo('App\Tarif','id_tarif');
    }
    public function Tagihan()
    {
        $this->hasOne('App\Tagihan');
    }

    public function Pembayaran()
    {
        $this->hasOne('App\Pembayaran');
    }
    public function Penggunaan()
    {
        $this->hasOne('App\Penggunaan');
    }

}
