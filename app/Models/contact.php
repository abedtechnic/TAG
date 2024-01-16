<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable =[

        'title_desc',
        'company_title',
        'company_num',
        'company_email'
    ];
    use HasFactory;
}
