<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('category');
            $table->text('description')->nullable();
            $table->integer('views')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('category');
            $table->index('slug');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
