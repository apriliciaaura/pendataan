<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gunung extends Model
{
    protected $table = 'gunung';
    protected $primaryKey = 'id_gunung';
    protected $fillable = ['isi'];

    public function gunung(){
    	return $this->belongsTo(Gunung::class);
	}
}
