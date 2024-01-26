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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->integer('customer_id')->nullable();
            $table->integer('total_price');
            $table->integer('total_quantity');
            $table->enum('status', ['pending', 'processing', 'shipped', 'delivered', 'cancelled'])->default('pending');
            $table->json('customer')->nullable()->comment('{"nom,prenoms,email,phone,country,city,address"}');
            $table->json('products')->comment('{"product_id,quantity,price,color,size"}');
            $table->json('paymentData')->nullable()->comment('{"payment_method,payment_status,payment_id"}');
            $table->text('address_details')->nullable();
            $table->json('shipping')->nullable()->comment('{"shipping_method,shipping_status"}');
            $table->json('discount')->nullable()->comment('{"discount_percentage,discount_price"}');
            $table->date('date_order')->default(now());
            $table->date('date_shipped')->nullable();
            $table->date('date_delivered')->nullable();
            $table->date('date_cancelled')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
