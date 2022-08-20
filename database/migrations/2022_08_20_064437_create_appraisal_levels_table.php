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
        // appraisal_id	level	staff_id	comme
        Schema::create('appraisal_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff_id');
            $table->string('app_level');
            $table->string('status');
            $table->string('comment');
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
        Schema::dropIfExists('appraisal_levels');
    }
};
