<?php

namespace App\Models;

use App\Models\foto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class komentar extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto_id',
        'user_id',
        'isi_komentar'
    ];

    protected $table = 'komentar_foto';

    public function foto()
    {
        return $this->belongsTo(foto::class, 'foto_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
