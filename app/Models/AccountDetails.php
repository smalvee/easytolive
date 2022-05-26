<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountDetails extends Model
{
    use HasFactory;
    protected $table = 'account_details';
    protected $fillable = [
        'main_id',
        'title',
        'first_name',
        'last_name',
        'country_code',
        'mobile_number',
        'alt_number',
        'profile_picture',
    ];
}
