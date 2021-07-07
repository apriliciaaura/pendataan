<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfigurasiUser extends Model
{
    protected $table = 'konfigurasi_user';
    protected $primaryKey = 'id_user';
    protected $fillable = ['nama', 'username', 'email'];

    public function konfigurasiuser(){
    	return $this->belongsTo(KonfigurasiUser::class);
	}
}
