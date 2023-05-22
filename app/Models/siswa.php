<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminute\database\Eloquent\Casts\Attribute;
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

    protected function image(): Attribute
    {
        return Attribute::make(
            // get: fn ($image) => asset('/storage.admin/' . $image),
        );
    }
}
