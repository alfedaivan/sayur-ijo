<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    // use HasFactory;
    protected $table = 'histories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'alamat', 'catatan', 'total', 'session_id'
    ];

    public function cart()
    {
        return $this->belongsTo('app/Model/Keranjang');
    }
}
