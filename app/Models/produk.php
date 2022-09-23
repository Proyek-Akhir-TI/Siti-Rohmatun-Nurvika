<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\produkController;

class produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'gambar_produk',
        'gambar_detail',
        'gdetail1',
        'gdetail2',
        'nama_produk',
        'deskripsi',
        'kondisi',
        'ukuran',
        'stok',
        'harga',
        'harga_asli',
        'donasi'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function keranjang(){
        return $this->hasMany(Keranjang::class);
    }
}
