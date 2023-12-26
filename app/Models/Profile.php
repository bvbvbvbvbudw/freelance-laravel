<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'information_user';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'description',
        'username',
        'creating',
        'yt_link',
        'website',
        'username_link',
    ];

}
