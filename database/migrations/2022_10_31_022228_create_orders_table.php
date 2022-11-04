<?php

use App\Models\Promocode;
use App\Models\User;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->enum('delivery_method', [
                'Courier',
                'Self-delivery from Meest',
                'Self-delivery from Ukrposhta',
                'Self-delivery from Nova Poshta'
            ]);
            $table->enum('pay_method', [
                'Payment upon receipt of goods',
                'Pay now',
                'Cashless for legal entities',
                'Payment for legal entities through a current account',
                'Pay online with the social card "Baby package"',
                'Cashless for individuals',
                'Payment for individuals through a current account',
                'PrivatPay',
                'Credit and payment in installments',
                'Issuance of loans in partner banks'
            ]);
            $table->foreignIdFor(Promocode::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('goods_cost');
            $table->integer('delivery_cost')->nullable()->default(0);
            $table->integer('total_cost');
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
        Schema::dropIfExists('orders');
    }
};