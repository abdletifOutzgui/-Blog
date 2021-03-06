<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
        'title',
        'user_id',
        'post_id'
    ];
    /**
     * Comment / Post
     */
    public function post(){
        return $this->belongsTo(Post::class);
    }

    /**
     * Comment / User
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
