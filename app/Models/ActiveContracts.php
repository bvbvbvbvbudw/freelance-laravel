<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveContracts extends Model
{
    use HasFactory;
    protected $table = 'active_contracts';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'job_id',
        'amount',
        'description',
        'freelancer_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
