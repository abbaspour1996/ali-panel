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
        Schema::table('adapterlists', function (Blueprint $table) {
            // اضافه کردن ستون برای ذخیره زمان آخرین بررسی/تغییر IP
            $table->timestamp('last_checked_at')->nullable()->after('status_service');
            // اضافه کردن ستون برای ذخیره وضعیت پینگ (مثلاً 'online', 'offline', 'unknown')
            $table->string('ping_status', 20)->default('unknown')->after('last_checked_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('adapterlists', function (Blueprint $table) {
            $table->dropColumn('last_checked_at');
            $table->dropColumn('ping_status');
        });
    }
};
