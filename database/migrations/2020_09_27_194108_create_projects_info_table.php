<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_info', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('summary');
            $table->integer('time', $autoIncrement = false);
            $table->text('problem');
            $table->text('precedent');
            $table->text('justification');
            $table->text('generalObjective');
            $table->text('specificObjective');
            $table->text('hopedResults');
            $table->text('hopedEfects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_info');
    }
}
