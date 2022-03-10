<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $table = 'tarif';
    protected $primaryKey = 'id_tarif';
    protected $guarded = ['id_tarif'];

    public function PelangganId()
    {
        $this->hasOne('App\Pelanggan');
    }
}
