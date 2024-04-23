<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


    /*

     - reference_code
     - description
     - address
     - city
     - country
     - square_meters
     - bathrooms
     - bedrooms
     - cover_image
     - price

     */
    public function up(): void
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('reference_code', 15)->nullable();
            $table->text('description');
            $table->string('address', 100)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('country', 100)->nullable();
            $table->unsignedSmallInteger('square_meters');
            $table->tinyInteger('bathrooms')->unsigned()->nullable();
            $table->tinyInteger('bedrooms')->unsigned()->nullable();
            $table->string('cover_image')->nullable();
            $table->decimal('price', 9)->unsigned();
            $table->year('year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
