<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('group_id')->index('group_id');
            $table->string('last_name', 32)->index('last_name');
            $table->string('first_name', 32)->index('first_name');
            $table->string('middle_name', 32)->index('middle_name');
            $table->string('birth_date');
            $table->boolean('active')->nullable()->default(true);
            $table->timestamps();

            $table->foreign('group_id')->on('academic_groups')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
