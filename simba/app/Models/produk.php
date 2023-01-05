<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    
    protected $table='product';
    protected $fillable = [
        'tanggal',
        'requester',
        'foto',
      'barangsekarang',
        'deskripsi',
        'barangawal',
    ];
    
    public function barangmasuk()
    {
        return $this->hasMany(barangmasuk::class, 'id_product', 'id');
    }
    public function barangkeluar()
    {
        return $this->hasMany(barangkeluar::class, 'id_product', 'id');
    }
}
