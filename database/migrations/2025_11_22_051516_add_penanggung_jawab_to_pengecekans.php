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
        Schema::table('pengecekans', function (Blueprint $table) {
            $table->unsignedBigInteger('penanggung_jawab')->nullable()->after('id_user');

            $table->foreign('penanggung_jawab')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('pengecekans', function (Blueprint $table) {
            $table->dropForeign(['penanggung_jawab']);
            $table->dropColumn('penanggung_jawab');
        });
    }
};
