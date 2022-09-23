<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'stok',
        'size',
        'kondisi',
        'deskripsi',
        'harga',
        'status',
        'bukti_tf',
        'harga_asli',
        'donasi',
        'alamat',
        'user_id'
    ];

    public function pembayaran() {
        return $this->hasOne(pembayaran::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }



}
