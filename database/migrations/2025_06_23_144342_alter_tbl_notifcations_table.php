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
            $table->dropColumn('notifications_source');
            $table->dropColumn('source_id');
            $table->integer('notifications_sources_id');
            $table->integer('reference_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_notifications', function (Blueprint $table) {
            $table->dropColumn('notifications_sources_id');
            $table->dropColumn('reference_id');
            $table->integer('notifications_source');
            $table->integer('source_id');
        });
    }
};
