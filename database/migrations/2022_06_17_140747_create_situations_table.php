<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSituationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('spin_volume');
            $table->integer('AGT_workers');
            $table->integer('AGT_output');
            $table->integer('mail_workers');
            $table->integer('mail_output');
            $table->integer('pakket_workers');
            $table->integer('pakket_output');
            $table->integer('uitloop_workers');
            $table->integer('uitloop_output');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('situations');
    }
}
