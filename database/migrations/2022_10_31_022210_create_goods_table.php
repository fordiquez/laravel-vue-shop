<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_code')->unique();
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->text('warning_description')->nullable();
            $table->float('old_price')->nullable();
            $table->float('price');
            $table->integer('quantity')->default(0);
            $table->enum('status', ['ready for dispatch', 'in stock', 'ends', 'is over', 'out of stock', 'discontinued']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('goods');
    }
};
