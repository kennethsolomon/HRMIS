<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryGradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_grade', function (Blueprint $table) {
            $table->id();
            $table->integer('grade');
            $table->decimal('step_1');
            $table->decimal('step_2');
            $table->decimal('step_3');
            $table->decimal('step_4');
            $table->decimal('step_5');
            $table->decimal('step_6');
            $table->decimal('step_7');
            $table->decimal('step_8');
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
        Schema::dropIfExists('salary_grade');
    }
}
