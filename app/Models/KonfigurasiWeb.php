<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfigurasiWeb extends Model
{
    protected $table = 'konfigurasi_web';
    protected $primaryKey = 'id_web';
    protected $fillable = ['nama_web', 'alamat_web', 'telepon', 'email', 'alamat_halaman_web', 'keyword', 'deskripsi_web'];

    public function konfigurasiweb(){
    	return $this->belongsTo(KonfigurasiWeb::class);
    }
}
