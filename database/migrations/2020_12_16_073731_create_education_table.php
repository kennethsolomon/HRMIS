<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->enum('level', ['elementary','secondary','vocational', 'college', 'graduate_studied']);
            $table->string('name');
            $table->string('track')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('attainment')->nullable();
            $table->date('year_graduated');
            $table->string('awards')->nullable();
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
        Schema::dropIfExists('education');
    }
}
