<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaan';
    protected $fillable = [
        'nama_perusahaan',
        'alamat_perusahaan',
        'no_telp',
        'deskripsi',
        'email',
        'website', 
         
    ];
}
