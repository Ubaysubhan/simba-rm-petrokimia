<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangmasuk extends Model
{
    use HasFactory;
    protected $table='barangmasuks';
    protected $fillable = [
        'tanggal',
        'requester',
       'jumlahbarang',
      
    ];
    public function produk()
    {
        return $this->belongsTo(produk::class,'id_product');
    }
}
