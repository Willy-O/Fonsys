<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 20);
            $table->string('lastName', 20);
            $table->date('dateBorn');
            $table->string('email', 155)->unique();
            $table->text('homeAddress', 300);
            $table->integer('codeCellPhone', $autoIncrement = false, 4);
            $table->integer('cellPhone', $autoIncrement = false, 7)->unique();
            $table->integer('codeHomePhone',$autoIncrement = false, 4);
            $table->integer('homePhone',$autoIncrement = false, 7)->unique();
            $table->string('education', 100);
            $table->string('ethnicGroup', 100)->nullable();
            $table->text('workAddress', 300)->nullable();
            $table->string('publicWorker',2);
            $table->text('workInstitute', 300)->nullable();
            $table->string('conmunity', 300);
            $table->string('finance', 2);
            $table->string('financeType');
            $table->string('gender', 2);
            $table->integer('cedula',$autoIncrement = false, 10)->unique();
            // $table->foreignId('projects_data_id')->references('id')->on('projects_data');

            // Foreing keys

            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiaries');
    }
}
