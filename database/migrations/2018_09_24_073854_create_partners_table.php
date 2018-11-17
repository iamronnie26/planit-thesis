<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Workers or Freelancers
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact_no');
            $table->string('business_name');
            $table->string('profile_pic')->nullable();
            $table->integer('address_id');
            $table->softDeletes();
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
        Schema::dropIfExists('partners');
    }
}
