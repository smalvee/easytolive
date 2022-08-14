<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertylisting', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('property_type')->nullable();
            $table->string('estate')->nullable();
            $table->string('district')->nullable();
            $table->string('property_name')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('mrt')->nullable();
            $table->string('school')->nullable();
            $table->string('comm_structure')->nullable();
            $table->string('comm_percentage')->nullable();
            $table->string('listing_type')->nullable();
            $table->string('price_type')->nullable();
            $table->string('maintenance_fee')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('floor_size')->nullable();
            $table->string('floor_level')->nullable();
            $table->string('unit_number_floor')->nullable();
            $table->string('unit_number_unit')->nullable();
            $table->string('currently_tenanted')->nullable();
            $table->string('furnishing')->nullable();
            $table->string('furnishing_material')->nullable();
            $table->string('headline')->nullable();
            $table->string('description')->nullable();
            $table->string('unit_features')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('agent_number')->nullable();
            $table->string('image')->nullable();
            $table->string('unique_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propertylisting');
    }
};
