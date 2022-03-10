<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $guarded = ['id_user'];


    public function LevelId()
    {
        $this->belongsTo( 'App\Level','id_level');
    }

    public function Pembayaran()
    {
        $this->hasOne('App\Pembayaran');
    }
}
