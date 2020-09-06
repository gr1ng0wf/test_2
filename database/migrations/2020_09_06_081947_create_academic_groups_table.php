<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_groups', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('title')->index('title');
            $table->integer('course');
            $table->string('faculty');
            $table->boolean('archive')->nullable()->default(false);
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
        Schema::dropIfExists('academic_groups');
    }
}
