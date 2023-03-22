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
        Schema::table('superheros', function (Blueprint $table) {
            $table->dropColumn('superpower');
            $table->dropColumn('first_appearence');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('superheros', function (Blueprint $table) {
            //Name the column and where you want to locate it
            $table->string('superpower') -> after('gender');
            $table->string('first_appearence') -> after('universe_id');
        });
    }
};
