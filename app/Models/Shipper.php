<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    protected $primaryKey = 'no';
    protected $table = 'shipper';
    protected $fillable = [
        'no_order',
        'nama_shipper',
        'tujuan',
        'alamat',
        'jumlah',
    ];
}
