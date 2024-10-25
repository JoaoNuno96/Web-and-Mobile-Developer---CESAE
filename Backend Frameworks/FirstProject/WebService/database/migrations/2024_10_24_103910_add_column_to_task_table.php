<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //MIGRATION ADD COLUMN NIF TO USER---[TABLE]
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("nif")->default("não_existe_ainda")->after("email");
            $table->string("address")->default("não_existe_ainda")->after("nif")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("address");
            $table->dropColumn("nif");
        });
    }
};
