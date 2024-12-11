<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa'; // Nama tabel di database
    protected $fillable = ['nama', 'NIM', 'jurusan', 'tahun_angkatan', 'IPK']; // Kolom-kolom yang bisa diisi
}
