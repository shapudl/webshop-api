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
        Schema::create('category_closures', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('parent_category_id')->constrained('categories');
            $table->integer('depth');
            $table->primary(['category_id', 'parent_category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('category_closures', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropForeign(['parent_category_id']);

        });
        Schema::dropIfExists('category_closures');
    }
};
