<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'level';
    protected $primaryKey = 'id_level';
    protected $guarded = ['id_level'];


   public function UserId()
   {
       return $this->hasOne('App\Users','id_user');
   }
}
