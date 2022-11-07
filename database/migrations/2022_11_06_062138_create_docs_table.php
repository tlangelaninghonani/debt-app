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
        Schema::create('docs', function (Blueprint $table) {
            $table->id();
            $table->string("account_id");
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
        Schema::dropIfExists('docs');
    }
};
