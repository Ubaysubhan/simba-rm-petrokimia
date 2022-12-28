<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    
    protected $table='Dashboard';
    protected $fillable = [
        'tanggal',
        'requester',
        'foto',
        'barang',
        'deskripsi',
        'barangmasuk',
    ];
    

}
