<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaki extends Model
{
    protected $table = 'pendaki';
    protected $primaryKey = 'id_pendaki';
    protected $fillable = ['nama', 'jenis_kelamin', 'jenis_identitas', 'no_identitas', 'alamat', 'no_hp', 'email', 'tanggal_berangkat', 'tanggal_kembali', 'status'];

    public function pendaki(){
    	return $this->belongsTo(Pendaki::class);
	}
}
