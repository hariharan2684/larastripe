<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Primary key for the order
            $table->foreignId('product_id')->constrained('products')->onUpdate('cascade')->restrictOnDelete(); // Foreign key to products table
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->restrictOnDelete(); // Foreign key to users table
            $table->integer('quantity'); // Quantity of the product ordered
            $table->decimal('total_price', 8, 2); // Total price for the order
            $table->bigInteger('order_number')->unsigned()->default(time()); // Unique order number
            $table->string('customer_address')->nullable(); // Address of the customer
            $table->integer('status')->default(1); // Status of the order
            $table->integer('payment_type')->default(1); // Type of payment
            $table->integer('payment_status')->default(1); // Status of the payment
            $table->string('payment_reference')->nullable(); // Reference for the payment
            $table->timestamps(); // created_at and updated_at timestamps
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
