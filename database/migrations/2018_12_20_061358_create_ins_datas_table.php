<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ins_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name_of_Institution');
            $table->string('Location');
            $table->string('Legal_Status');
            $table->string('Type');
            $table->string('Key_areas_of_work');
            $table->string('Key_persons_name');
            $table->string('Contact');
            $table->string('Region');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ins_datas');
    }
}
