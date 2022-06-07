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
            $table->string("alternative_phone_number")->nullable();
            $table->string("marital_status");
            $table->string("number_of_dependants");

            $table->string("province");
            $table->string("town");

            $table->string("employer_full_name");
            $table->string("company_name");
            $table->string("company_province");
            $table->string("company_town");
            $table->string("company_tel");
            $table->string("position_held");
            $table->string("type_of_employment");
            $table->string("employment_length")->nullable();

            $table->string("income_before_deductions");
            $table->string("income_after_deductions");

            $table->string("identity_document");
            $table->string("identity_document_filename");
            $table->string("payslip_document");
            $table->string("payslip_document_filename");
            $table->string("statement_document");
            $table->string("statement_document_filename");

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
