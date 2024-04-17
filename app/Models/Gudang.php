<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $primaryKey = 'kode_barang';
    protected $table = 'gudang';
    protected $fillable = [
        'kode_barang',
        'no_order',
        'letak_barang',
        'berat',
        'tgl_keluar',
        'tgl_masuk',
        'nama_barang',
        'pelabuhan_awal',
        'pelabuhan_tujuan',
        'jenis_kapal',
        'jenis_muatan',
    ];
}
