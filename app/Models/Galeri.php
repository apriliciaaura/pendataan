<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
    protected $primaryKey = 'id_galeri';
    protected $fillable = ['gambar', 'keterangan'];

    public function galeri(){
    	return $this->belongsTo(Galeri::class);
    }
}
