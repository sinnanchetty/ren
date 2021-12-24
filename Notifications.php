<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{

	//notifications post table used
    use HasFactory;
    protected $table = 'post';
    protected $fillable = [
        'id',
        'forum_id',
        'description',
        'created_at',
        'updated_at',
        
        /*'image_url',
        'likes_count',
        'commets_count', */        

    ];
}
