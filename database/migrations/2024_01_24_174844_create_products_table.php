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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->float('price');
            $table->integer('category_id')->nullable();
            $table->float('discount_price')->nullable();
            $table->integer('discount_percentage')->nullable();
            $table->json('stock')->nullable()->comment('{"initial_quantity,current_quantity,in_stock"}');
            $table->boolean('status')->default(true);
            $table->boolean('on_discount')->default(false);
            $table->json('images')->nullable()->comment('{"image_1,image_2,image_3"}');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
