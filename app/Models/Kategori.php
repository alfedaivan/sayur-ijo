<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategoris";
    protected $fillable = ['kategori'];
    public function produk(){
    	return $this->belongsTo('App\Models\Produk');
    }
}
