<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SoftDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Bluepriit $table) {
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('products', function(Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
