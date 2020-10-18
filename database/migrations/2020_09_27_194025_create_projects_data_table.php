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
            $table->text('objective', 300);
            $table->text('addressLocation', 300);
            $table->string('area');
            $table->text('justification', 300);
            $table->string('countPoint');
            $table->string('status');
            $table->foreignId('beneficiaries_id')->references('id')->on('beneficiaries');
            // $table->foreignId('projects_info_id')->references('id')->on('projects_info');
            $table->foreignId('clousures_id')->references('id')->on('clousures');
            // $table->foreignId('trackings_id')->references('id')->on('trackings');
            $table->foreignId('contracts_id')->references('id')->on('contracts');
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
