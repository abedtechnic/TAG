<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable =[
        
        'title',
        'image_url',
        'introduction',
        'contentone',
        'contenttow'
    ];

    // use HasFactory;
}
