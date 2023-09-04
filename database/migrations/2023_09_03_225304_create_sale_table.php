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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->float('value');
            $table->timestamp('data_hora');
            $table->float('latitude', 8, 6);
            $table->float('longitude', 8, 6);
            $table->boolean('roaming')->default(false);
            $table->foreignId('branch_roaming_id')->nullable()->constrained('branchs');
            $table->foreignId('seller_id')->constrained('sellers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale');
    }
};
