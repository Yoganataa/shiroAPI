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
        Schema::create('webtoons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('genre');
            $table->text('description');
            $table->string('cover_image');
            $table->enum('status', ['ongoing', 'complete']);
            $table->tinyInteger('rating')->unsigned()->check('rating >= 0 AND rating <= 10');
            $table->integer('view_count');
            $table->longText('qr_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webtoons');
    }
};
