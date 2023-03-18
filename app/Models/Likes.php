<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $fillable = [
        'user_id',
        'post_id',
        'liked_date'

    ];
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
