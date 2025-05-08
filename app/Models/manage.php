<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class manage extends Model
{
    protected $fillable = [
        'nama',
        'kelas',
        'jurusan',
        'alamat',
    ];
}
