<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunity extends Model
{
    use HasFactory;

    // public function user()
    // {
    //     return $this->HasMany(User::class);
    // }

    public function user()
    {
        return $this->belongsToMany(User::class, 'comunity_users', 'comunity_id', 'user_id');
    }

    public function comunityPost()
    {
        return $this->HasMany(ComunityPost::class);
    }

}
