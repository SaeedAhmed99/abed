<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $table = 'about_us';

    protected $fillable =[
        'our_company',
        'our_history',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
