<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $guarded = ['id_pembayaran'];

    public function TagihanId()
    {
        $this->belongsTo('App\Tagihan','id_tagihan');
    }

    public function PelangganId()
    {
        $this->belongsTo('App\Pelanggan','id_pelanggan');
    }

    public function UsersId()
    {
        $this->belongsTo('App\Users','id_user');
    }
}

