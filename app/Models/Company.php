<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'brand_user';
    public $timestamps = false;

    protected $fillable = [
	    'user_id',
	    'name',
	    'surname',
	    'email',
	    'phone',
	    'job_title',
	    'job_level',
	    'company_name',
	    'business_type',
	    'country',
	    'region',
	    'budget',
	    'where_hear_about',
    ];
}
