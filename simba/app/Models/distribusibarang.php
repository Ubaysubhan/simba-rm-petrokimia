<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class distribusibarang extends Model
{
    use HasFactory;

    protected $table='distribusibarang';
    protected $fillable = [
        'id_product',
        'tanggal',
        'requester',
        'keperluan',
        'provinsi',
        'kabupaten',
        'jumlahbarang',
        'status', 
      
      
    ];
    public function produk()
    {
        return $this->belongsTo(produk::class,'id_product');
    }
}

