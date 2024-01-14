<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //detect values that user can access
    protected $fillable = [
        'title',
        'description',
        'price'
    ];
}
