<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'webtoon_id', 'episode_title', 'episode_number', 'status'
    ];

    protected $searchable = ['episode_title'];

    public function webtoon()
    {
        return $this->belongsTo(Webtoon::class, 'webtoon_id', 'id'); 
    }

    public function pages()
    {
        return $this->hasMany(Page::class, 'episode_id', 'id'); 
    }

    public function readingHistories()
    {
        return $this->belongsToMany(User::class, 'reading_histories', 'episode_id', 'user_id');
    }
}


