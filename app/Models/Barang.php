<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey = 'kode_barang';
    protected $table = 'barang';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'jenis',
        'tujuan',
        'letak_barang',
        'no_order',
        'berat',
        'gambar',
        'hasil_kubikasi',
    ];
}
