<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = ['judul', 'sinopsis', 'tahun_penerbitan', 'genre_id', 'penulis_id', 'penerbit_id'];

    // Definisikan relasi dengan model Genre
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function penulis()
    {
        return $this->belongsTo(Penulis::class);
    }
    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
