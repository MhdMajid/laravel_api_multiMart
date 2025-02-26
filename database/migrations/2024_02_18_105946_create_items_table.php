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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Category_id');
            $table->string('shop')->default('multimart');            
            $table->longText("category_name")->default('-');
            $table->float('price');
            $table->longText("product_image");
            $table->longText("description");
            $table->longText("name");
            $table->boolean("is_discount");
            $table->float("discount");
            $table->timestamps();
            $table->foreign('Category_id')->references('id')->on('categories')->cascadeOnDelete();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
