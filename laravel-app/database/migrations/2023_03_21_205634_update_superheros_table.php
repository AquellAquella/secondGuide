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
            //Name the column and where you want to locate it
            $table->string('superpower') -> after('gender');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //drop the column
        Schema::table('superheros', function (Blueprint $table) {
            $table->dropColumn('superpower');
        });
    }
};
