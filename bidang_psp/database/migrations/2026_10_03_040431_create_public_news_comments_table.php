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
        Schema::create('public_news_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('news_id');
            $table->foreign('news_id')->references('news_id')->on('news')->onDelete('cascade');
            $table->string('commenter_name');
            $table->text('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public_news_comments');
    }
};
