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
      
        'deskripsi',
        'barangmasuk',
    ];
    

}
