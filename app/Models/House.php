<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $fillable = ['reference_code', 'description', 'square_meters', 'price', 'exterior'];

    //protected $guarded = [];
}
