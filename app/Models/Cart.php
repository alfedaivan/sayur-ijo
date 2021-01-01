<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];
    // use HasFactory;
    protected $table = 'carts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'quantity', 'total_price', 'product_id', 'session_id', 'product_name'
    ];

    public function product()
    {
        return $this->belongsTo('app/Models/Product');
    }
}
