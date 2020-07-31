<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $fillable = ['nama','catering','dekorasi','rias','tempat','harga','foto','user_id'];
    //
}
