<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('occupation');
            $table->string('relegion');
            $table->string('email');
            $table->string('phone');
            $table->string('nid');
            $table->string('password');
            $table->string('permanentaddress');
            $table->string('floor');
            $table->string('unit');
            $table->string('rent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
