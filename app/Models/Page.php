<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'episode_id', 'page_number', 'page_text'
    ];

    public function episode()
    {
        return $this->belongsTo(Episode::class, 'episode_id', 'id');
    }
}

