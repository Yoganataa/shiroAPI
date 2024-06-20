<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webtoon extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'title', 'author', 'genre', 'description', 'cover_image', 'status', 'rating', 'view_count', 'qr_code'
    ];



    public function episodes()
    {
        return $this->hasMany(Episode::class, 'webtoon_id', 'id');
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites', 'webtoon_id', 'user_id');
    }
}
