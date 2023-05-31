<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class pembayaran extends Model
{   
    use HasApiTokens;
    use softDeletes;
    use HasFactory;

    protected $table = 'tb_pembayaran';
    protected $primaryKey = 'id';

    protected $fillable = [
        'bulan',
        'tipe',
        'jumlah_bayar',
        'awal_pembayaran',
        'id_admin'
    ];

    protected $hidden = [];
}
