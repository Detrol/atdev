<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('company_name');
            $table->string('company_number');
            $table->string('email');
            $table->string('page_name');
            $table->string('page_slogan')->nullable();
            $table->string('pages');
            $table->integer('contact_check')->default(0);
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_address')->nullable();
            $table->text('contact_hours')->nullable();
            $table->integer('contact_form_check')->default(0);
            $table->string('contact_form_mail')->nullable();
            $table->integer('languages_check')->default(0);
            $table->string('languages')->nullable();
            $table->string('template');
            $table->string('template_other')->nullable();
            $table->integer('login_check')->default(0);
            $table->text('login_text')->nullable();
            $table->string('package');
            $table->string('text_extra')->nullable();
            $table->integer('accepted');
            $table->string('unique_id');
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
        Schema::dropIfExists('missions');
    }
}
