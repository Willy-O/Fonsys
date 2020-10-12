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
            $table->text('problem', 300);
            $table->text('precedent', 300);
            $table->text('justification', 300);
            $table->text('generalObjective', 300);
            $table->text('specificObjective', 300);
            $table->text('hopedResults', 300);
            $table->text('hopedEfects', 300);
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
