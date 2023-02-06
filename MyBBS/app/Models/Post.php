<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Postはpostsテーブルに紐づいている
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body'
    ];
}
