<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fieldreports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('url');
            $table->string('collectedby');
            $table->string('bankname');
            $table->string('branchname');
            $table->string('workdone', '1000');
            $table->string('description', '3000');
            $table->integer('ticketid');
            $table->string('ticketsolved')->nullable();
            $table->string('notsolved')->nullable();
            $table->string('reason', '3000')->nullable();
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
        Schema::dropIfExists('fieldreports');
    }
}
