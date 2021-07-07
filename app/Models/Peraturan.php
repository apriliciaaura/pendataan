<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $table = 'peraturan';
    protected $primaryKey = 'id_peraturan';
    protected $fillable = ['isi'];

    public function peraturan(){
    	return $this->belongsTo(Peraturan::class);
	}
}
