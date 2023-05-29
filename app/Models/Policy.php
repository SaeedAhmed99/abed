<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use HasFactory;
    protected $table = 'policies';

    protected $fillable = [
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
