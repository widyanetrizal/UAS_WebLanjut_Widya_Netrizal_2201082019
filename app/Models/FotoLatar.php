<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoLatar extends Model
{
    use HasFactory;

    protected $table = 'foto_latars'; // Menentukan nama tabel yang digunakan oleh model
    protected $fillable = ['nama_file']; // Kolom yang dapat diisi (fillable) sesuai dengan struktur tabel
}
