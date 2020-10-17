<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->string('journal_title', 250);
            $table->string('slug', 250);
            $table->string('journal_subtitle', 250)->nullable();
            $table->longText('abstract');
            $table->string('type', 100);
            $table->longText('keyword');
            $table->string('status', 100)->default('SUBMITED');
            $table->string('file_journal', 250);
            $table->string('ukuran_file', 100);
            $table->integer('show')->default(1);
            $table->string('created_by', 100);
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
        Schema::dropIfExists('journals');
    }
}
