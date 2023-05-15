<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use softDeletes;
    use HasFactory;

    protected $table = 'tb_pembayaran';
    protected $fillable = [
        'jenis_pembayaran',
        'terakhir_pembayaran',
        'awal_pembayaran',
        'jumlah_pembayaran'
    ];

    protected $hidden = [];
}
