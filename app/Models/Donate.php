<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    use HasFactory;
    protected $table = 'donation';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'user_id_donate',
        'amount',
        'created_at',
        'updated_at'
    ];
}
