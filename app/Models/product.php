<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'maintitle',
     'descriptiontitle',
      'secondarytitle',
     'productname',
      'productdescription',
      'image'];

      public function productCategory()
      {
          return $this->belongsTo(productCategory::class);
      }

}
