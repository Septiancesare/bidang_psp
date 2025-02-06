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
        Schema::create('member_data', function (Blueprint $table) {
            $table->id('id_member');
            $table->string('name_member');
            $table->string('position_member');
            $table->string('division_member')->nullable();
            $table->string('image_member');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_data');
    }
};
