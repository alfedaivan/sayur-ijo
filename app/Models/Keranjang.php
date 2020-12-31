<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    // use HasFactory;
    protected $table = 'carts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kuantitas', 'total_harga', 'product_id', 'session_id', 'product_name'
    ];

    public function product()
    {
        return $this->belongsTo('app/Models/Produk');
    }
}
