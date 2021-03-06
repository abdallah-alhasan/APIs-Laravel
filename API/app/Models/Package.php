<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable =[
        'category_id',
        'city_id ',
        'doner_name',
        'phone_number',
        'title',
        'image',
        'description',
        'status',
        'products_number',
        'condition',
    ];
    use HasFactory;
}
