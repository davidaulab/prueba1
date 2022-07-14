<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locals', function (Blueprint $table) {
            $table->string('img', 250)
            ->after('url')
            ->nullable();
        });

        /**
         *    Schema::create('pruebas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
         */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locals', function (Blueprint $table) {
            $table->dropColumn('img');
        });
    }
};
