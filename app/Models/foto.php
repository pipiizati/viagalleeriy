<?php

namespace App\Models;

use App\Models\like;
use App\Models\album;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class foto extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_foto',
        'deskripsi_foto',
        'lokasi_file',
        'album_id',
        'user_id',
    ];

    protected $table = 'foto';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function like()
    {
        return $this->hasMany(like::class, 'foto_id', 'id');
    }
    public function komentar()
    {
        return $this->hasMany(komentar::class, 'foto_id', 'id');
    }

    public function album()
    {
        return $this->belongsTo(album::class, 'album_id', 'id');
    }
}
