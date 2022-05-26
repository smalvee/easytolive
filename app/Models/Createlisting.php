<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Createlisting extends Model
{
    use HasFactory;
    protected $table = 'propertylisting';
    protected $fillable = [
        'user_id',
        'property_type',
        'estate',
        'district',
        'property_name',
        'address',
        'postal_code',
        'mrt',
        'school',
        'comm_structure',
        'comm_percentage',
        'listing_type',
        'price_type',
        'maintenance_fee',
        'bedrooms',
        'bathrooms',
        'floor_size',
        'floor_level',
        'unit_number_floor',
        'unit_number_unit',
        'currently_tenanted',
        'furnishing',
        'furnishing_material',
        'headline',
        'description',
        'unit_features',
        'agent_name',
        'agent_number',
        'unique_id',
        'created_at',
        'updated_at',
    ];
}
