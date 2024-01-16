<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    // protected $fillable = ['category_id', 'title', 'description', 'image_url'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
