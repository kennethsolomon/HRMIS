<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEligibilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eligibility', function (Blueprint $table) {
            $table->id();
            $table->string('eligibility')->nullable();
            $table->string('rating');
            $table->date('exam_date');
            $table->string('place')->nullable();
            $table->date('validity')->nullable();
            $table->string('number')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eligibility');
    }
}
