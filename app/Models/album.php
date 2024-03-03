<?php

namespace App\Models;

use App\Models\foto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class album extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_album',
        'deskripsi',
        'user_id'
    ];


    protected $table = 'album';

    public function foto()
    {
        return $this->hasMany(foto::class, 'album_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
