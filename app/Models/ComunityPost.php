<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComunityPost extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comunity()
    {
        return $this->belongsTo(Comunity::class);
    }

    public function comentary()
    {
        return $this->HasMany(Comentary::class);
    }



}
