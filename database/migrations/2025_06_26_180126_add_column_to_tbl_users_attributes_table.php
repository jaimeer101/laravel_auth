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
        Schema::table('tbl_users_attributes', function (Blueprint $table) {
            $table->string('required')->nullable()->after('input_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_users_attributes', function (Blueprint $table) {
            $table->dropColumn('required');
        });
    }
};
