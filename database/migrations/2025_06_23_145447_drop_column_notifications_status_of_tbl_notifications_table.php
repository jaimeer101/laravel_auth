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
        Schema::table('tbl_notifications', function (Blueprint $table) {
            $table->dropColumn('notifications_status');
        });
        Schema::table('tbl_personal_notifications', function (Blueprint $table) {
            $table->string('notifications_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_notifications', function (Blueprint $table) {
            $table->string('notifications_status');
        });
        Schema::table('tbl_personal_notifications', function (Blueprint $table) {
            $table->dropColumn('notifications_status');
        });
    }
};
