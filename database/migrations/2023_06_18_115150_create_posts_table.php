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
        Schema::create('posts', function (Blueprint $table) {
            $table->id("pid");
            $table->unsignedBigInteger("user")->nullable();
            $table->unsignedBigInteger("category")->nullable();
            $table->string("title")->nullable()->index();
            $table->string("slug")->unique()->nullable()->index();
            $table->string("thumbnail")->nullable();
            $table->string("videourl")->nullable();
            $table->longText('description')->nullable();
            $table->text('metakeyword')->nullable();
            $table->text('metadescription')->nullable();
            $table->boolean('status')->default(0)->nullable();
            $table->timestamp('schedule')->nullable();
            $table->timestamps();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category')->references('catid')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
