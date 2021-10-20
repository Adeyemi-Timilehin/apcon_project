<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationDetailsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('referee_name')->nullable();
            $table->string('referee_email')->nullable();
            $table->string('referee_phone')->nullable();
            $table->string('referee_company')->nullable();
            $table->string('school_attended')->nullable();
            $table->date('school_completed')->nullable();
            $table->string('letter_of_reference')->nullable();
            $table->string('registration_document')->nullable();
            $table->string('cac')->nullable();
            $table->string('memorandum')->nullable();
            $table->string('directors_details')->nullable();
            $table->string('staff_details')->nullable();
            $table->string('financial_report')->nullable();
            $table->string('tax_clearance')->nullable();
            $table->string('compliance_letter')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registration_details');
    }
}
