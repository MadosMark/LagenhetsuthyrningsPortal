<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToApartments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apartments', function (Blueprint $table) {

            $table->integer('user_id');
            $table->string('address');
            $table->string('city');
            $table->integer('rent');
            $table->integer('rooms');
            $table->string('description');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apartments', function (Blueprint $table) {

            $table->dropColumn('user_id');
            $table->dropColumn("address");
            $table->dropColumn("city");
            $table->dropColumn("rent");
            $$table->dropColumn("rooms");
            $table->dropColumn("description");
            $table->dropColumn("image");
        });
    }
}
