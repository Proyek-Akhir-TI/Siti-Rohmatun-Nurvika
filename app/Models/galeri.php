<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\galeriController;

class galeri extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dokumentasi',
        'tempat',
        'jenis_bantuan',
        'jumlah'
    ];
}
