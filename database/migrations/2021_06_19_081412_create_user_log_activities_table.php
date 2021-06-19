<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLogActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_log_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->string('log_url', 300)->nullable();
            $table->string('log_method', 20)->nullable();
            $table->string('log_type', 50)->nullable();
            $table->string('subject', 200)->nullable();
            $table->string('subject_hint')->nullable();
            $table->string('ip_address', 64)->nullable();
            $table->string('agent', 300)->nullable();
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
        Schema::dropIfExists('user_log_activities');
    }
}
