<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class detail_pembayaran extends Model
{
    use softDeletes;
    use HasFactory;

    protected $table = 'tb_detail_pembayaran';
    protected $fillable = [
        'jumlah_pembayaran',
        'tanggal_pembayaran',
        'status_pembayaran',
    ];

    protected $hidden = [];
}
