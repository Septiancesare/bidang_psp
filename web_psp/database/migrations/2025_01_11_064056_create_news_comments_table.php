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
        Schema::create('news_comments', function (Blueprint $table) {
            $table->id('id_comment');
            $table->foreignId('id_news')->references('id_news')->on('news')->constrained()->onDelete('cascade');
            $table->foreignId('id_user')->references('id_user')->on('users')->constrained()->onDelete('cascade');
            $table->text('comment');
            $table->integer('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_comments');
    }
};
