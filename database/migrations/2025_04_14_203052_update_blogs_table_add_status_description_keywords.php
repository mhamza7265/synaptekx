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
        Schema::table('Blogs', function (Blueprint $table) {
            $table->string('status')->after('user_id');
            $table->text('meta_description')->after('status');
            $table->text('keywords')->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Blogs', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('meta_description');
            $table->dropColumn('keywords');
        });
    }
};
