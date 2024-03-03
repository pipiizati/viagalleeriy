<?php

namespace App\Models;

use App\Models\foto;
use App\Models\like;
use App\Models\album;
use App\Models\komentar;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'picture',
        'bio',
        'nama_lengkap',
        'alamat'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        // 'password' => 'hashed',
    ];

    public function foto()
    {
        return $this->hasMany(foto::class, 'user_id', 'id');
    }
    public function like()
    {
        return $this->hasOne(like::class, 'like_id', 'id');
    }
    public function komentar()
    {
        return $this->hasMany(komentar::class, 'user_id', 'id');
    }
    public function album()
    {
        return $this->hasMany(album::class, 'user_id', 'id');
    }
}
