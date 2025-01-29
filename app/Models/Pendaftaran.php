<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap', 'email', 'no_telepon', 'alamat', 'jurusan', 'status'
    ];
}
