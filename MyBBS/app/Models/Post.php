<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Post->postsに紐づける
class Post extends Model
{
    use HasFactory;

    // propertyの設定
    protected $fillable=[
        'title',
        'body',
    ];
}
