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
        Schema::create('articles', function (Blueprint $table) {
            $table->id('id_article');
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('content');
            $table->string('cover')->nullable();
            $table->unsignedBigInteger('id_categories');
            $table->foreign('id_categories')
                ->references('id_categories')
                ->on('categories')
                ->onDelete('cascade');
            $table->unsignedBigInteger('view_count')->default(0);
            $table->unsignedBigInteger('likes')->default(0);
            $table->boolean('is_draft')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
