<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('kategoris', function (Blueprint $table) {
            $table->boolean('is_archived')->default(0)->after('id_lokasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('kategoris', function (Blueprint $table) {
            $table->dropColumn('is_archived');
        });
    }
};
