<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish_list extends Model
{
    use HasFactory;
    protected $table = 'wish';
    protected $fillable = [
        'user_id',
        'listing_id',
    ];
}
