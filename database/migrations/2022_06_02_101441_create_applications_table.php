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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string("account_id");
            $table->string("id_number");
            $table->string("marital_status");
            $table->string("number_of_dependants");

            $table->string("province");
            $table->string("town");

            $table->string("employer_full_name");
            $table->string("company_name");
            $table->string("company_province");
            $table->string("company_town");
            $table->string("company_contact");
            $table->string("position_held");
            $table->string("type_of_employment");
            $table->string("employment_length")->nullable();

            $table->string("income_before_deductions");
            $table->string("income_after_deductions");

            $table->string("groceries")->nullable();
            $table->string("water_and_electricity")->nullable();
            $table->string("home_insurence")->nullable();
            $table->string("school_fees")->nullable();
            $table->string("travel")->nullable();
            $table->string("cellphone")->nullable();
            $table->string("subscriptions")->nullable();
            $table->string("funeral_policies")->nullable();
            $table->string("car_insurence")->nullable();
            $table->string("other")->nullable();

            $table->boolean("submit")->default(false);

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
        Schema::dropIfExists('applications');
    }
};
