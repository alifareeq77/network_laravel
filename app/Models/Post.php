<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'description' ,
        'user_id',
        'file_path',
        'posted_date',

    ];
    public function comment()
    {
        return $this->hasMany(Comments::class);
    }

    public function like()
    {
        return $this->hasMany(Likes::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
    }

}
