<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work_img extends Model
{
    protected $fillable =
     [
        'image_url',
        'title',
        'description'
    ];
    // use HasFactory;
}
