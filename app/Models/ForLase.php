<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForLase extends Model
{
    use HasFactory;
    protected $table = 'for_lases';

    protected $fillable =[
        'name',
        'description',
        'price',
        'location',
        'image'
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'image' => 'array',
    ];
}
