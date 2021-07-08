<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $primaryKey = 'id_pengumuman';
    protected $fillable = ['tanggal', 'judul', 'isi'];

    protected $casts = [
        'tanggal' => 'date:Y-m-d',
    ];

    public function pengumuman(){
    	return $this->belongsTo(Pengumuman::class);
	}
}
