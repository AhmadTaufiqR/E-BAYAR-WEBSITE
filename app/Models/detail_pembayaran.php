<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Carbon;

class detail_pembayaran extends Model
{
    use softDeletes;
    use HasApiTokens;
    use HasFactory;

    protected $table = 'tb_detail_pembayaran';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_pembayaran',
        'id_siswa',
        'transaction_id',
        'order_id',
        'tipe_pembayaran',
        'jumlah',
        'status_pembayaran',
        'created_at',
        'updated_at'
    ];

    public function getCreatedAtColumn()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('1, d F Y');
        
    }

    protected $hidden = [];
}
