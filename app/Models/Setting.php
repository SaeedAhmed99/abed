<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';

    protected $fillable = [
        'name',
        'logo',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
        'instagram_link',
        'snapchat_link',
        'tiktok_link',
        'email',
        'phone',
        'fax',
        'address',
        'map_iframe',
        'text'
    ];
}
