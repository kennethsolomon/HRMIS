<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('name_extension')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->date('dob');
            $table->string('tin',15);
            $table->string('sss', 15);
            $table->string('philhealth', 15);
            $table->string('pag-ibig', 15);
            $table->string('gsis', 15);
            $table->string('mobile',15);
            $table->string('telephone',15);
            $table->string('email');
            $table->string('umid');
            $table->string('citizenship'); //suggested format if dual citizenship (fil-am/ fil-can)
            $table->string('spouse_first_name');
            $table->string('spouse_middle_name');
            $table->string('spouse_last_name');
            $table->string('spouse_occupation');
            $table->string('spouse_employer');
            $table->string('spouse_business_address');
            $table->string('spouse_contact_number');
            $table->string('father_last_name');
            $table->string('father_first_name');
            $table->string('father_middle_name');
            $table->string('father_name_extension');
            $table->string('mother_last_name');
            $table->string('mother_first_name');
            $table->string('mother_middle_name');
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
        Schema::dropIfExists('employee_profile');
    }
}
