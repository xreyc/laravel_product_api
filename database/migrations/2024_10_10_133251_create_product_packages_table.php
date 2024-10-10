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
        Schema::create('product_packages', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Foreign key for product
            $table->decimal('price', 10, 2); // Price of the package
            $table->text('description')->nullable(); // Description of the package
            $table->string('duration')->nullable(); // Duration of the package
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_packages');
    }
};
