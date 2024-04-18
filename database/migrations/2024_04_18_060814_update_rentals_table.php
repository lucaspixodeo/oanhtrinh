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
        Schema::table('rentals', function (Blueprint $table) {
            $table->decimal('subtotal_bank', 8, 0)->after('deposit');
            $table->decimal('subtotal_cash', 8, 0)->after('deposit');
            $table->decimal('deposit_bank', 8, 0)->after('deposit');
            $table->renameColumn('deposit', 'deposit_cash');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rentals', function (Blueprint $table) {
            $table->renameColumn('deposit_cash', 'deposit');
            $table->dropColumn(['deposit_bank', 'subtotal_cash', 'subtotal_bank']);
        });
    }
};
