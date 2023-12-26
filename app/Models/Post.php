<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'permission',
        'status_post',
        'photo_path',
        'user_id',
    ];
}
