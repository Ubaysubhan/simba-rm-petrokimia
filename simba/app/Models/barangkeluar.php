<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangkeluar extends Model
{
    use HasFactory;
    protected $table='barangkeluar';
    protected $fillable = [
        'tanggal',
        'requester',
       'keperluan',
       'provinsi',
        'kabupaten',
       'jumlahbarang',
       'jumlahbarangkeluar',
       
    ];
    public function produk()
    {
        return $this->belongsTo(produk::class,'id_product');
    }
}

