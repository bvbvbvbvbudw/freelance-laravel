<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;
    protected $table = 'information_user';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'description',
        'creating',
        'yt_link',
        'username_link'
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
