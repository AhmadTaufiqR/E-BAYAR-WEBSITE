<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class siswa extends Authenticatable
{
    use HasApiTokens;
    use softDeletes;
    use HasFactory;

    protected $table = 'tb_siswa';
    protected $fillable = [
        'username',
        'password',
        'nama',
        'no_telephone',
        'email',
        'alamat',
        'gambar',
    ];

    protected $hidden = [];
}
