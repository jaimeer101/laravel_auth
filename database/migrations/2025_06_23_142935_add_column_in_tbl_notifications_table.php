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
            $table->string('notifications_status')->after('users_id');
            $table->string('created_by')->after('notifications_status');
            $table->string('updated_by')->after('created_by');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_notifications', function (Blueprint $table) {
            $table->dropColumn('notifications_status');
            $table->dropColumn('status');
            $table->dropColumn('created_by');
            $table->dropColumn('updated_by');
        });
    }
};
