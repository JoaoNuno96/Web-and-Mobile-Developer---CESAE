<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('albuns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("date")->nullable();
            $table->string("name");
            $table->string("image_source");
            $table->unsignedBigInteger("fk_band_id");
            $table->foreign("fk_band_id")->references("id")->on("bands");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albuns');
    }
};
