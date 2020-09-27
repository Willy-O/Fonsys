<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tittle');
            $table->integer('sum', $autoIncrement = false);
            $table->text('objective');
            $table->text('addressLocation');
            $table->string('area');
            $table->text('justification');
            $table->string('countPoint');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_data');
    }
}
